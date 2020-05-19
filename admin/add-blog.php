<?php
    include "config.php";

    $title = $_POST["title"];
    $text =  $_POST["text"];
    
    $filename = $_FILES["image"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $filesize = $_FILES["image"]["size"];
    $allowed_file_types = array('.jpg','.jpeg','.png','.pdf');	

    if (in_array($file_ext,$allowed_file_types) && ($filesize < 5000000))
    {	
        // Rename file
        $newfilename = md5($file_basename) . $file_ext;
        if (file_exists("blogImg/" . $newfilename))
        {
            // file already exists error
            echo "You have already uploaded this file.";
            unlink("blogImg/" . $newfilename);
            move_uploaded_file($_FILES["image"]["tmp_name"], "blogImg/" . $newfilename);
            echo "File uploaded successfully.";	
            $newfilename = 'blogImg/' . $newfilename;	
            $adauga = "INSERT INTO `blog`(`bg`, `title`, `text`) VALUES ('$newfilename', '$title', '$text')";
            mysqli_query($connect, $adauga) or die(mysqli_error($connect));
            header("location: adauga-blog.php");
            $_SESSION["adaugat"] = true;
        }
        else
        {		
            move_uploaded_file($_FILES["image"]["tmp_name"], "blogImg/" . $newfilename);
            echo "File uploaded successfully.";	
            $newfilename = 'blogImg/' . $newfilename;	
            $adauga = "INSERT INTO `blog`(`bg`, `title`, `text`) VALUES ('$newfilename', '$title', '$text')";
            mysqli_query($connect, $adauga);
            header("location: adauga-blog.php");
            $_SESSION["adaugat"] = true;
        }
    }
    elseif (empty($file_basename))
    {	
        // file selection error
        echo "Please select a file to upload.";
    } 
    elseif ($filesize > 500000)
    {	
        // file size error
        echo "The file you are trying to upload is too large.";
    }
    else
    {
        // file type error
        echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
        unlink($_FILES["image"]["tmp_name"]);
    }


?>
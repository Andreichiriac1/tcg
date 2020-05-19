<?php
include 'config.php';

    // preia datele din formular
    $usernam = $_POST['user'];
    $passwor = $_POST['pass'];
    $username =  mysqli_real_escape_string($connect, $usernam);
    $password =  mysqli_real_escape_string($connect, $passwor);
    $password = hash('sha256', $password);
    // formeaza si executa query-ul de select din baza de date
    $query = "SELECT * FROM `log` WHERE `user` = '".$username."' AND `pass` = '".$password."'";
    $result = mysqli_query($connect,$query);
 
    // verifica daca interogarea MySQL a gasit date valide
    if (mysqli_num_rows($result) < 1) {
        // daca nu, afiseaza un mesaj de eroare
        $_SESSION["error"] = true;
        header("location: index.php");
    } else {
        
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION["loged"] = "true";
        header("location: dashboard.php");
    }
?>
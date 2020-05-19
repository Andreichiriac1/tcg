<style>
    .opens-share{
        height: 45px;
        width: 45px;
        position: fixed;
        right: 0px;
        top: 48%;
        border-radius: 20px 0px 0px 20px;
        padding: 10px;
        background-color: #141414;
        cursor: pointer;
        z-index: 999999;
    }
    .opens-share img{
        width: 100% !important;
        height: 100% !important;
    }
    .close-share{
        height: 45px;
        width: 45px;
        position: fixed;
        right: 0px;
        top: 48%;
        border-radius: 20px 0px 0px 20px;
        padding: 10px;
        background-color: #141414;
        cursor: pointer;
        z-index: 999999;
        display: none;
    }
    .close-share img{
        width: 100% !important;
        height: 100% !important;
    }
    .modal-share{
        padding: 80px 0px;
        position: fixed;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: #141414;
        width: 0px;
        text-align: center;
        z-index: 999999;
    }
    .modal-share div{
        display: none;
    }
    .modal-share h1{
        color: white;
    }
    .feedback{
        height: 40px;
        width: 80%;
        border: none;
    }
    .share {
        list-style-type: none;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .share li img{
        height: 30px;
    }
    .copy{
        margin: 10px 0px;
        cursor: pointer;
        height: 40px;
        width: 80%;
        border: none;
    }
    .feedback{
        margin: 10px 0px;
        cursor: pointer;
    }
    .feedback-modal{
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, .5);
        z-index: 9999999;
        display: none;
    }
    .feedback-modal #feedback{
        height: 100vh;
        padding: 3vh 0px;
    }
    .feedback-modal .close-feedback-modal{
        color: white;
        font-size: 2rem;
        position: fixed;
        right: 20%;
        cursor: pointer;
    }
    .copied{
        display: none;
    }
    @media all and (max-width: 500px){
    .feedback-modal .close-feedback-modal{
        color: white;
        font-size: 2rem;
        position: fixed;
        right: 10%;
        top: 5px;
        cursor: pointer;
    }

    }
</style>
<div class="opens-share">
    <div class="">
        <img src="img/shareImg.png" alt="" class="">
    </div>
</div>
<div class="close-share">
    <div class="">
        <img src="img/shareImg.png" alt="" class="">
    </div>
</div>
<div class="modal-share">
    <div class="cont">
        <ul class="share">
            <li>
                <a href="whatsapp://send?text=http://theconceptgroup.ro/" data-action="share/whatsapp/share"><img class="img-fluid" src="img/whatsapp.png" alt=""></a>
            </li>
            <li>
             <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Ftheconceptgroup.ro%2F&layout=button&size=large&width=77&height=28&appId" width="77" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </li>
            <li>
            <a class="twitter-share-button"
                href="https://twitter.com/intent/tweet?text=http://theconceptgroup.ro/"
                data-size="large">
                <img class="img-fluid" src="img/tritter.png" alt=""></a>
            </li>
        </ul>
        <p class="copied">Link Copied!</p>
        <button data-clipboard-text="http://theconceptgroup.ro/" class="copy">Copy Link</button>
        <button class="feedback">Leave a feedback</button>
    </div>
</div>
<div class="feedback-modal">
    <div id="feedback">
        <div class="close-feedback-modal">x</div>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSflio2jb6j_WCdseMDDmoGVMm4mHWVMWWu25Bf9bZU_GEKRWg/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Se încarcă…</iframe>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
<script>
    new ClipboardJS('.copy');
</script>
<script>
    $(".copy").on("click", function(){
        $(".copied").fadeIn();
    });
</script>
<script>
    $(document).ready(function(){
        $(".opens-share").on("click", function(){
            
            $(this).animate({right: '250px'});
            $(".close-share").animate({right: '250px'});
            $(".modal-share").animate({width: '250px'});
            $(this).fadeOut(10);
            $(".modal-share div").fadeIn();
            $(".close-share").fadeIn(10);

        });
        $(".close-share").on("click", function(){
            $(".modal-share div").fadeOut();
            $(".opens-share").animate({right: '0px'});
            $(this).animate({right: '0px'});
            $(".modal-share").animate({width: '0px'});
            $(this).fadeOut(10);
            $(".opens-share").fadeIn(10);
        });
        $(".feedback").on("click", function(){
            $(".feedback-modal").fadeIn();
        });
        $(".close-feedback-modal").on("click", function(){
            $(".feedback-modal").fadeOut();
        });
    });
</script>
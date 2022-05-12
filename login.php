<?php 
$kullancıAdı = "g201210584@sakarya.edu.tr";
// $kullancıErr = $emailErr = "";
// $email  = "";

  



    if (($_POST["kullancı"]) == ($kullancıAdı) && ($_POST["şifre"]) == ("g201210584"))
    {
       echo "HOŞ GELDİNİZ ". substr($kullancıAdı,0,10) ; 
    }
    else 
    {
        echo ("<script>
    window.alert('Girmiş olduğunuz kullancı adı ya da şifreyi Yanlıştır Lütfen tekrar deneyin');
    window.location.href='login.html';
    </script>");
    }

?>
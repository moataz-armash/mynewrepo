<?php 
$kullancıAdı = "g201210584@sakarya.edu.tr";
// $kullancıErr = $emailErr = "";
// $email  = "";
    if (empty($_POST["kullancı"]) || empty($_POST["şifre"]))
    {
        echo ("<script>
        window.alert('Lütfen bütün boşlokları doldurmayı unutmayın');
        window.location.href='login.html';
        </script>");
    }
    else {
        $email = test_input($_POST["kullancı"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo ("<script>
            window.alert('lütfen geçerli bir email giriniz');
            window.location.href='login.html';
            </script>");
        }
    }
    // for ($i=0 ; i <= count($_POST["kullancı"]);$i++ )
    // {
    //     if ($_POST["kullancı"][$i] == " ")
        
    // }
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

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>
<?php 
$kullancıAdı = "b211210577@sakarya.edu.tr";
    if (empty($_POST["kullanici"]) || empty($_POST["sifre"]))
    {
        echo ("<script>
        window.alert('Lütfen bütün boşlokları doldurmayı unutmayın');
        window.location.href='login.html';
        </script>");
    }
    else {
        $email = test_input($_POST["kullanici"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo ("<script>
            window.alert('lütfen geçerli bir email giriniz');
            window.location.href='login.html';
            </script>");
        }
    }

    if (($_POST["kullanici"]) == ($kullancıAdı) && ($_POST["sifre"]) == ("b211210577"))
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
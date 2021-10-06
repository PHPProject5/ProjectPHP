<?php
        if(isset($_POST['login'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
    
            if ($user == 'admin' AND $pass == 'admin') {
                 header("Location: component/admin.php");
            } else {
                 $gagal = "<div class='alert alert-danger' role='alert'>Username atau password tidak sah</div>";
            }
        }
?>
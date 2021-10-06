<?php
    error_reporting(0);

    $tombol=$_POST['tombol'];
    $var=$_POST['var'];

    if ($tombol) {
        echo "Password anda adalah : $var";
    }

    echo "
        <form method='post'>
            <input type='password' name='var'>
            <input type='submit' name='tombol' value='Kirim'>
        </form>
    ";
?>
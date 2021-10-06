<?php
    error_reporting(0);

    $tombol=$_POST['tombol'];
    $var=$_POST['var'];

    if ($tombol) {
        echo "Jenis kelamin anda adalah : ".$var;
    }

    switch($var){
        case "L":
            $checked1="checked";
        break;
        case "P":
            $checked2="checked";
        break;
    }

    echo "
        <form method='post'>
            <input type='radio' name='var' value='L' $checked1> Laki-Laki
            <input type='radio' name='var' value='P' $checked2> Perempuan
            <input type='submit' name='tombol' value='Kirim'>
        </form>
    ";
?>
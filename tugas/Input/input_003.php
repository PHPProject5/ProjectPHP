<?php
    error_reporting(0);

    $tombol=$_POST['tombol'];
    $var=$_POST['var'];

    if ($tombol) {
        echo "Buah kesukaan anda adalah : ";

        foreach($var as $ar)
        {
            echo "$ar, ";
        }
    }

    echo "
        <form method='post'>
            <input type='checkbox' name='var[]' value='Jeruk'> Jeruk <br>
            <input type='checkbox' name='var[]' value='Rambutan'> Rambutan <br>
            <input type='submit' name='tombol' value='Kirim'>
        </form>
    ";
?>
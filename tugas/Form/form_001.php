<?php
    error_reporting(0);

    if($_POST['tombol'])
    {
        echo $_POST['var'];
        echo "<hr>";
    }

    echo "
        <form method='post'>
            Masukan Nama Anda :
            <input type='text' name='var'>
            <input type='submit' name='tombol' value='Kirim'>
        </form>
    ";
?>
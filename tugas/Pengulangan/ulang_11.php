<?php
    $no="0";
    $array_siswa=array(
        array("Achmad","RPL","Kel. A"),
        array("Fajar","RPL","Kel. A"),
        array("Gilang","RPL","Kel. A"),
    );

    $jumlah_array=count($array_siswa);

    for($a=0;$a<$jumlah_array;$a++)
    {
        $no++;

        $jumlah_array=count($array_siswa[$a]);

        echo "$no. ";

        for($b=0;$b<$jumlah_array;$b++)
        {
            echo "{$array_siswa[$a][$b]}, ";
        }

        echo "<br>";
    }
?>
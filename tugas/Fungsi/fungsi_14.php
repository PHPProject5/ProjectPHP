<?php
    function DataSiswa($NIS,$Nama,$Umur)
    {
        echo "
            Perkenalkan Saya :<br>
            NIS : $NIS <br>
            Nama Lengkap :$Nama <br>
            Usia : $Umur Tahun <br>
        ";
    }

    DataSiswa("101"," Nano Supriatna","35");
    echo "<hr>";
    DataSiswa("102"," Kanaya","6");
?>
<?php
    function DataSiswa($NIS,$Nama,$Umur)
    {
        return "
            Perkenalkan Saya :<br>
            NIS : $NIS <br>
            Nama Lengkap :$Nama <br>
            Usia : $Umur Tahun <br>
        ";
    }

    echo DataSiswa("101"," Nano Supriatna","35");
    echo "<hr>";
    echo DataSiswa("102"," Kanaya","6");
?>
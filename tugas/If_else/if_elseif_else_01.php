<?php
    $nilai=80;

    if($nilai >= 0 and $nilai < 70) // Syarat 1 : nilai lebih dari atau sama dengan 0 dan nilai kurang dari 70
    {
        echo "Kurang";
        //hasil yang memenuhi syarat 1
    }
    elseif($nilai >= 70 and $nilai < 80) // Syarat 2 : nilai lebih dari atau sama dengan 30 dan nilai kurang dari 50
    {
        echo "Cukup";
        //hasil yang memenuhi syarat 2
    }
    elseif($nilai >= 80 and $nilai <= 100) // Syarat 3 : nilai lebih dari atau sama dengan 80 dan nilai kurang dari 100
    {
        echo "Baik";
        //hasil yang memenuhi syarat 3
    }
    else
    {
        echo "Sangat Baik";
        //hasil tidak memenuhi semua syarat
    }
?>
<?php
function tentukan_nilai($number){
    if ($number >= 85 && $number <= 100) {
        return "Sangat Baik <br>";
    }else if($number >= 70 && $number < 85){
        return "Baik <br>";
    }else if($number >= 60 && $number < 70){
        return "Cukup <br>";
    }else{
        return "Kurang <br>";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>
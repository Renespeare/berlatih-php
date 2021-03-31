<?php
function ubah_huruf($string){
    $res = "";
    for ($i = 0; $i < strlen($string) ;$i++) { 
        $temp = ord($string[$i]) + 1; // convert to ascii
        $res .= chr($temp); // convert back to char
    }
    return $res . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>
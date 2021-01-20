<?php
function tentukan_nilai($number){
  if($number >= 85 && $number <= 100){
    echo "Nilai : ".$number." (Sangat Baik)<br>";
  }elseif($number >= 70 && $number < 85){
    echo "Nilai : ".$number." (Baik)<br>";
  }elseif($number >= 60 && $number <= 70){
    echo "Nilai : ".$number." (Cukup)<br>";
  }elseif($number >= 0 && $number < 60){
    echo "Nilai : ".$number." (Kurang)<br>";
  }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>

<?php
function ubah_huruf($string){
  $new_string = "";
  for ($i=0; $i < strlen($string); $i++) {
    $letter = $string[$i];
    $new_string .= ++$letter;
  }

  return $new_string."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
?>

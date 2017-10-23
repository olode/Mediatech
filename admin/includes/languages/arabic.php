<?php
function lang($phrase)
{
  # code...
  static $lang = array(
    'MESSAGE' => 'Welcome in Arabic',
    'ADMIN'=>'Arabic Admin'
   );
   return $lang[$phrase];
}

 ?>

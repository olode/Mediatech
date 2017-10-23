<?php
function lang($phrase)
{
  # code...
  static $lang = array(
      'MESSAGE' => 'Welcome',
    'ADMIN'=>'administrator'
   );
   return $lang[$phrase];
}

 ?>

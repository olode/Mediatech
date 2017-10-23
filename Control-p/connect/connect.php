<?php
/*database source name*/$dsn='mysql:host=localhost; dbname=mediatech';
/*user*/$user="root";
/*password*/$password="";
    $options= array(
      PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
    );

    try {

      $connect= new PDO($dsn, $user, $password, $options);

      $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    /*  $q= "INSERT INTO sign-in(username) VALUES ('')";
      $connect->exec($q);*/

    } catch (PDException $e) {

      echo 'Failed'. $e-> getMessage() ;

    }





 ?>

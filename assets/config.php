<?php

  // $conn = new mysqli('localhost','root','lonewolffe','db_acydc');

  $servername="localhost";
  // $username="romeking_ocydc_db";
  $username="root";
  // $password="lonewolffe007";
  $password="lonewolffe";
  try{
    // $conn=new PDO("mysql:host=$servername;dbname=romeking_ocydc_db",$username,$password);
    $conn=new PDO("mysql:host=$servername;dbname=ocydc_db",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  }catch(PDOException $e){
    echo "<h2>Failed to connect to server: " . $e->getMessage() . "</h2>";
  }

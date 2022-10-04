<?php

    function OpenCon()
    {
      $dbhost ="localhost";
      $dbuser = "root";
      $dbpass = "";
      $db = "nkuzi";

    /*  $dbhost ="localhost";
    $dbuser = "id19082015_james";
    $dbpass = "E^&]dQLAl1F4#un#";
    $db = "id19082015_dev";*/

      $conn = new mysqli($dbhost, $dbuser, $dbpass,$db ) or die("Connect failed: %s\n". $conn->error);
      return $conn;
    }

      function CloseCon($conn)
      {
        $conn -> close();
      }
 ?>

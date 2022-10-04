<?php
session_start();
 include 'db_connection.php';

 //Open DB Connection
 $conn = OpenCon();



 if ($_POST['type'] == "addStaff") {
   $name = $_POST['name'];
   $position = $_POST['position'];


   if(isset($_FILES["pic"]) && $_FILES["pic"]["error"] == 0){
           $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
           $filename = $_FILES["pic"]["name"];
           $filetype = $_FILES["pic"]["type"];
           $filesize = $_FILES["pic"]["size"];

           // Verify file extension
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

           // Verify file size - 5MB maximum
           $maxsize = 5 * 1024 * 1024;
           if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

           // Verify MYME type of the file
           if(in_array($filetype, $allowed)){
               // Check whether file exists before uploading it
               if(file_exists("upload/" . $filename)){
                   echo $filename . " is already exists.";
               } else{
                   move_uploaded_file($_FILES["pic"]["tmp_name"], "upload/" . $filename);
                     $pic = $filename;
               }
           } else{
               echo "Error: There was a problem uploading your file. Please try again.";
           }
       } else{
           echo "Error: " . $_FILES["pic"]["error"];
       }


  //Open DB Connection
  $conn = OpenCon();
   // Enter Designations Into DB
  if(!$conn -> query(
    " INSERT INTO staff_members (name, position,	imageURL)
    VALUES ('$name','$position',  '$pic' )"
    ))
    {
      echo("Error description: ". $conn->error);
    }

    header("Location:../adminDashboard.php");
    exit();

 }

 if ($_POST['type'] == "addDirector") {
   $name = $_POST['name'];
   $position = $_POST['position'];


   if(isset($_FILES["pic"]) && $_FILES["pic"]["error"] == 0){
           $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
           $filename = $_FILES["pic"]["name"];
           $filetype = $_FILES["pic"]["type"];
           $filesize = $_FILES["pic"]["size"];

           // Verify file extension
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

           // Verify file size - 5MB maximum
           $maxsize = 5 * 1024 * 1024;
           if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

           // Verify MYME type of the file
           if(in_array($filetype, $allowed)){
               // Check whether file exists before uploading it
               if(file_exists("upload/" . $filename)){
                   echo $filename . " is already exists.";
               } else{
                   move_uploaded_file($_FILES["pic"]["tmp_name"], "upload/" . $filename);
                     $pic = $filename;
               }
           } else{
               echo "Error: There was a problem uploading your file. Please try again.";
           }
       } else{
           echo "Error: " . $_FILES["pic"]["error"];
       }


  //Open DB Connection
  $conn = OpenCon();
   // Enter Designations Into DB
  if(!$conn -> query(
    " INSERT INTO  directors (name, position,	imageURL)
    VALUES ('$name','$position',  '$pic' )"
    ))
    {
      echo("Error description: ". $conn->error);
    }

    header("Location:../adminDashboard.php");
    exit();

 }


 if ($_POST['type'] == "addArticle") {
   $title = $_POST['title'];
   $passage = $_POST['passage'];
   $date = date("l jS \of F Y");
   $specialText = $_POST['specialText'];

   function generateRandomString($length = 13) {
     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $charactersLength = strlen($characters);
     $randomString = '';
     for ($i = 0; $i < $length; $i++) {
         $randomString .= $characters[rand(0, $charactersLength - 1)];
     }
     return $randomString;
 }
 $id = generateRandomString();

   if(isset($_FILES["pic"]) && $_FILES["pic"]["error"] == 0){
           $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
           $filename = $_FILES["pic"]["name"];
           $filetype = $_FILES["pic"]["type"];
           $filesize = $_FILES["pic"]["size"];

           // Verify file extension
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

           // Verify file size - 5MB maximum
           $maxsize = 5 * 1024 * 1024;
           if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

           // Verify MYME type of the file
           if(in_array($filetype, $allowed)){
               // Check whether file exists before uploading it
               if(file_exists("upload/" . $filename)){
                   echo $filename . " is already exists.";
               } else{
                   move_uploaded_file($_FILES["pic"]["tmp_name"], "upload/" . $filename);
                     $pic = $filename;
               }
           } else{
               echo "Error: There was a problem uploading your file. Please try again.";
           }
       } else{
           echo "Error: " . $_FILES["pic"]["error"];
       }


  //Open DB Connection
  $conn = OpenCon();
   // Enter Designations Into DB
  if(!$conn -> query(
    "INSERT INTO blog (	id, title, dates,passage, imageURL, specialText )
    VALUES ('$id','$title', '$date', '$passage', '$pic', '$specialText')"
    ))
    {
      echo("Error description: ". $conn->error);
    }

   header("Location:../adminDashboard.php");
   exit();

 }

if ($_POST['type'] == "deleteStaff") {
  $name = $_POST['id'];
 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
    " Delete FROM staff_members WHERE name = '$name'"
    ))
    {
      echo("Error description: ". $conn->error);
    }

    $file_pointer = $_POST['file'];
    // Use unlink() function to delete a file
    if (!unlink($file_pointer)) {
        echo ("$file_pointer cannot be deleted due to an error");
    }
    else {
        echo ("$file_pointer has been deleted");
    }

   header("Location:../adminDashboard.php");
   exit();

}


if ($_POST['type'] == "deleteDirectors") {
  $name = $_POST['id'];
 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
    " Delete FROM directors WHERE name = '$name'"
    ))
    {
      echo("Error description: ". $conn->error);
    }
    $file_pointer = $_POST['file'];
    // Use unlink() function to delete a file
    if (!unlink($file_pointer)) {
        echo ("$file_pointer cannot be deleted due to an error");
    }
    else {
        echo ("$file_pointer has been deleted");
    }
   header("Location:../adminDashboard.php");
   exit();

}


if ($_POST['type'] == "deleteArticle") {
  $id = $_POST['id'];
 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
    " Delete FROM blog WHERE id = '$id'"
    ))
    {
      echo("Error description: ". $conn->error);
    }

    $file_pointer = $_POST['file'];
    // Use unlink() function to delete a file
    if (!unlink($file_pointer)) {
        echo ("$file_pointer cannot be deleted due to an error");
    }
    else {
        echo ("$file_pointer has been deleted");
    }
   header("Location:../adminDashboard.php");
   exit();

}



if ($_POST['type'] == "reserve") {
  $book_ID = $_POST['book_ID'];
  $dateBorrowed = date("Y/m/d");
    $loginUser =  $_SESSION["email"];


 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
   "UPDATE books SET reserver='$loginUser', dateReserved ='$dateBorrowed' Where book_ID = '$book_ID' "
   ))
   {
     echo("Error description: ". $conn->error);
   }

   header("Location:../dashboard.php?requested=true");
   exit();

}

if ($_POST['type'] == "sendMail") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = "Hie my name is ". $name. "/n". $_POST['message']. "/n Please contact me on my email :" .$email ;

  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);

  // send email
  mail("mazivise.jamesleeroy@gmail.com",  $subject ,$msg);
   header("Location:../index.php");
   exit();

}





 ?>

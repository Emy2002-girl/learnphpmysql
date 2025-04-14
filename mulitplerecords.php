<?php

$dsn ='mysql:host=localhost;dbname=imaneranbok';
$user='root';
$pass='';
$dataShown = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
   $fname =$_POST['fname'];
   $lname =$_POST['lname'];
   $email = $_POST['email'];
   $fname1 = $_POST['fname1'];
   $lname1 = $_POST['lname1'];
   $email1 = $_POST['email1'];

try{
   $db = new PDO($dsn,$user,$pass);
   $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO students (fname,lname,email) VALUES ('$fname','$lname','$email'),('$fname1','$lname1','$email1')"; //insert data in mysql 
        $db->exec($sql);
        $last_id = $db->lastInsertId();

      

   echo "insert data seccussfuly !";
      $dataShown = true;
}
catch(PDOException $e){
   echo "error:".$e->getMessage();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    <h2>PHP MYSQL Insert Data</h2>
 <form action="" method="post">
<div style="display: flex; gap: 20px;">
   <div style="display: flex; flex-direction: column; gap: 10px;">
      <label>Firstname: <input type="text" name="fname"></label>
      <label>Lastname : <input type="text" name="lname"></label>
      <label>Email : <input type="text" name="email"></label>
   </div>

   <div style="display: flex; flex-direction: column; gap: 10px;">
      <label>Firstname: <input type="text" name="fname1"></label>
      <label>Lastname : <input type="text" name="lname1"></label>
      <label>Email : <input type="text" name="email1"></label>
   </div>
</div> 
   <input type="submit" value="Select Data"> 
   </form>
</body> 
</html>
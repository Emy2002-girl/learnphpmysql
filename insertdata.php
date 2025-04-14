<?php
$dsn ='mysql:host=localhost;dbname=imaneranbok';
$user='root';
$pass='';
$dataShown = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
   $fname =$_POST['fname'];
   $lname =$_POST['lname'];
   $email = $_POST['email'];
   
try{
   $db = new PDO($dsn,$user,$pass);
   $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO students (fname,lname,email) VALUES ('$fname','$lname','$email')"; //insert data in mysql 
        $db->exec($sql);
        $last_id = $db->lastInsertId();

       echo "insert data seccussfuly ! and the last id is :" .$last_id;
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
      <label>Firstname: <input type="text" name="fname"></label><br>
      <label>Lastname : <input type="text" name="lname"></label><br>
      <label>Email : <input type="text" name="email"></label><br>
  
   <input type="submit" value="Select Data">
   </form>
</body> 
</html>
<?php

$dsn ='mysql:host=localhost;dbname=imaneranbok';
$user='root';
$pass='';
$dataShown = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
   // $fname =$_POST['fname'];
   // $lname =$_POST['lname'];
   // $email = $_POST['email'];
   // $fname1 = $_POST['fname1'];
   // $lname1 = $_POST['lname1'];
   // $email1 = $_POST['email1'];

try{
   $db = new PDO($dsn,$user,$pass);
   $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      //   $sql = "INSERT INTO students (fname,lname,email) VALUES ('$fname','$lname','$email'),('$fname1','$lname1','$email1')"; //insert data in mysql 
      //   $db->exec($sql);
      //   $last_id = $db->lastInsertId();

      // $sql = $db->prepare("INSERT INTO students (fname,lname,email) VALUES (:fname,:lname,:email),(:fname1,:lname1,:email1)");
      // $sql->execute([
      //    ":fname"=>$fname,
      //    ":lname"=>$lname,
      //    ":email"=>$email,
      //    ":fname1"=>$fname1,
      //    ":lname1"=>$lname1,
      //    ":email1"=>$email1,
      // ]);

//    $sql =$db->prepare("INSERT INTO imane (fname,lname,email) VALUES (:fname,:lname,:email)");
//    $sql->execute([
//       ':fname'=>$Fname,
//       ':lname'=>$Lname,
//       ':email'=>$email,
//    ]);

   // echo "insert data seccussfuly !";

      $sql = $db->prepare("SELECT fname, lname, email FROM students");
      $sql->execute();
      $results = $sql->fetchAll(PDO::FETCH_ASSOC);
      $dataShown = true;
      echo "<table border='1'>";
      echo "<tr><th>Firstname</th><th>Lastname</th><th>Email</th></tr>";
      foreach($results as $row){
         echo "<tr>";
         echo "<td>" . $row['fname'] .  "<br>". "</td>";
         echo "<td> " . $row['lname'] .'<br>'."</td>";
         echo "<td>" . $row["email"] .'<br>'."</td>";
         echo "</tr>";
      }
      echo "<table>";
      echo "Select Data into mysql with successy";
}
catch(PDOException $e){
   echo "error:".$e->getMessage();
}
}
?>
<?php if (!$dataShown): ?>
<form method="post">
    <input type="submit" value="Select Data" style="margin-top: 20px; padding: 10px 20px;">
</form>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
  
   <!-- <h2>Conncted into a database in mysql</h2> -->
   <!-- <h2>PHP MYSQL Insert Data</h2>

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
</div> -->
   <!-- <input type="submit" value="Select Data"> -->
   </form>
</body> 
</html>
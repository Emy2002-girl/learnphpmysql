<?php 
// $dsn ='mysql:host=localhost;dbname=test1'; //Data source name
// $user = 'root';
// $pass = '';
// $option = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
// );

// try{
// $connect = new Pdo($dsn,$user,$pass); //Start A new connection wth pdo class
// $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// // $q = "INSERT INTO `items` (name) VALUES ('منتج1')";
// // $connect->exec($q);
// echo 'You are connected';
// }
//  catch(PDOException $e){
//     echo 'Failed' .$e->getMessage();
//  }

//  for($i = 1; $i<=500 ; $i++){
//     $stmt = $connect->prepare("INSERT INTO `item` (`id`) VALUES ('500')");
//     // $stmt->execute();
//  }
$dsn = 'mysql:host=localhost;dbname=brief';
$user = 'root';
$pass = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname1 = $_POST['fname'];
    $lname1 = $_POST['lname'];
    $email1 = $_POST['email'];

    $fname2 = $_POST['fname1'];
    $lname2 = $_POST['lname1'];
    $email2 = $_POST['email1'];

    try {
        $db = new PDO($dsn, $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO imane (fname,lname,email) VALUES ('$fname1','$lname1','$email1'),('$fname2','$lname2','$email2')";
      $db->exec($sql);

      //   $insert = $db->prepare("INSERT INTO imane (fname, lname, email) VALUES 
      //                           (:fname1, :lname1, :email1), 
      //                           (:fname2, :lname2, :email2)");

      //   $insert->execute([
      //       ':fname1' => $fname1,
      //       ':lname1' => $lname1,
      //       ':email1' => $email1,
      //       ':fname2' => $fname2,
      //       ':lname2' => $lname2,
      //       ':email2' => $email2,
      //   ]);

        echo "Insert successful!";
    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
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
   <form action="" method="post">
      <h2>PHP MYSQL Insert Data</h2>
      <label for="">Firstname: <input type="text" name="fname" id=""></label><br>
      <label for="">Lastname: <input type="text" name="lname" id=""></label><br>
      <label for="">email: <input type="text" name="email" id=""></label><br>
       <label for="">Firstname: <input type="text" name="fname1" id=""></label><br>
      <label for="">Lastname: <input type="text" name="lname1" id=""></label><br>
      <label for="">email: <input type="text" name="email1" id=""></label><br>
      <input type="submit" value="Insert" style="background-color:green">
   </form>
</body>
</html>
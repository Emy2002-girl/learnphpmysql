<?php
$dsn = 'mysql:host=localhost;dbname=imaneranbok';
$user = 'root';
$password = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname1 = $_POST['fname1'];
    $lname1 = $_POST['lname1'];
    $email1 = $_POST['email1'];
    $fname2 = $_POST['fname2'];
    $lname2 = $_POST['lname2'];
    $email2 = $_POST['email2'];
    try{
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db->prepare("INSERT INTO students(fname,lname,email) VALUES (:fname1,:lname1,:email1),(:fname2,lname2,:email2)");
        $stmt->execute([
            ":fname1" => $fname1,
            ":lname1" => $lname1,
            ":email1" => $email1,
            ":fname2" => $fname2,
            ":lname2" => $lname2,
            ":email2" => $email2
        ]);
         $last_id = $db->lastInsertId();
        echo "Insert Data with succuy and last id " .$last_id;
    }
    catch(PDOException $e){
        echo "error :" . $e->getMessage();
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
    <h2>PHP MYSQL Prepared Statements</h2>
        <form action="" method='post'>
        <div style="display:flex"></div>
        <div >
            <label for="">Firstname : <input type="text" name="fname1" id=""></label><br>
             <label for="">Lastname : <input type="text" name="lname1" id=""></label><br>
              <label for="">email : <input type="text" name="email1" id=""></label><br>
        </div>
        <div >
            <label for="">Firstname : <input type="text" name="fname2" id=""></label><br>
             <label for="">Lastname : <input type="text" name="lname2" id=""></label><br>
              <label for="">email : <input type="text" name="email2" id=""></label>
        </div>
    </div>
    <input type="submit" value="Insert Data">
    </form>
</body>
</html>
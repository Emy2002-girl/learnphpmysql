<?php
$datasource = 'mysql:host=localhost;dbname=imaneranbok';
$user='root';
$pass='';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    try{
    $data = new PDO($datasource,$user,$pass);
    $data->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    echo "Connection with succesy!";
}
catch(PDOException $e){
    echo "error: " .$e->getMessage();
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
        <input type="submit" value="Connect_data">
    </form>
</body>
</html>
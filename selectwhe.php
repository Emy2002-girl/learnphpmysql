<?php
$dsn = 'mysql:host=localhost;dbname=imaneranbok';
$user = 'root';
$password = '';
$results = [];
$show_data = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
   try{
        $data = new PDO($dsn, $user, $password);
        $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $search_email = $_POST['email'];
        if(!empty($seatch_email)){
            $stmt = $data->prepare("SELECT fname,lname,email WHERE email =:email");
            $stmt->execute([
                ':email' => $search_email,
            ]);
        }
        else{
            $stmt = $data->prepare("SELECT fname,lname,email FROM students");
            $stmt->execute();
        }
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $show_data = true;
     
   }
   catch(PDOException $e){
    echo "error :" .$e->getMessage();
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
    <?php if(!$show_data): ?>
        <form action="" method='post'>
            <input type="submit" value="Select Data">
        </form>
        <?php endif;?>
        <?php if($show_data){
            echo "<table>";
            echo "<tr><th>FirstName</th><th>LastName</th><th>Email</th></tr>";
            foreach($results as $res){
                echo "<tr>";
                echo "<td>" .$res['fname'] ."</td>";
                echo "<td>" .$res['Lname'] ."</td>";
                echo "<td>" .$res['email'] ."</td>";
                echo "</tr>";
            }
            echo "</table>";
             echo "Select data with succesy ";
        }
        ?>
        <?php  if($show_data): ?>
        <form method = 'post'>
            <input type="text" name="email" placeholder ="enter your email">
            <input type="submit" value="select">
        </form>
        <?php endif;?>
</body>
</html>
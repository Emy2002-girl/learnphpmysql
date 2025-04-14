<?php
$dsn = 'mysql:host=localhost;dbname=imaneranbok';
$user = 'root';
$password = '';
$show_data = false;
$results = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $search_email = $_POST["email"] ?? '';

        if (!empty($search_email)) {
            $stmt = $pdo->prepare("SELECT fname, lname, email FROM students WHERE email = :email");
            $stmt->execute([":email" => $search_email]);
        } else {
            $stmt = $pdo->prepare("SELECT fname, lname, email FROM students");
            $stmt->execute();
        }

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $show_data = true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
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
    <form action="" method="post">
        <input type="submit" value="SelectData">
    </form>
    <?php endif ; ?>
    <?php if($show_data): ?>
        <form action="" method="post">
            <?php echo "<table>";
            echo "<tr><th>FirstName</th><th>LastName</th><th>Email</th></tr>";
            foreach($results as $res){
                echo "<tr>";
                echo "<td>" .$res["fname"] ."</td>";
                 echo "<td>" .$res["lname"] ."</td>";
                  echo "<td>" .$res["email"] ."</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "Select Data with success";
            ?>
        </form>
        <?php endif; ?>
        <?php if($show_data): ?>
        <form action="" method="post">
            <input type="text" name="email" id="" placeholder="enter email">
            <input type="submit" value="Select">
        </form>
            <?php endif ; ?>
</body>
</html>
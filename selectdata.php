<?php
$dsn = 'mysql:host=localhost;dbname=imaneranbok';
$user = 'root';
$password = '';
$dat_show = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {

        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("SELECT fname,lname,email FROM students");
        $stmt->execute();
        $results = $stmt->fetchAll((PDO::FETCH_ASSOC));
        $dat_show = true;
        echo "<table>";
        echo "<tr><th>FirstName</th><th>LastName</th><th>Email</th></tr>";
        foreach ($results as $res) {
            echo "<tr>";
            echo "<td>" . $res["fname"] . "</td>";
            echo "<td>" . $res["lname"] . "</td>";
            echo "<td>" . $res["email"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "Select Data with succes";

    } catch (PDOException $e) {
        echo "Error is :" . $e->getMessage();
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
    <?php if(!$dat_show): ?>
        <form action="" method="post">
            <input type="submit" value="SelectData">
        </form>
        <?php endif; ?>
</body>
</html>
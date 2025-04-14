<?php
$dsn = 'mysql:host=localhost;dbname=imaneranbok';
$user = 'root';
$password = '';
$showdata = false;
$results = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $new_data = new PDO($dsn, $user, $password);
        $new_data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get the entered email if any
        $search_email = $_POST['email'] ?? '';

        // Prepare SQL with or without WHERE
        if (!empty($search_email)) {
            $stmt = $new_data->prepare("SELECT fname, lname, email FROM students WHERE email = :email");
            $stmt->execute([':email' => $search_email]);
        } else {
            $stmt = $new_data->prepare("SELECT fname, lname, email FROM students");
            $stmt->execute();
        }

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $showdata = true;

    } catch (PDOException $e) {
        echo "error: " . $e->getMessage();
    }
}
?>

<!-- HTML PART -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP MySQL Select</title>
</head>
<body>

<h2>PHP MySQL Use The WHERE Clause</h2>

<?php if (!$showdata): ?>
    <form method="post">
        <input type="submit" value="Select Data">
    </form>
<?php endif; ?>

<?php if ($showdata){
    echo "<table border ='1'>";
    echo "<tr><th>FirstName</th><th>LastName</th><th>email</th></tr>";
    foreach($results as $res){
        echo "<tr>";
        echo "<td>".$res['fname']."</td>";
         echo "<td>".$res['lname']."</td>";
          echo "<td>".$res['email']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} ?>
    <!-- Email Filter Form -->
     <?php if($showdata):?>
    <form method="post" style="margin-top: 20px;">
        <input type="text" name="email" placeholder="Enter email to search">
        <input type="submit" value="Select">
    </form>
<?php endif;?>
</body>
</html>

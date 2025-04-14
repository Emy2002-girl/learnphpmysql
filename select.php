<?php
$dsn = 'mysql:host=localhost;dbname=imaneranbok';
$user = 'root';
$password = '';
$showdata = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $new_data = new PDO($dsn, $user, $password);
        $new_data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db = $new_data->prepare("SELECT fname,lname,email FROM students");
        $db->execute();
        $results = $db->fetchAll((PDO::FETCH_ASSOC));
        $showdata = true;
        echo "<table border ='1'>";
        echo "<tr><th>FirstName</th><th>LastName</th><th>Email</th></tr>";
        foreach ($results as $res) {
            echo "<tr>";
            echo "<td>" . $res['fname'] . "</td>";
            echo "<td>" . $res['lname'] . "</td>";
            echo "<td>" . $res['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "select data with succesy !" .'<br>';
    }
    catch(PDOException $e){
        echo "error :" .$e->getMessage();
    }
}
?>
<?php if(!$showdata): ?>
    <form method="post">
        <input type="submit" value="Select Data">
</form>
<?php endif; ?>
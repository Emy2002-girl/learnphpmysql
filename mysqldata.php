<?php
$datasource = 'mysql:host=localhost;dbname=brief';
$user = 'root';
$pass = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $table = $_POST['table_name'];
    $columns = $_POST['columns'];

    try {
        // Create a PDO instance
        $data = new PDO($datasource, $user, $pass);
        $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create the table query
        $table = "CREATE TABLE `$table`(
             ";

        foreach ($columns as $col) {
            $table .= "`$col` VARCHAR(255), ";
        }

        // Remove the trailing comma
        $table = rtrim($table, ', ') . ")";

        // Execute the query to create the table
        $data->exec($table);
        echo "The table was created successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<h2>Create a MYSQL Database</h2><br>
<label for="">Name of table<input type="text" name="table_name"> </label><br>
<?php
  for($i=1; $i<=5; $i++) {
        echo "Column $i: <input type='text' name='columns[]'><br>";
    }
    ?>
    <input type="submit" value="Create table">
</form>
</body>
</html>
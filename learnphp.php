<?php
// $name ="Osama";
// $is_student = true;
// $is_orphan = true;
// $country="morocco";
// $price = 100;
// $country_discount = 50;
// $student_discount =10;
// $orphan_discount = 15;


// if($country === "morocco"){
//       if($is_student == true){
//            if($is_orphan == true){
//             echo "Hello $name";
//             echo "<br>";
//             echo "$orphan_discount";
//             echo "<br>";
//             echo   " the final price  is " ;
//             echo $price - $orphan_discount;
//            }
//            else{
//             echo "Hello $name";
//             echo "<br>";
//             echo "$student_discount";
//             echo "<br>";
//             echo  $price - $student_discount;
//            }
//       }
//       else{
//         echo "Hello $name";
//         echo "<br>";
//         echo "$country_discount";
//         echo "<br>";
//         echo "The final price is $price";
//       }
// }
// else{
//   echo "Hello $name";
//   echo "<br>";
//   echo "Not discount";
//   echo "<br>";
//  echo " The normal Price is $price";
// }
// $result = 10 > 5  ? "Good" :"Bad";

// echo "I love Php because it's A". $result. " Langauge";
// //switch :
// echo "<br>";
//   $i = 5;
//   do{
//     echo "$i<br>";
//     $i++;
//   }while($i<=3);

//foreach :

  // $contries = ["Mo","Eg","Usa","span","europe"];

  // echo "<pre>";
  // print_r($contries);
  // echo "</pre>";

  // $contries_discount = ["Mo"=> 10,"Eg" =>20,"Usa"=>30,"span"=>40,"europe"=>40];
  // echo "<pre>";
  // print_r($contries_discount);
  // echo "</pre>";

  // foreach( $contries as $country){
  //   echo"$country <br>";
  // }

  // foreach($contries_discount as $country => $discount){

  //   if($country == "Usa"){
  //     continue;
  //   }
  //    echo " the country is $country and the discount is $discount<br>";
  // }

  // include_once("include.php"); //

  // echo $user_name;
  // echo "<br>";
  // $user_name = "Ranbok";
  // include_once("include.php"); //ida kona deja 3amlin include l meme file makihsbch include tania 
  // echo "Hello user";
  // echo "<br>";
  // echo $user_name;
  // echo "<br>";
  // echo "Continue";
 //Function :


//  function sayHello($user1,$user2){
//  echo "Hello $user1";
//  echo "<br>";
//  echo "Hello $user2";
//  };

//  sayHello("Imane","Safae");
// $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

// function get_number($num1,$num2){
//     return $num1 + $num2;
// }

// $prize = get_number(2,2);

// echo $prizes[$prize];

// function get_data($age=22,$country="morocco",$adresse="casa",$name ="Ranbok"){
//   $line_one = "your name is $name and your age is $age<br>";
//   $line_two = "your live in $country and your adresse is $adresse";
//   return $line_one . $line_two;
// }

//  echo get_data(23,"almania","tanger","imane"); //kan3amro les donnes ela hsab tartib dyal les parametres f function 

// function calculate(...$nums){
//  echo "numbers of argements is ".func_num_args() ."<br>";
//  echo "index of argement is ".$nums[2]."<br>";
// //  print_r(func_get_args());
// // echo "<br>";
//  $result = 0;
//  foreach($nums as $num){
//   $result +=$num;
//  }
//  echo "the result is $result";
// }
//  calculate(1,2,3,4,5);
// $group_of_skills = ["html","css","Js","php"];
// function get_data($name,$age,$country,...$skills){
//  echo "Hello $name your age is $age and you live in $country";
//  echo "your skills is : <br>";
//  foreach($skills as $skill){
//  echo "--$skill <br>";
// }
// }
//  get_data("imane",23,"morocco",...$group_of_skills); //unpaking argements

// function say_hello($sameone){
//   echo "Hello $sameone";
// }
// $funct1 = "say_hello";
// echo $funct1("Imane");
// echo "<br>";
// $funct2 = "strlen";
// echo $funct2("Imane ranbok");
// //exists function :
// echo "<br>";
// function testing(){
//   echo "Hello from testing function ";
// }
// $funct4 = "testing";
// if(function_exists("testing")){
//   echo $funct4();
// }else{
//   echo "function not exists";
// }

// function calculate(&$num){ //passage by reference 
//  $num +=5;
//  return $num;
// }
// $n = 12;
// echo calculate($n);
// echo "<br>";
// echo $n;
// echo "<br>";
// function somme($num):int{
//   $num += 12.2;
//   return $num;
// }
// $m =10.5;
// echo somme($m);
// $name = "imane";
// echo "<br>";
// echo $name[1];
// echo "<br>";
// echo strlen($name);
// echo "<br>";
// echo $name[strlen($name)-1];
// echo "<br>";
// echo $name[-2];
// echo "<br>";
// $name[0]="E";
// echo "<br>";
// echo $name;
// echo "<br>";
// $name[5]="E";
// echo "<br>";
// echo $name;
// echo "<br>";
// echo lcfirst("Imane");
// echo "<br>";
// echo ucfirst("imane");
// echo "<br>";
// echo strtolower("ELZERO WEB SCHOOL");
// echo "<br>";
// echo strtoupper("elzero web school");
// echo "<br>";

// $str = "Elzero web school";

// // echo "<pre>";
// // print_r(explode(" ", $str, -2));
// // echo "</pre>";
// $friend =["Imane","Salma","Fati","Rokaya"];

// echo current($friend); //Imane
// echo "<br>";
// echo next($friend);//Salma
// echo "<br>";
// echo current($friend);//Salma kipointer ela l'element
// echo "<br>";
// echo next($friend);//Fati
// echo "<br>";
// echo current($friend);//Fati
// echo "<br>";
// echo prev($friend);//Salma
// echo "<br>";
// echo reset($friend); //kirje l awel element
// echo "<br>";
// echo end($friend);
// echo "<br>";
// echo current($friend);
// echo "<br>";
// $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
// $merge_two = ["One" => "HTML", "Four" => "Python"];

// echo '<pre>';
// print_r(array_merge($merge_one,$merge_two)); //override the seconde value or array twe in array one 
// echo '</pre>';
 
// echo '<br>';
// $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
// $merge_four = [40 => "Python", "10" => "Go"];
// echo '<pre>';
// print_r(array_merge($merge_three,$merge_four)); // 
// echo '</pre>';
// echo '<br>';
// echo '<pre>';
// print_r(array_replace($merge_three,$merge_four)); //
// echo '</pre>';
// echo '<br>';
// $nums = [1,2,3,4,5];
// echo array_rand($nums);
// echo '<br>';
// $lettres = ["A","B","C","D"];
// echo $lettres[array_rand($lettres)];
// echo '<br>';
// echo '<pre>';
// print_r(array_rand($nums,4)); //
// echo '</pre>';
// echo '<br>';
// shuffle($nums); //kikharba9 les elements dyal tableaux
// echo '<pre>';
// print_r($nums); //
// echo '</pre>';
// echo "#####";
// echo '<pre>';
// print_r($lettres);
// echo '</pre>';
// echo '<br>';
// $first = array_shift($lettres);
// echo '<br>';
// echo $first;
// echo '<pre>';
// print_r($lettres);
// echo '</pre>';
// echo "#########";
// $last =array_pop($lettres);
// echo '<br>';
// echo $last;
// echo '<pre>';
// print_r($lettres);
// echo '</pre>';
// echo "########";
// array_push($lettres,"E","F","J");
// echo "<pre>";
// print_r($lettres);
// echo "</pre>";
// echo $_GET["num"];
// echo filter_input(INPUT_GET,"num");
//Date and time functions :
echo date_default_timezone_get();
echo "<br>";
echo date("y-m-d H:i:s");
echo "<br>";
echo date_default_timezone_set("Africa/Casablanca");
echo "<br>";
echo date("y-m-d H:i:s");
echo "<br>";
echo date_default_timezone_get();
//Create Date Object :
$d = date_create("",timezone_open("Indian/Chagos"));
echo "<br>";
echo date_format($d,"Y-m-d H:i:s");
?>
<!-- <form action="" method="GET">
<input type="text" name="num">
<input type="submit" value="Send">
</form> -->
<?php 
// echo "<h2>Connect to mYSQL</h2> <br>";
// $dsn = 'mysql:host=localhost;dbname=brief';
// $user ='root';
// $pass ='';
// try{
//     $db = new PDO($dsn,$user,$pass);
//     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "connected with success !";
// }
// catch(PDOException $e){
//     echo "connected failed :" .$e->getMessage();
// }
// echo "<h2>PHP Create a MYSQL Database</h2> <br>";
// try{
//     $newdata = "CREATE DATABASE IF NOT EXISTS my_firstdata";
//     $db->exec($newdata);
//     echo "Created successfully!";
// }
// catch(PDOException $ee){
//     echo "error : " .$ee->getMessage();
// }
?>
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
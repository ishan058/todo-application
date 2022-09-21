<?php
//include ma error aaye warning dekhaucha ani tala ko code run huncha
include('./db_config.php');
// require('./db_config.php'); 
//require ma error aayo bhane stop huncha
if($_SERVER['REQUEST_METHOD'] === "POST"){
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$todo_item = $_POST['todo'];
echo "You have entered "  .$todo_item . " to the list.";
// table ko title ko name ma chai tilde sanga bhako back quote `` wala rakhnek
//static value
// $sql = "INSERT into todo_list(`title`) VALUES ('this is test')";
// this is for dynamic value entry
$sql = "INSERT into todo_list(`title`) VALUES ('$todo_item')";

$result = $conn -> query($sql);

// header works as redirect 
header('location: ./index.php');
}
?>
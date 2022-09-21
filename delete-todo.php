<?php
include('./db_config.php');

if($_SERVER['REQUEST_METHOD']=== "GET"){
    $delete_todo = $_GET['id'];
    // echo "delete";
    // echo "You have deleted "  .$delete_todo . " from the list.";
    $sql = "DELETE FROM `todo_list` WHERE (`id`)=('$delete_todo')";
    $result = $conn -> query($sql);

    header ('location: ./index.php');

}


?>
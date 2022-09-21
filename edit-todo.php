<?php   
include('./db_config.php');

if ($_SERVER['REQUEST_METHOD'] ==="POST" ){
    $editID = $_GET['id'];
    // $ogtodoo = $_GET['ogtodo'];
    $etodo = $_POST['todo'];
    // echo "Edit todo: " . $editID;
    $sql = "update todo_list set  id=$editID , title='$etodo' where id=$editID";    
    $result = $conn -> query($sql);
    header('location: ./index.php');

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="text-center">Update Todo</h1>

    <div class="container p-3">
    <form action="" method="post">
        <input type="text" class="form-control" name="todo" id=""  placeholder="Enter new todo" required;>
        <div class="d-grid gap-2 col-2 mx-auto">
          <button type="submit" class="btn btn-primary mt-3 ">Save Changes</button>
        </div>
    </form>  
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php


session_start();
include "./databesa/db_connection.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `tasks`  WHERE `id` = '$id' ";
    $res = mysqli_query($connent, $sql);
    $data = mysqli_fetch_assoc($res);
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handlers/edit_from_db.php?id=<?php echo $_GET['id']; ?>" method="POST" class="form border p-2 my-5">

                    <input type="text" name="title" value="<?php echo $data['title']; ?>" class="form-control my-3 border border-success" placeholder="add new todo">
                    <textarea id="description" name="descriptions" class="form-control my-3 border border-success" rows="3" placeholder="Enter your description here..."><?php echo $data['descriptions']; ?></textarea>
                    <input type="submit" name="Update" value="Update" class="form-control btn btn-warning my-3 " placeholder="add new todo">
                </form>
            </div>
            <div class="col-12">
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
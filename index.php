<?php
include "./core/function.php";
include "./databesa/db_connection.php";
session_unset();
show_message();

$sql = "SELECT * FROM `tasks`";
$res = mysqli_query($connent, $sql);
?>
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
                <form action="handlers/insert_db.php" method="POST" class="form border p-2 my-5">

                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo">
                    <textarea id="description" name="descriptions" class="form-control my-3 border border-success" rows="3" placeholder="Enter your description here..."></textarea>
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new todo">
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (mysqli_num_rows($res)): ?>
                            <?php while ($data = mysqli_fetch_assoc($res)): ?>
                                <tr>
                                    <td><?= $data['id'] ?></td>
                                    <td><?= $data['title'] ?></td>
                                    <td><?= $data['descriptions'] ?></td>
                                    <td>
                                        <a href="handlers/delete_from_db.php?id=<?= $data['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </a>
                                        <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fa-solid fa-edit"></i> </a>
                                    </td>
                                </tr>
                            <?php endwhile ?>
                        <?php endif ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
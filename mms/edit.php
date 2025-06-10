<?php

session_start();

$id = $_GET['id'];

$sql = "SELECT * FROM movies WHERE id=:id";


$selectUsers = $conn -> prepare($sql);
$selectUsers -> bindParam(':id',$id);
$selectUsers -> execute();
$user_data = $selectUsers -> fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit users Details</h2>
    <div class="table-responsive">
        <form action="updateUsers.php" method="post">
            <div class="form-floating">
                <input type="number" class="form-control" id="floatinginput" placeholder="id" name="id" value="<?php echo $user_data['id']?>">
                            <label for="id">ID</label>
                <label for="id">ID</label>

            </div>
        </form>
    </div>
    <div class="table-responsive">
        <form action="updateUsers.php" method="post">
            <div class="form-floating">
                <input type="number" class="form-control" id="floatinginput" placeholder="name" name="name" value="<?php echo $user_data['name']?>">
                <label for="id">name</label>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <form action="updateUsers.php" method="post">
            <div class="form-floating">
                <input type="number" class="form-control"  id="floatinginput" placeholder="username" name="username" value="<?php echo $user_data['username']?>">
                            <label for="id">username</label>

            </div>
        </form>
    </div>
    <div class="table-responsive">
        <form action="updateUsers.php" method="post">
            <div class="form-floating">
                <input type="number" class="form-control" id="floatinginput"  placeholder="email" name="email" value="<?php echo $user_data['email']?>">
                            <label for="id">email</label>

            </div>
        <br>
        <button class="w-100 btn-lg btn-primary" type="submit" name="submit">Change</button>
        </form>
    </div>
</body>
</html>
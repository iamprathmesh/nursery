


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_SESSION['status'])){
    ?>
    <div class="alert alert-success">
        <h5><?= $_SESSION['status']; ?></h5>
    </div>
    <?php

    unset($_SESSION['status']);
}
?>

<div class="card">
    <h2>reset password</h2>

    <form action="" method="post">
        <label for="">email address</label>
        <input type="text" name="email" class="form-control">

        <button  type="submit">submit</button>
    </form>
</div>

</body>
</html>
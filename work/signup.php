<?php require "block/header.php";

require 'db.php';

if (isset($_POST['username'])&& isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password, email, active) VALUE ('$username', '$password', '$email', '1')";
    $result = mysqli_query($connection,$query);

    if ($result){
        $smsg = "Good";
    } else {
        $fsmsg = "Error";
    }
}

?>
<div class="container">
<form class="form-signin" action="signup.php" method="POST">
      <h2>Registration</h2>
    <?php if (isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg;?> </div><?php } ?>
    <?php if (isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fsmsg;?> </div><?php } ?>
    <input class="form-control"type="text" name="username" placeholder="Username" required>
    <input class="form-control"type="email" name="email" placeholder="Email" required>
    <input class="form-control"type="password" name="password" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>



</form>
</div>















































<?php require "block/footer.php"; ?>

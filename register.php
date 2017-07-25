<?php include_once('./assets/includes/homepage.php'); ?>
<?php require('./assets/includes/dbconnect.php');
  if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (name, password, email) VALUES ('$name', '$password', '$email')";
    $result = mysqli_query($connection, $query);
  }
?>
  <div class="login-page">
    <div class="form">
      <form class="register-form" action="" method="POST">
        <input type="text" name="name" placeholder="name"  required/>
        <input type="password" name="password" placeholder="password" required/>
        <input type="text" name="email" placeholder="email address" required/>
        <button src="login.php">Register</button>
        <p class="">Already registered? <a href="login.php">Sign In</a></p>
        <p class="">Go <a href="index.php">back</a></p>
      </form>
    </div>
  </div>
<?php include_once('./assets/includes/footer.php'); ?>

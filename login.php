<?php include_once('./assets/includes/homepage.php'); ?>
<?php
  session_start();
    require('./assets/includes/dbconnect.php');

  if (isset($_POST['name']) and isset($_POST['password'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE name='$name' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysql_error($connection));
    $count = mysqli_num_rows($result);
    if ($count == 1) {
      $_SESSION['name'] = $name;
    }

  }
?>
<div class="login-page">
  <div class="form">
    <form class="register-form" action="" method="POST">
      <input type="text" name="name" placeholder="name"  required/>
      <input type="password" name="password" placeholder="password" required/>
      <button>Login</button>
      <p class="">Not yet registered? <a href="login.php">Sign Up</a></p>
      <p class="">Go <a href="index.php">back</a></p>
    </form>
  </div>
</div>
<?php include_once('./assets/includes/footer.php'); ?>

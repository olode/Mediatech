
<?php
  session_start();

  include_once 'init.php';
  $Nonav ='';
  if (isset($_SESSION['Username'])) {
    # code...
    header('location: dashboard.php'); // the CP URL
  }




  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...

    // Chick If User Coming From HTTP Post Request
    $Username = $_POST['username'];
    $Email    = $_POST['email'];
    $Password = $_POST['password'];
    $HashedPass = sha1($Password);



    // Chick If The User Exist In Database
    $stmt = $con->prepare("SELECT Username, Password, Email, GroupID FROM users WHERE Username=? AND Password=? AND Email=? AND GroupID='1'");
    $stmt->execute(array($Username, $HashedPass, $Email));
    $count = $stmt->rowCount();



      // If Count > 0 This Mean The Database Contain Record This Username

      if ($count > 0) {
        # code...
        $_SESSION['Username'] = $Username ; //get the session neme from the Var...
        exit();
      }

  }

 ?>



<div class="one">
  <div class="two">
    <div class="three">
      <div class="four">
      <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="username" placeholder="Username" >
        <br>
        <input type="email" name="email" placeholder="Email" >
        <br>
        <input type="password" name="password" placeholder="Password" >
        <br>
        <input type="submit" class="d" name="try" value="Logn in">
      </form>
    </div>
    </div>
  </div>
</div>

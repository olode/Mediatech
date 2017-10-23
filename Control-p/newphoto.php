<?php
//include ('../connect/connect.php');
  if (isset($_post['submit'])) {
    # code...

  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MediaTech</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/newphoto.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="#">Media<span>Tech</span></a>
      </div>
    </header>
    <a class="mobily" href="#">MENU</a>
    <div class="container">
      <div class="sidebar">
        <ul id="nav">
          <li><a href="#" class="active">Add</a></li>
          <li><a href="#">Delete</a></li>
          <li><a href="#">Update</a></li>
          <li><a href="#">Query</a></li>
        </ul>
      </div>
      <div class="content">
        <h1>Add a new photo</h1>
        <p>Here you can add new photo for latest photos</p>

        <div class="box">
          <div class="box-top">
            Chose Your Photo
          </div>
          <div class="box-panel">
            <input type="file" name="" value="">
          </div>
        </div>
        <div class="box">
          <div class="box-top">
            Add The URL of The Photo In The Facebook
          </div>
          <div class="box-panel">
            <input class="form-control" type="url" name="" value="">
          </div>
        </div>
        <div class="box">
          <div class="box-top">
            Add By
          </div>
          <div class="box-panel">
            <h4>Waleed</h4>
          </div>
        </div>
        <div class="box">
          <div class="box-top">
            Date
          </div>
          <div class="box-panel">
            <input type="date" name="date" value="">
          </div>
          <input class="btn btn-primary" type="submit" name="" value="Save">
          <input class="btn btn-primary" type="reset" name="" value="Reset">
        </div>
      </div>
    </div>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

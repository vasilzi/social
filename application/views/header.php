<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>3fs</title>

    <!-- Bootstrap core CSS -->
    <link href="/media/css/bootstrap.css" rel="stylesheet">
</head>

  <body>
  <?php if(isset($flash) && $flash!=''){ ?>
<?php echo $flash; ?>
<?php } ?>
<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="/">Home</a></li>
          <?php if(!Profile::loggedIn()){ ?>
          <li><a href="/profile/login">Login</a></li>
          <li><a href="/profile/register">Register</a></li>
          <?php } else { ?>
          <li><a href="/profile/logout">Logout</a></li>
          <?php } ?>
        </ul>
        <h3 class="text-muted">3fs</h3>
      </div>
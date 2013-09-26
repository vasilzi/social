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
          <?php $current_url=Request::current()->url(); ?>
          <?php if(!Profile::loggedIn()){ ?>
          <li <?php echo $current_url=='/profile/login'?'class="active"':''?>><a href="/profile/login">Login</a></li>
          <li <?php echo $current_url=='/profile/register'?'class="active"':''?>><a href="/profile/register">Register</a></li>
          <?php } else { ?>
          <li <?php echo $current_url=='/'?'class="active"':''?>><a href="/">Home</a></li>
          <li <?php echo $current_url=='/profile/list'?'class="active"':''?>><a href="/profile/list">List</a></li>
          <li><a href="/profile/logout">Logout</a></li>
          <?php } ?>
        </ul>
        <h3 class="text-muted"><a href="/">3fs</a></h3>
        <?php if(Flash::check()){ ?>
        <br/><span class="alert alert-info"><?php echo Flash::get(); ?></span><br/>
        <?php } ?>        
      </div>
      <br>
<!DOCTYPE html>
<html lang="bg">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
  <meta name="author" content="">

  <title>
    <?php echo get_bloginfo( 'name' ); ?>
  </title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>

<nav class="navbar navbar-light navbar-expand-md">
<a class="navbar-brand" href="#">Danceart</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav-menu" aria-controls="main-nav-menu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="main-nav-menu">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
  </ul>
</div>
</nav>




  <main role="main" class="container">

    <div class="blog-header">
      <h1 class="blog-title">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">
          <?php echo get_bloginfo( 'name' ); ?>
        </a>
      </h1>
      <p class="lead blog-description">
        <?php echo get_bloginfo( 'description' ); ?>
      </p>
    </div>
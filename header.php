<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="books-icon.ico">

  <title>Definition App</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Definition App </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <button type="button" class="btn btn-success navbar-btn navbar-right" onclick="window.location.href='create.php'">Add new term</button>
        <ul class="nav navbar-nav">
          <li><a href="https://github.com/ryuhikari/definition-app">GitHub project</a></li>
        </ul>
        <form class="navbar-form navbar-right" role="search" action="index.php" method="post">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Search a term">
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
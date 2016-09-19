<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <div class="jumbotron jumbotron--less-b-margin text-center">
      <h1><a class="app-name-logo" href="/">Definition App</a></h1>
      <h5>Definitons taken from <a href="https://en.wikipedia.org/wiki/Main_Page" target="_blank">Wikipedia</a></h5>


      <section class="row create-and-search-section">
          <div class="col-xs-12 col-sm-3">
            <a href="create.php" class="btn btn-success">Add new term</a>
          </div>
          <div class="col-xs-12 col-sm-9">
            <!-- Search -->
            <form class="form-inline" action="index.php" method="post">
              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="Search a term">
                <button type="submit" class="btn btn-default">Search</button>
              </div>
            </form>
            <!-- End Searh -->
          </div>
      </section>
    </div>

    <div class="container">
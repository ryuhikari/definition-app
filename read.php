<?php
    //Connect DB
    require 'connect.php';

    //Select term by name
    $id = null;

    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $sql = "SELECT * FROM Term";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    //Disconnect DB
    $conn->close();
?>
<?php
//Header
require 'header.php';
?>
<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading panel-heading--bold">
      <?= $row['name'] ?>
    </div>
    <div class="panel-body">
        <?= $row['definition'] ?>
      <div class="panel-body" style="text-align: center">
        <div class="row vertical-centered">
          <div class="col-xs-12 col-sm-6">
            <p>Created: <?= $row['create_time'] ?></p>
            <p>Updated: <?= $row['update_time'] ?></p>
          </div>
          <div class="col-xs-12 col-sm-6 btn-centered">
            <a class="btn btn-info" href="index.php">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div> <!-- /container -->
<?php
//Footer
require 'footer.php';
?>
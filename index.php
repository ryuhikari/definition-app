<?php
//Header
require 'header.php';
?>
<?php
//Connect DB
require 'connect.php';

//Select terms by name
$id = null;

if ( !empty($_POST)) {
    $id = $_POST['name'];

    //Show search
    $sql = "SELECT * FROM Term WHERE name LIKE '$id%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      ?>
      <div class="panel-group">
      <?php
      while($row = $result->fetch_assoc()) {
      ?>

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
                  <a class="btn btn-info" href="read.php?id='<?= $row['name'] ?>'">Read</a>
                  <a class="btn btn-success" href="update.php?id='<?= $row['name'] ?>'">Update</a>
                  <a class="btn btn-danger" href="delete.php?id='<?= $row['name'] ?>'">Delete</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php
      }
      ?>
      </div>
      <?php
    } else {
        echo "0 results";
    }

} else {

    //Show all
    $sql = "SELECT * FROM Term";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        ?>
        <div class="panel-group">
        <?php
        while($row = $result->fetch_assoc()) {
        ?>

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
                    <a class="btn btn-info" href="read.php?id=<?= $row['name'] ?>">Read</a>
                    <a class="btn btn-success" href="update.php?id=<?= $row['name'] ?>">Update</a>
                    <a class="btn btn-danger" href="delete.php?id=<?= $row['name'] ?>">Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php
        }
        ?>
        </div>
        <?php
    } else {
        echo "0 results";
    }

}
//Disconnect DB
$conn->close();
?>
</div> <!-- /container -->
<?php
//Footer
require 'footer.php';
?>






<?php
    //Connect DB
    require 'connect.php';

    //Select term by name
    $id = null;

    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    } else {
        header("Location: index.php");
    }

    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];

        // delete data
        $sql = "DELETE FROM Term WHERE name='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
        header("Location: index.php");
    }
?>
<?php
//Header
require 'header.php';
?>
<div class="row">
  <h4>Delete a term</h4>
</div>

<form class="form-horizontal" action="delete.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id;?>"/>
  <p class="alert alert-error">Are you sure to delete ?</p>
  <div class="form-actions">
    <button type="submit" class="btn btn-danger">Yes</button>
    <a class="btn" href="index.php">No</a>
  </div>
</form>

</div> <!-- /container -->
<?php
//Footer
require 'footer.php';
?>
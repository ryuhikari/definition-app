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
        <div class="row">
            <h4>Read a term</h4>
        </div>

        <div class="form-horizontal" >
          <div class="control-group">
            <label class="control-label">Term</label>
            <div class="controls">
                <label class="checkbox">
                <?php echo $row['name'];?>
                </label>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Definition</label>
            <div class="controls">
                <label class="checkbox">
                    <?php echo $row['definition'];?>
                </label>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Create</label>
            <div class="controls">
                <label class="checkbox">
                    <?php echo $row['create_time'];?>
                </label>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label">Update</label>
            <div class="controls">
                <label class="checkbox">
                    <?php echo $row['update_time'];?>
                </label>
            </div>
        </div>
        <div class="form-actions">
          <a class="btn" href="index.php">Back</a>
        </div>
    </div>
</div> <!-- /container -->
<?php
//Footer
require 'footer.php';
?>
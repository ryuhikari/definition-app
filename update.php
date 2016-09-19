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
    }

    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $definitionError = null;
        $create_timeError = null;
        $update = null;

        // keep track post values
        $name = $_POST['name'];
        $definition = $_POST['definition'];
        $create_time = $_POST['create_time'];
        $update_time = $_POST['update_time'];

        // validate input
        $valid = true;
        if (empty($name)) {
            $nameError = 'Please enter Term';
            $valid = false;
        }
        if (empty($definition)) {
            $nameError = 'Please enter Definition';
            $valid = false;
        }

        // update data
        if ($valid) {
            $sql = "UPDATE Term SET name='$name', definition='$definition', update_time=CURRENT_TIMESTAMP WHERE name='$id'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }

            $conn->close();
            header("Location: index.php");
        }
    } else {
        $sql = "SELECT * FROM Term WHERE name='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $definition = $row['definition'];
        $create_time = $row['create_time'];
        $update_time = $row['update_time'];
        $conn->close();
    }
?>
<?php
//Header
require 'header.php';
?>
    <div class="row">
        <h4>Update a term</h4>
    </div>

    <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">

        <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
            <label class="control-label">Term</label>
            <div class="controls">
                <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                <?php if (!empty($nameError)): ?>
                    <span class="help-inline"><?php echo $nameError;?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="control-group <?php echo !empty($definitionError)?'error':'';?>">
            <label class="control-label">Definition</label>
            <div class="controls">
                <textarea name="definition" placeholder="Definition" rows="5"><?php echo !empty($definition)?$definition:'';?></textarea>
                <?php if (!empty($definitionError)): ?>
                    <span class="help-inline"><?php echo $definitionError;?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Create</label>
            <div class="controls">
                <input disabled name="creation_time" type="text"  placeholder="Create" value="<?php echo !empty($create_time)?$create_time:'';?>">
                <?php if (!empty($create_timeError)): ?>
                    <span class="help-inline"><?php echo $create_timeError;?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Update</label>
            <div class="controls">
                <input disabled name="update_time" type="text"  placeholder="Update" value="<?php echo !empty($update_time)?$update_time:'';?>">
                <?php if (!empty($update_timeError)): ?>
                    <span class="help-inline"><?php echo $update_timeError;?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">Update</button>
            <a class="btn" href="index.php">Back</a>
        </div>
    </form>
</div> <!-- /container -->
<?php
//Footer
require 'footer.php';
?>
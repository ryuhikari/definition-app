<?php
    //Connect DB
    require 'connect.php';

    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $definitionError = null;
        $create_timeError = null;
        $update = null;

        // keep track post values
        $name = $_POST['name'];
        $definition = $_POST['definition'];

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

        // insert data
        if ($valid) {
            $sql = "INSERT INTO Term (name, definition)
            VALUES ('$name', '$definition')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            header("Location: index.php");
        }
    }
?>
<?php
//Header
require 'header.php';
?>
<div class="row">
  <div class="col-sm-12">
    <h4>Add a new term</h4>
  </div>
</div>

<form class="form-horizontal" action="create.php" method="post">

  <div class="form-group <?php echo !empty($nameError)?'error':'';?>">
    <label class="control-label col-sm-2" for="name">Term</label>
    <div class="col-sm-10">
      <input class="form-control" name="name" id="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
      <?php if (!empty($nameError)): ?>
        <span class="help-inline"><?php echo $nameError;?></span>
      <?php endif; ?>
    </div>
  </div>

  <div class="form-group <?php echo !empty($definitionError)?'error':'';?>">
    <label class="control-label col-sm-2" for="definition">Definition</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="definition" id="definition" type="text"  placeholder="Definition" rows='5'><?php echo !empty($definition)?$definition:'';?></textarea>
      <?php if (!empty($definitionError)): ?>
        <span class="help-inline"><?php echo $definitionError;?></span>
      <?php endif; ?>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Create</button>
      <a class="btn btn-info" href="index.php">Back</a>
    </div>
  </div>

</form>
</div> <!-- /container -->
<?php
//Footer
require 'footer.php';
?>
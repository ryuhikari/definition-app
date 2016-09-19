<?php
//Header
require 'header.php';
?>
    <div class="row">
        <p>

           <!-- Search -->
            <form class="form-horizontal" action="index.php" method="post">
              <div class="form-group">
              <a href="create.php" class="btn btn-success">Create</a>
                <input name="name" type="text" class="form-control" placeholder="Search a term">
                <button type="submit" class="btn btn-default">Search</button>
              </div>
              <div class="form-group">
              </div>
            </form>
           <!-- End Searh -->
        </p>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Term</th>
                    <th>Definition</th>
                    <th>Create</th>
                    <th>Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
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
                        while($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['definition'] . '</td>';
                            echo '<td>'. $row['create_time'] . '</td>';
                            echo '<td>'. $row['update_time'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn" href="read.php?id='.$row['name'].'">Read</a>';
                            echo '&nbsp;';
                            echo '<a class="btn btn-success" href="update.php?id='.$row['name'].'">Update</a>';
                            echo '&nbsp;';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['name'].'">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo "0 results";
                    }

                } else {

                    //Show all
                    $sql = "SELECT * FROM Term";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['definition'] . '</td>';
                            echo '<td>'. $row['create_time'] . '</td>';
                            echo '<td>'. $row['update_time'] . '</td>';
                            echo '<td width=250>';
                            echo '<a class="btn" href="read.php?id='.$row['name'].'">Read</a>';
                            echo '&nbsp;';
                            echo '<a class="btn btn-success" href="update.php?id='.$row['name'].'">Update</a>';
                            echo '&nbsp;';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$row['name'].'">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo "0 results";
                    }

                }
                //Disconnect DB
                $conn->close();
            ?>
            </tbody>
        </table>
    </div>
</div> <!-- /container -->
<?php
//Footer
require 'footer.php';
?>






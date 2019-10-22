<?php
        include 'others/header.php';
?>
<div class="container bg-white">
    <?php
    include 'conndb.php';
    $query = "SELECT * FROM user_table";
    $result = $db -> query($query);
    ?>
    <div class="row" style="margin-top: 30px; margin-bottom: 10px;">
        <div class="col-sm-4">
            <h4>Insert New User</h4>
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="uname" class="text-info">User Name:</label>
                    <input type="text" class="form-control" name="uname">
                </div>
                <div class="form-group">
                    <label for="uemail" class="text-info">Email ID:</label>
                    <input type="email" class="form-control" name="uemail">
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-primary">Insert</button>
                </div>
            </form>
        </div>
        <div class="col-sm-8">
            <h4>All User Display in the Table</h4>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //Here we Read the data base from the variable result
                //while (true)
                //fetchArray return false when there is not more elements in the array
                while ($row = $result->fetchArray()) {
                    ?>
                    <tr>
                        <!-- <td>John</td>-->
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['user_email']; ?></td>
                        <td>
                            <a href="update.php?u_id=<?php echo $row['user_id'];?>" class="btn btn-info" role="button">Update</a>
                            <a href="delete.php?u_id=<?php echo $row['user_id'];?>" class="btn btn-danger" role="button">Delete</a>


                        </td>
                    </tr>
                    <?php
                }

                ?>
                <?php
                ?>
                </tbody>
            </table>

        </div>


    </div>

</div>


<?php include 'others/footer.php' ?>


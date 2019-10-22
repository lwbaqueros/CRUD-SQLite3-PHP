<?php
include ('conndb.php');

$id = $_GET['u_id'];
//echo ($id);
$query = "SELECT * FROM user_table WHERE user_id = '$id'";
$res = $db -> query($query);
//if ($db -> query($query)){
//   echo "delete user success .....";
//}
//else{
//    echo "error in query ...";
//}

include 'others/header.php';
?>
    <div class="container bg-light">
        <h2>Update User:</h2>
        <div class="row" style="margin-top:19px; margin-bottom: 10px;">
            <div class="col-sm-6">
                <form action="update2.php?u_id=<?php echo $id;?>" method="post">
                    <?php
                    while ($row = $res->fetchArray())
                    {
                    ?>
                    <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                    <div class="form-group">
                        <label for="name" class="text-info">User Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['user_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-info">Email ID:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['user_email']; ?>">
                    </div>
                        <?php
                    }
                    ?>
                    <div align="center">
                        <button type="submit" class="btn btn-danger">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
include 'others/footer.php';
?>
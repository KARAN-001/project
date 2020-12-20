<?php require_once('includes/header.php'); ?>
<?php require_once('lib/cleanOperations.php'); ?>
<?php require_once('lib/dbOperations.php'); ?>

<fieldset>
    <legend>Add Category</legend>

    <form action="add.php" method="post" class="login">

        <table width="100%">
            <tr>
                <td> Name : </td>
                <td><input type="text" name="name" value="" /></td>
            </tr>
            <tr>
                <td> Discription : </td>
                <td><input type="text" name="disc" value="" /></td>
            </tr>
            <tr>
                <td> Status : </td>
                <td><input type="text" name="status" value="" /></td>
            </tr>
           
            <tr>
                <td> Update date: </td>
                <td><input type="date" name="updated" value="" /></td>
            </tr>
            <tr>
               <td> Created: </td>
                <td><input type="date" name="created" value="" /></td>
            </tr>
            <tr>
                <td> &nbsp;</td>
                <td><input type="submit" name="sub" value=" Insert " /></td>
            </tr>
            <tr>

                <td><a href="categories.php">Back</a></td>

            </tr>
        </table>
    </form>
</fieldset>


<?php

if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $desc = $_POST['disc'];
    $status = $_POST['status'];
    $created = $_POST['created'];
    $updated = $_POST['updated'];



    $sql = "UPDATE categories SET `disc`= '$desc' WHERE id = $_POST['id'];";
    $run = mysqli_query($con, $sql);
    if ($run == true) {
?>
<script>
alert('Data Inserted Successfully.');
</script>
<?php
    } else {
        echo ("error:" . mysqli_error($con));
    }
}
?>
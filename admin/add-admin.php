<?php include('partials/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br>
        <br>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="enter your full name"></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="your Username"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="your password"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="add admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php') ?>

<?php 
// process the value from form and save it in database
// check whether the btn is clicked or not 

    // Initialize variables
    $full_name = '';
    $username = '';
    $password = '';

    if(isset($_POST['submit']))
    {
        // button clicked 

        //get data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        // password encryption!! search on why was that used in our case with md5()
        $password = md5($_POST['password']);
    }

    // 2. now working on our sql query to save our data to the database
    $sql = "INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username',
        password='$password'
    ";

    // echo $sql; for testing purposes

    // 3. execute the query and save it to database
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    // 4. check whether the (Query is Executed) data is inserted or not and display the correct message
    if($res==TRUE)
    {
        $_SESSION['add'] = "Admin added successfully";

        header("location:".SITEURL.'/admin/manage-admin.php');
    }
    else
    {
        $_SESSION['add'] = "Failed to add admin";

        header("location:".SITEURL.'/admin/add-admin.php');
    }
?>

<?php include('partials/menu.php') ?>


    <!-- main content section starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage admin</h1>
            <br>
            <br>

            <?php 
                if(isset($_SESSION['add'])) {
                    echo $_SESSION['add']; // displaying session message
                    unset($_SESSION['add']); // removing session message 
                }
            ?>
            <br> <br>
            <!-- button to add admin -->
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
            <br>
            <br>
            <br>

            <table class="tbl-full">
                <tr>
                    <th>Serial Number</th>
                    <th>Full name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Kelvin Musipha</td>
                    <td>KelvinMusipha</td>
                    <td>
                        <a href="#" class="btn-secondary">Update admin</a>
                        <a href="#" class="btn-danger">Delete admin</a>
                    </td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>Kelvin Musipha</td>
                    <td>KelvinMusipha</td>
                    <td>
                        <a href="#" class="btn-secondary">Update admin</a>
                        <a href="#" class="btn-danger">Delete admin</a>
                    </td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Kelvin Musipha</td>
                    <td>KelvinMusipha</td>
                    <td>
                        <a href="#" class="btn-secondary">Update admin</a>
                        <a href="#" class="btn-danger">Delete admin</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- main content section end -->

    <?php include('partials/footer.php') ?>
<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>

<style>
    body {
        background-image: url('../images/nordwood-themes-kRNZiGKtz48-unsplash.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
</style>

<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left; margin-left:20px; color: white;">LoginAsUser</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color: white;">LogOut</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">WELCOME TO ADMIN DASHBORD</h1>
</div>
<div align="center" style="margin-top:240px;">
<form style="position: center;color: #fff;font-weight:bold;font-size:50px">
    
    <!-- <a href="insertdata.php">Insert Data</a><br><br> -->

    <!-- <a href="updatedata.php">Update Data</a><br><br> -->

    <a href="deletedata.php">DELETE DATA</a><br><br>

    <a href="deleteusers.php">DELETE USERS</a><br><br>
</form>

</div>
</body>
</html>
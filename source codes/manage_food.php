<?php include('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
<div class="wrappper">
     <h1> Manage Food</h1>
   <br><br><br>

   <?php

if(isset($_SESSION['add']))
{
    echo $_SESSION['add']; //Displaying session Message
    unset($_SESSION['add']); //Removing session Message
}
?>
<br><br><br> 

<a href="add-foods.php" class="btn-primary">Add Foods</a>

<br><br><br>
<?php include('partials/footer.php'); ?>

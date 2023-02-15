<!-- Footer -->
<?php  include "header.php" ?>

<style>
    body:before{
        content: none;
    }
</style>

<?php 
     if(isset($_GET['delete']))
     {
         $clients_id= $_GET['delete'];

         // SQL query to delete data from user table where id = $clientsid
         $query = "DELETE FROM clients WHERE id = {$clients_id}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
     


              ?>


  <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
  <!-- Footer -->
<?php include "footer.php" ?>


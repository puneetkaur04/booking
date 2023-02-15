<!-- Footer -->
<?php include "header.php"?>

<style>
    body:before{
        content: none;
    }
    
    body{
        background-color: #2a5555;
    }
    tbody{
        background-color: white;
    }

    form, h1{
      color:white;
    }

    #submit{
      border: white 6px;
      background-color: white;
      color: black;
    }
</style>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['clients_id']))
    {
      $clients_id = $_GET['clients_id']; 
    
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM clients WHERE id = $clients_id ";
      $view_clients= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_clients))
        {
          $id = $row['id'];
          $fname = $row['firstname'];
          $lname = $row['lastname'];
          $number = $row['phonenumber'];
          $service = $row['service2'];
          $date = $row['date2'];
          $time = $row['time2'];
        }
      }
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $number = $_POST['phonenumber'];
      $service = $_POST['service2'];
      $date = $_POST['date2'];
      $time = $_POST['time2'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE clients SET firstname = '{$fname}' , lastname = '{$lname}' , phonenumber='{$number}', service2 = '{$service}', date2='{$date}', time2='{$time}' WHERE id = $clients_id";
      $update_client = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Client's data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Client Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="firstname" >First Name</label>
        <input type="text" name="firstname" class="form-control" value="<?php echo $fname  ?>">
      </div>

      <div class="form-group">
        <label for="lastname" >Last Name</label>
        <input type="text" name="lastname"  class="form-control" value="<?php echo $lname  ?>">
      </div>
        
    
      <div class="form-group">
        <label for="phonenumber" >Phone Number</label>
        <input type="text" name="phonenumber"  class="form-control" value="<?php echo $number  ?>">
      </div>    

      <div class="form-group">
        <label for="service2" >Service</label>
        <input type="text" name="service2"  class="form-control" value="<?php echo $service  ?>">
      </div>  

      <div class="form-group">
        <label for="date2" >Date</label>
        <input type="text" name="date2"  class="form-control">
      </div> 

      <div class="form-group">
        <label for="time2" >Time</label>
        <input type="text" name="time2"  class="form-control">
      </div>

      <d  iv class="form-group">
         <input id= "submit" type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5" style="background-color:white; color: black"> Back </a>
    <div>

<!-- Footer -->

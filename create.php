<!-- Header -->
<?php  include "header.php" ?>

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

</style>

<?php 
  if(isset($_POST['create'])) 
    {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $number = $_POST['number'];
        $service = $_POST['service2'];
        $date = $_POST['date2'];
        $time = $_POST['time2'];
      
        // SQL query to insert user data into the users table
        $query= "INSERT INTO clients(firstname, lastname, phonenumber, service2, date2, time2) VALUES('{$fname}','{$lname}','{$number}','{$service}','{$date}','{$time}')";
        $add_clients = mysqli_query($conn,$query);
    
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_clients) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Client added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Client details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" name="firstname"  class="form-control">
      </div>

      <div class="form-group">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" name="lastname"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="number" class="form-label">Phone Number</label>
        <input type="number" name="number"  class="form-control">
      </div>    

      <div class="form-group">
        <label for="service2" >Service</label>
        <input type="text" name="service2"  class="form-control">
      </div>  

      <div class="form-group">
        <label for="date2" >Date</label>
        <input type="text" name="date2"  class="form-control">
      </div> 

      <div class="form-group">
        <label for="time2" >Time</label>
        <input type="text" name="time2"  class="form-control">
      </div> 

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="Submit" style="background-color:white; color: black">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5" style="background-color:white; color: black"> Back </a>
  <div>

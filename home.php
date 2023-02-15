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
    h1{
        color:white;
    }

    .btn-outline-dark {
        color: white;
        border-color: white;
    }
    .btn-warning {
        color: black;
        color: #000;
        background-color: white;
        border-color: black;
    }

    table{
  border-radius: 6px;
  overflow: hidden;
    }

    .btn-outline-dark {
    background-color: white;
    color:black;
    height: 40px;
}

</style>
<div class="container">
    <h1 class="text-center"> NAIL AND SPA BOOKING </h1>

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col" colspan="3" class="text-
                    center">Information</th>
                </tr>
            </thead>
        <tbody>
    <tr>
    <?php
    $query="SELECT * FROM clients";

    $view_clients = mysqli_query($conn,$query);

    while($row= mysqli_fetch_assoc($view_clients)){
        $id = $row['id'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $number = $row['phonenumber'];
        $service = $row['service2'];
        $date = $row['date2'];
        $time = $row['time2'];
    echo "<tr >";
    echo "<th scope='row' >{$id}</th>";
    echo "<td > {$fname}</td>";
    echo "<td > {$lname}</td>";
    echo "<td > {$number}</td>";
    echo "<td > {$service}</td>";
    echo "<td > {$date}</td>";
    echo "<td > {$time}</td>";
    
    echo "<td class='text-center'> <a href='view.php?clients_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";
    
    echo "<td class='text-center'> <a href='update.php?edit&clients_id={$id}' class='btn btn-secondary'> <i class='bi bi-pencil'></i> EDIT</a> </td>";
    
    echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Delete</a> </td>";
    
              echo " </tr> ";
    }
    ?>
    </tr>
    </tbody>
    </table>
    <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bibi-person-plus"></i> <p> Book Appointment</p></a>
    </div>


<div class="container text-center mt-5">
    <a href="index.php" class="btn btn-warning mt-5"> Back </a>
</div>

<?php include "footer.php"?>

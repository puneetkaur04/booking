<?php include 'header.php'?>

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


    table{
  border-radius: 6px;
  overflow: hidden;
    }
</style>

<h1 class="text-center">Client Details</h1>
    <div class="container">
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
</tr>
</thead>
<tbody>
    <tr>

    <?php



        if (isset($_GET['clients_id'])) {
            $clients_id = $_GET['clients_id'];

            $query="SELECT * FROM clients WHERE id = {$clients_id}";
            $view_clients= mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($view_clients))
            {
                $id = $row['id'];
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $number = $row['phonenumber'];
                $service = $row['service2'];
                $time = $row['time2'];
                $date = $row['date2'];

                    echo "<tr >";
                    echo " <td >{$id}</td>";
                    echo " <td >{$fname}</td>";
                    echo " <td >{$lname}</td>";
                    echo " <td >{$number}</td>";
                    echo " <td >{$service}</td>";
                    echo " <td >{$time}</td>";
                    echo " <td >{$date}</td>";
                    echo " </tr>";
            }
        }
        ?>
        </tr>
    </tbody>
    </table>
    </div>

    <div class="container text-center mt-5">
        <a href="home.php" class="btn btn-warning mt-5" style="background-color:white; color: black"> Back </a>
    </div>



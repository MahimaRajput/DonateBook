<?php 
    include_once "navbar.php";
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>
        donated books
</title>
   
    <style>
        table{
           font-size:19px;
        }
        table th{
            background-color:mediumturquoise;;
            color:white;
        }
    </style>
</head>
<body>
<div class="container">
    <center><h1>Books Donated By You</h1></center>
    
    <table class="table table-hover">
        <tr>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Category</th>
        </tr>
        <?php
        $con = mysqli_connect("localhost","root","","practice");
        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
       // echo"done";
        $sql= "SELECT * FROM donatebook";
        $result = $con-> query($sql);

        if($result-> num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        
        echo "<td>" . $row["book"] . "</td>";
        echo "<td>" . $row["authorname"] . "</td>";
        echo "<td>" . $row["category"] . "</td>";

        echo "</tr>";
        
    }
    
        echo "</table>";
    }
  else{  
      echo "0 result";
  }
$con-> close();
    
   ?>
    </table>
</body>
</htmL>
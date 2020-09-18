<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

<style>
    section.col-md-6.col-md-offset-6 {
    margin-left: 25%;
}
    body{
      
      background-image:url("p (2).jpg");
      background-repeat: no-repeat, repeat;
  background-color: #cccccc;
  background-size: cover;
   
    }

   .registerform{
        background-color:steelblue;
        padding: 20px;
        color: white;
        letter-spacing: 1px;
        font-family: 'Karla', sans-serif;
        opacity:0.9;
    }
    .buttonform{
        border: none;
        font-size: 20px;
        margin: 2%;
    }
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: aqua;
}
.contact_head{
    font-family: 'Martel', serif;
    font-size: 50px;
    color: white;
}
.nav-link{
    color: black;
    
      background-color: rgb(89,204,231);
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.nav-link:hover {
color: black;
}
</style>
</head>
<body>
<?php 
    include_once "navbar.php";
    ?>
        <br>
    <section class="container">

            <section class="col-md-6 col-md-offset-6">
            
                    <form class="form-container was-validated registerform" action='donated.php' method="post">

    
                    <center>
                        <h1 class="contact_head">Donate a Book</h1> 
                     </center>   
                     
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name</label>
            
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="fname" pattern="[A-Za-z]{2,50}" required>
            </div>
        
       
            <div class="form-group">
            <label class="control-label col-sm-6" for="area">Enter Residental area</label>
                <input type="text" class="form-control" id="area" placeholder="Enter Residental area" name="area" pattern="[A-Za-z]{2,50}" required>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="state">State</label>
                <input type="text" class="form-control" id="state" placeholder="Enter State name" name="state" pattern="[A-Za-z]{2,50}" required>
            </div>

    
        <div class="form-group">
            <label class="control-label col-sm-2" for="mobileno">Mobile</label>
            
                <input type="text" class="form-control" id="mobileno" placeholder="Enter 10 Digit Mobile Number" name="mobileno" pattern="[0-9]{10}" maxlength="10" required>
            </div>
            
    
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="email" required>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="book">Book</label>
                <input type="text" class="form-control" id="book" placeholder="Enter Book Name" name="bookname" pattern="[A-Za-z]{2,50}" required>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="edition">Edition</label>
                <input type="text" class="form-control" id="edition" placeholder="Enter Edition" name="edition" required>
            </div>
        <div class="form-group">
            <label class="control-label col-sm-6" for="authorname">Author name</label>
          
                <input type="text" class="form-control" id="event" placeholder="Select Author Name" name="authorname" required>
            </div>
        
           
        </div>
        
        <div class="form-inline">
            <label class="control-label p-2" for="category">Category</label>
            <select id="category" name="category" class="custom-select col-md-7">
                <option value="College">College level</option>
                <option value="School">School level</option>
                <option value="Novels">Novels</option>
                <option value="others">Others</option>
            </select>
        </div>
        <br>
        
            <a class="nav-link" href="uploadfile.php"required>Upload Photos</a>
        
    </div>
        <br>

          
            <center>
        
                <input type="submit" class="btn btn-warning btn-block"></button>
</center>
    </form>
    </section>
    </section>
    </section>

</body>

</html>
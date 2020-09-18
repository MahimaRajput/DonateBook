<?php 

include "navbar.php";
include"connection.php";
if(isset($_POST['submit'])){
 
 // Count total files
 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
  $sql="INSERT INTO `uploadphotos` ( `title`, `img`) VALUES ( '$filename', '$filename')";

  $displayquery= "select*from uploadphotos";
  $querydisplay = mysqli_query($con,$displayquery);
  $row = mysqli_num_rows($querydisplay);
  while($result= mysqli_fetch_array($row))

  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
 
 } 
 
  if($con->query($sql) === TRUE)
{
  echo "YOUR FILES ARE UPLOADED SUCCESSFULLY..........";
} 
else{
  echo "errror";
}
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
   
<style>
    body{
        margin-top: 10px;
         background-position: center center;
        background-image: url("1.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
background-attachment: fixed;
 background-color: #464646;
    }
    
.ABC{
      width:450px;
      height:100px;
      background-color:steelblue;
        color:#fff;
        top: 50%;
      left:50%;
      position: relative;
      transform: translate(-50%,-50%);
      box-sizing: border-box;
      padding:30px;
      opacity:0.9;
      margin-top: 100px;
    
    
margin-top: 50px;
}

h1{
    margin-top: 30px;
    font-size:50px;
      font-family: 'Modak', cursive;
      letter-spacing: 2px;
      text-decoration:underline;
}
p{
     font-size:30px;
       
       font-family: 'Inconsolata', monospace;
       margin-top:20px;

    
}

</style>
</head>
<br>
<center><h1>UPLOAD PHOTOS</h1></center>
<center><p>You can choose multiple files</p></center>
<form method='post' action='' enctype='multipart/form-data'>
    <br>
    <br>
<div class="ABC">
 <center><input type="file" name="file[]" id="file" multiple>

 <input type='submit' name='submit' value='Upload'></center>
</div>
</form>
</html>
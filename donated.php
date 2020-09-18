<!--to insert into database detail of donor-->
<?php
$fname = $_POST['fname'];
$book = $_POST['bookname'];
$authorname = $_POST['authorname'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$category = $_POST['category'];
$area = $_POST['area'];
$state = $_POST['state'];
$edition = $_POST['edition'];

$host = 'localhost' ;
$dbUsername = 'root';
$dbPassword ='';
$dbname= 'practice';
$conn = new mysqli($host , $dbUsername,$dbPassword, $dbname );

if($conn->connect_error) {
die("Connection Failed : $conn->connect_error");
}
else{
$stmt = $conn->prepare("insert into donatebook(fname,book,authorname,email,category,area,state,edition,mobileno) values( ?, ?, ?, ?, ?, ?, ?, ?,?)");
$stmt ->bind_param("sssssssii",$fname ,$book, $authorname, $email, $category, $area,$state,$edition,$mobileno);
$stmt->execute();
echo "<h1>Added Successfully...  </h1>";
$stmt ->close();
$conn->close();
}
?>

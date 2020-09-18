<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
	.navbar-light .navbar-brand{
    color:black;
    text-transform: uppercase;
    font-weight: bold;
    padding-left: 40px;
    letter-spacing: 2px;
    
}
.navbar-light .navbar-nav .nav-link1{
    color:orange;
    font-weight: bold;
    text-transform: uppercase;
    font-family: 'Karla', sans-serif;
    margin-right: 50px;
    letter-spacing: 2px;
}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
	  <h2>AAPkI Pustak</h2></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link1" href="index.php">Home</a>
    </li>
   

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link1 dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
    Books
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="universitybook.php">University</a>
        <a class="dropdown-item" href="schoolbook.php">School</a>
        <a class="dropdown-item" href="novelbook.php">Novels</a>
		<a class="dropdown-item" href="otherbook.php">Others</a> 
	</div>
	</li>
	<li class="nav-item">
      <a class="nav-link1" href="donateregister.php">Donate</a>
	</li>
	<li class="nav-item">
      <a class="nav-link1" href="login.php">Login</a>
    </li>
    
  </ul>
</nav>

  

</body>
</html>

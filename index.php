<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    

	.heroimage
	{
	  height:100%;
	  width:100%;
	  margin:0;
	  padding:0;
	  background:url("p (3).jpg");
	  background-size:cover;
      background-position:center;
	  background-repeat:no-repeat;
	  background-attachment: scroll;
	}
	.hero
    { 
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color:white;
	}
    .hero h1
    {
      font-size:70px;
	  font-family: 'Modak', cursive;;
    }
    .hero p
    {
      font-size:30px;
	  font-family: 'Karla', sans-serif;
    }
    .hero button
    {
      position: absolute;
      transform: translate(-50%, -50%);
	  background-color:#ff0000;
	  color: white;
	  font-size: 16px;
	  padding: 12px 24px;
	  margin-top:20px;
	  border: none;
	  cursor: pointer;
      border-radius: 5px;
    }
    .hero button:hover
    {
      background-color:#000000;
    }
	.about
	{
	   height:400px;
	   width:100%;
	   #border:1px solid;
	   background-color:rgb(255, 230, 230);
	}
	.about h3
	{
	   font-size:50px;
	   font-style:bold;
	   text-align:center;
	   margin-top:auto;
	   padding:30px;
	   
	}
	
	.about p
	{  
	   font-size:20px;
	   text-align:justify;
	   font-family: 'Inconsolata', monospace;
	   margin-top:20px;
	   padding:0px 80px;
	}
  .but{
    color: white;
  }
.but:hover{
  text-decoration: none;
}
 </style>

</head>
<body>
 <?php
 include_once "navbar.php";
 ?>		
   <!-- heroimage -->	
     <div class="heroimage">
         <div class="hero">
             <h1>AAPKI PUSTAK</h1>
             <p>Donate your books at your ease.</p>
             <p><button><a class="but" href="donateregister.php" role="button">Donate</a> </button>
         </div>
     </div>	 
	
	 
	 
</body>
</html>

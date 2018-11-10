<!DOCTYPE html>
<html>
<head>
	<title>Michiel Abanto</title>
	<link rel="stylesheet" type="text/css" href="css/index-styles.css">
</head>
<header>
	<a href="home.html"><button>Home</button></a><br>
	<br>
	<a href="autobio.html"><button>About Me</button></a><br>
	<br>
	<a href="page2.html"><button>Contacts</button></a><br>
	<br>
	<a href="index.html"><button>My Resume</button></a><br>

</header>
<body>
	<div class = "margin" style="text-align:center ">
		
		<div class = "intro" style=" text-align: center;">
			<form class = "containerauto">
		<p align="center">
			<img src="img/pic1.jpg">
			<h1 style="color:blue;"> Ask Me?</h1>
			<br>
			<br>
			<?php
			include("dbcon.php");


			mysql_query("SELECT * FROM questions");
			{
				do(echo"Show");
			}



			?>
					
        </p>
           <br>
               <p align="center"> 
               </p>
               </form>
	</div>
	</body>
</html>
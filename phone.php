<!DOCTYPE html>
<html>
<head>
<title>Home page</title>
<style type="text/css">
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300);

ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color: #333;

}

li {
float: left;
}

li a, .dropbtn {
display: inline-block;
color: white;
/* text-align: center; */
/* padding: 14px 16px; */
text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
/* background-color: red; */
}

li.dropdown {
display: inline-block;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover.dropdown-content {
display: block;
/* cursor: pointer; */
}
.apranqner{
	display: flex;
	  align-content: flex-start;
}


</style>


</head>
<body>
<div class="container">
<main class="main">
<ul>
<?php include("menu.php"); ?>
<div class="apranqner">


<?php
	// mysql_connect("vamgolde_lib1","Vahan123*","vamgolde_lib1");
//$db = mysql_connect("vamgolde_lib1","vamgolde_lib1","Vahan123*") or die(mysql_error());


$sql = "SELECT * FROM products where category='e-based SSD18GB 1866MHz memory256GB PCIe-based'";
$result = mysqli_query($con, $sql);
		?>


		<?php
		while( $r = mysqli_fetch_assoc($result) ){
		?>
		<div style="float:left;margin:100px; width: 500px; display:block";
height: 400px;
;}">
		<p style=" border:solid rgb(255, 110, 0)  5px;;
		">

		<?php echo $r["name"]; ?>
		<?php echo "<br><br>";?>

			<img width="130" src="<?php echo $r["img_src"]; ?>">
			<?php echo "<br><br>";?>
			<?php echo $r["category"]; ?>
			<?php echo "<br><br>";?>
			<a href="lur.php?id=<?php echo $r["id"]; ?>">
				lern more
			</a>
		</p>
		</div>

	<?php echo "<br><br>";?>
<?php
} ;
?>
</div>
	</div>
	</main>
</div>
</body>
</html>

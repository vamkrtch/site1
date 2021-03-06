	<?php include("db_connection.php"); ?>
	<style media="screen">
	@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css);
	@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300);

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body {
		font-family: 'Montserrat', sans-serif;
	}
	.container {
		width: 100%;
		height: 100%;

	}
	nav {
		position: fixed;
		display: flex;
		align-items: flex-start;
		width: 20%;
		height: 100%;
		background-color: #111;
	}
	/* main {
		position: fixed;
		right: 0;
		width: 80%;
		height: 100%;
		background-color: #fff;
		overflow: auto;
		padding: 40px;
	} */
	h1 {
		font-weight: bold;
		margin-bottom: 50px;
		font-size: 55px;
		text-align: center;
	}
	p {
		margin-bottom: 20px;
		line-height: 26px;
	}
	p::first-letter {
		font-size: 200%;
		font-weight: bold;
	}
	li, ul label.title, ul, a {
		width: 100%;
		color: #FFF;
		font-family: 'Montserrat', 'Open Sans', sans-serif;
		display: block;
		font-weight: bold;
	}
	ul label {
		height: 35px;
	}
	ul li{
		height: 35px;
		overflow: hidden;
		transition: all .3s;
	}
	li {
		display: block;
		background-color: #363636;
	}
	label.title {
		font-size: 18px;
		background: linear-gradient(#111, #2f2f2f);
		padding: 10px 15px;
		cursor: pointer;
	  transition: all .25s;
	}
	a{
		font-size: 12px;
		text-decoration: none;
		color: #FFF;
		display: block;
		padding: 10px 25px;
		transition: all .25s;
	}
	a:hover {
		background-color: #444;
	  box-shadow: inset 5px 0px 0px 0px #fff;
	}
	label:hover {
		text-shadow: 0px 0px 10px #fff;
	}
	input[type="radio"] {
		display: none;
	}
	#edit:checked + li, #archive:checked + li, #tools:checked + li, #preferences:checked + li {
		height: 179px;
	}
	i {
		margin-right: 12px;
	}
	@media screen and (max-width: 600px){
		nav {
			width: 100%;
			position: relative;
		}
		main {
			width: 100%;
			position: relative;
		}
	}
	</style>

			<nav class="menu">
				<ul>
					<input type="radio" name="menu" id="archive" checked>
					<li>
						<label for="archive" class="title"><i class="fa fa-folder"></i>Englsih</label>
						<a href="index.php">shtemaran</a>
						<a href="phone.php">shool book</a>
						<!-- <a href="comp.php">Computer</a>
						<a href="lur.php">???</a> -->
					</li>
					<input type="radio" name="menu" id="edit">
					<li>
						<label for="edit" class="title"><i class="fa fa-edit"></i>Edit</label>
						<a href="#">Copy</a>
						<a href="#">Cut</a>
						<a href="#">Paste</a>
						<a href="#">Undo</a>
					</li>
					<input type="radio" name="menu" id="tools">
					<li>
						<label for="tools" class="title"><i class="fa fa-gavel"></i>Tools</label>
						<a href="#">Build</a>
						<a href="#">Macros</a>
						<a href="#">Command</a>
						<a href="#">Snippets</a>
					</li>
					<input type="radio" name="menu" id="preferences">
					<li>
						<label for="preferences" class="title"><i class="fa fa-gears"></i>Preferences</label>
						<a href="#">Browser</a>
						<a href="#">Settings</a>
						<a href="#">Packages</a>
						<a href="#">Theme</a>
					</li>
				</ul>
			</nav>


<!-- <span>
<ul>
  <li><a href="index.php">Home</a></li>

  <li class="dropdown">
    <a href="comp.php" class="dropbtn">Shop</a>
    <span class="dropdown-content">
      <a href="comp.php">Computer</a>
      <a href="phone.php">Phone</a>

    </span>
    <li><a href="contact.php">Contact</a></li>
  </li>
</ul>
</span> -->

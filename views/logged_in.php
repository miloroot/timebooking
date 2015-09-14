<div class="wrapper">
	<div class="top-content">
		<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
		Hello, you are logged in as: <?php echo $_SESSION['user_name']; ?>. <br>
		With the phonenumber: <?php echo $_SESSION['user_phonenumber']; ?>. <br>
		Try to close this browser tab and open it again. Still logged in! ;)

		<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
	</div>
	<div class="top-content-logout">
		<a href="index.php?logout"><button class="logout-btn">Logout</button></a>
	</div>
	<div class="main-content">
		Schema here.
	</div>
</div>
<div class="wrapper">
	<div class="top-content">
		<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
		Hello, you are logged in as: <?php echo $_SESSION['user_name']; ?>. <br>
		With the phonenumber: <?php echo $_SESSION['user_phonenumber']; ?>. <br>

		<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
	</div>
	<div class="top-content-logout">
		<a href="index.php?logout"><button class="logout-btn">Logout</button></a>
	</div>
	<div class="main-content">
		<form class="shift-form">
			<select class="shift">
				<option>Choose shift:</option>
				<option>06:00 - 14:00</option>
				<option>07:00 - 15:30</option>
				<option>07:30 - 16:00</option>
				<option>14:00 - 22:00</option>
				<option>22:00 - 06:00</option>
			</select>
			<input type="text" class="calendar" placeholder="Choose date.">
			<button type="submit" class="submit-btn">Save</button>
		</form>
		<div class="saved-times"></div>
	</div>
</div>
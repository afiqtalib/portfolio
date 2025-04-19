<style>
	/*** START HEADER TOP STYLE ***/

	* {
		margin: 0;
		font-family: verdana;
	}

	body {
		height: 80vh;
	}

	header {
		position: fixed;
		width: 100%;
		height: 70px;
		top: 0;
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 5px 30px;
		z-index: 999;
		background-color: #002D62;
		box-sizing: border-box;
	}

	.nav img {
		float: left;
		width: 80px;
		height: 80px;
	}

	.nav ul {
		display: flex;
		align-items: center;
		/* float: right; */
		position: relative;
		margin: 0;
		padding: 0;
		list-style-type: none;
		justify-content: flex-end;
	}

	.nav ul li {
		list-style: none;
		justify-content: space-between;
	}

	.nav ul li a {
		position: relative;
		margin: 0 2px;
		text-decoration: none;
		text-transform: uppercase;
		color: #E0FFFF;
		letter-spacing: 1px;
		font-weight: 24px;
		font-weight: unset;
		padding: 5px 10px;
		line-height: 5px;
	}

	.nav ul li a.active,
	.nav ul li a:focus,
	.nav ul li a:hover {
		color: #041E42;
		background-color: #f7f7f7;
		border-radius: 10px;
	}

	/*** END HEADER TOP STYLE ***/
</style>
</head>

<!-- HEADER SECTION -->
<header class="header_section">
	<div class="nav">
		<!-- NAVBAR SECTION -->
		<ul class="bold">
			<li><a href="index.php#home">HOME</a></li>
			<li><a href="index.php#about">about me</a></li>
			<li><a href="index.php#education">education</a></li>
			<li><a href="index.php#skills">skills</a></li>
			<li><a href="index.php#language">language</a></li>
			<li><a href="index.php#activity">activity</a></li>
			<li><a href="index.php#experience">experience</a></li>
		</ul>
	</div>
</header>

<script>
	function displayDateTime() {
		var currentDate = new Date();
		var day = currentDate.getDate();
		var month = currentDate.getMonth() + 1; // January is 0
		var year = currentDate.getFullYear();
		var hours = currentDate.getHours();
		var minutes = currentDate.getMinutes();
		var seconds = currentDate.getSeconds();

		// Add a leading zero to the hours, minutes, and seconds if they are single digits
		if (hours < 10) {
			hours = "0" + hours;
		}
		if (minutes < 10) {
			minutes = "0" + minutes;
		}
		if (seconds < 10) {
			seconds = "0" + seconds;
		}

		// Concatenate the date and time into a single string
		var dateString = day + "/" + month + "/" + year + " " + hours + ":" + minutes + ":" + seconds;

		// Update the date and time display
		document.getElementById("digital-clock").innerHTML = dateString;
	}

	// Call the displayDateTime function every 1000 milliseconds (1 second)
	setInterval(displayDateTime, 1000);
</script>

<style>
	#digital-clock {
		color: #041E42;
		text-align: center;
		letter-spacing: 3px;
		font-size: 60px;
		font-weight: bolder;
		font-family: Impact, 'Arial Narrow Bold', sans-serif;
	}
</style>
<style>
	/*** START HEADER TOP STYLE ***/

	* {
		margin: 0;
		font-family: 'Inter', 'Poppins', verdana, sans-serif;
	}

	body {
		height: 80vh;
	}

	header {
		position: fixed;
		width: 100%;
		height: 72px;
		top: 0;
		display: grid;
		grid-template-columns: 1fr auto 1fr;
		align-items: center;
		padding: 5px 40px;
		z-index: 999;
		background: linear-gradient(135deg, #170f22, #2e1d40);
		border-bottom: 1px solid rgba(167, 139, 250, 0.18);
		box-shadow: 0 4px 24px rgba(0, 0, 0, 0.4);
		box-sizing: border-box;
	}

	.brand {
		grid-column: 1;
		justify-self: start;
		color: #fff;
		font-family: 'Poppins', sans-serif;
		font-weight: 700;
		font-size: 1.15rem;
		letter-spacing: 0.5px;
	}

	.brand span {
		color: #c4b5fd;
	}

	.nav {
		grid-column: 2;
	}

	.nav ul {
		display: flex;
		align-items: center;
		position: relative;
		margin: 0;
		padding: 0;
		list-style-type: none;
		justify-content: center;
		gap: 6px;
	}

	.nav ul li {
		list-style: none;
	}

	.nav ul li a {
		position: relative;
		margin: 0;
		text-decoration: none;
		text-transform: uppercase;
		color: #ede9fe;
		letter-spacing: 0.8px;
		font-size: 13.5px;
		font-weight: 600;
		padding: 10px 18px;
		line-height: 1;
		border-radius: 50px;
		transition: all 0.25s ease;
		display: inline-flex;
		align-items: center;
		gap: 8px;
	}

	.nav ul li a i {
		font-size: 15px;
	}

	.nav ul li a.active,
	.nav ul li a:focus,
	.nav ul li a:hover {
		color: #fff;
		background: linear-gradient(135deg, #8b5cf6, #452c63);
		box-shadow: 0 4px 16px rgba(139, 92, 246, 0.4);
	}

	.hamburger {
		display: none;
		grid-column: 3;
		justify-self: end;
		width: 40px;
		height: 40px;
		border: none;
		background: rgba(139, 92, 246, 0.12);
		border-radius: 10px;
		cursor: pointer;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		gap: 5px;
		padding: 0;
	}

	.hamburger span {
		display: block;
		width: 20px;
		height: 2px;
		background: #ede9fe;
		border-radius: 2px;
		transition: all 0.3s ease;
	}

	.hamburger.open span:nth-child(1) {
		transform: translateY(7px) rotate(45deg);
	}

	.hamburger.open span:nth-child(2) {
		opacity: 0;
	}

	.hamburger.open span:nth-child(3) {
		transform: translateY(-7px) rotate(-45deg);
	}

	/* ===== MOBILE NAV ===== */
	@media (max-width: 768px) {
		header {
			grid-template-columns: auto auto 1fr;
			column-gap: 10px;
			padding: 5px 16px;
		}

		.brand {
			font-size: 0.95rem;
			grid-column: 1;
		}

		.hamburger {
			display: flex;
		}

		.nav {
			grid-column: 1 / -1;
			position: fixed;
			top: 72px;
			left: 0;
			width: 100%;
			max-height: 0;
			overflow: hidden;
			background: linear-gradient(180deg, #1d1430, #170f22);
			border-bottom: 1px solid rgba(167, 139, 250, 0.18);
			box-shadow: 0 10px 24px rgba(0, 0, 0, 0.4);
			transition: max-height 0.35s ease;
		}

		.nav.open {
			max-height: 400px;
		}

		.nav ul {
			flex-direction: column;
			align-items: stretch;
			gap: 4px;
			padding: 16px;
			width: auto;
		}

		.nav ul li a {
			display: flex;
			justify-content: flex-start;
			font-size: 13px;
			padding: 14px 16px;
			white-space: normal;
			border-radius: 10px;
		}
	}

	/*** END HEADER TOP STYLE ***/
</style>
</head>

<!-- HEADER SECTION -->
<header class="header_section">
	<div class="brand">Afiq<span>Talib</span></div>
	<nav class="nav" id="mainNav">
		<!-- NAVBAR SECTION -->
		<ul class="bold">
			<li><a href="index.php#home"><i class="bi bi-house-door"></i> HOME</a></li>
			<li><a href="index.php#about"><i class="bi bi-person"></i> about me</a></li>
			<li><a href="index.php#education"><i class="bi bi-mortarboard"></i> education</a></li>
			<li><a href="index.php#skills"><i class="bi bi-stars"></i> skills</a></li>
			<li><a href="index.php#experience"><i class="bi bi-briefcase"></i> experience</a></li>
		</ul>
	</nav>
	<button class="hamburger" id="hamburgerBtn" aria-label="Toggle menu">
		<span></span>
		<span></span>
		<span></span>
	</button>
</header>

<script>
	(function () {
		var hamburgerBtn = document.getElementById('hamburgerBtn');
		var mainNav = document.getElementById('mainNav');

		hamburgerBtn.addEventListener('click', function () {
			hamburgerBtn.classList.toggle('open');
			mainNav.classList.toggle('open');
		});

		mainNav.querySelectorAll('a').forEach(function (link) {
			link.addEventListener('click', function () {
				hamburgerBtn.classList.remove('open');
				mainNav.classList.remove('open');
			});
		});
	})();
</script>

<script>
	function displayDateTime() {
		var currentDate = new Date();

		var gregorianDate = currentDate.toLocaleDateString('en-GB', {
			weekday: 'long',
			day: 'numeric',
			month: 'long',
			year: 'numeric'
		});

		var hours = currentDate.getHours();
		var minutes = currentDate.getMinutes();
		var seconds = currentDate.getSeconds();

		if (hours < 10) {
			hours = "0" + hours;
		}
		if (minutes < 10) {
			minutes = "0" + minutes;
		}
		if (seconds < 10) {
			seconds = "0" + seconds;
		}

		var timeString = hours + ":" + minutes + ":" + seconds;

		var hijriMonths = [
			"Muharram", "Safar", "Rabiulawal", "Rabiulakhir",
			"Jamadilawal", "Jamadilakhir", "Rejab", "Syaaban",
			"Ramadan", "Syawal", "Zulkaedah", "Zulhijjah"
		];

		var hijriParts = new Intl.DateTimeFormat('en-u-ca-islamic-umalqura', {
			day: 'numeric',
			month: 'numeric',
			year: 'numeric'
		}).formatToParts(currentDate);

		var hijriDay, hijriMonthIndex, hijriYear;
		hijriParts.forEach(function (part) {
			if (part.type === 'day') hijriDay = part.value;
			if (part.type === 'month') hijriMonthIndex = parseInt(part.value, 10) - 1;
			if (part.type === 'year') hijriYear = part.value;
		});

		var hijriDate = hijriDay + " " + hijriMonths[hijriMonthIndex] + " " + hijriYear + "H";

		document.getElementById("digital-clock").innerHTML =
			'<div class="clock-time">' + timeString + '</div>' +
			'<div class="clock-date">' + gregorianDate + '</div>' +
			'<div class="hijri-date">' + hijriDate + '</div>';
	}

	// Call the displayDateTime function every 1000 milliseconds (1 second)
	setInterval(displayDateTime, 1000);
	displayDateTime();
</script>

<style>
	#digital-clock {
		color: #c4b5fd;
		text-align: center;
		letter-spacing: 3px;
		font-size: 48px;
		font-weight: 700;
		font-family: 'Poppins', sans-serif;
	}
</style>
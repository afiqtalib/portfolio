<style>
      /*** START HEADER TOP STYLE ***/

    * {
      margin: 0;
      font-family: verdana;
    }

    body {
      height: 80vh;
    }

    header{
      position: sticky;
      width: 100%;
      height: 70px;
      top: 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 5px 30px;
      z-index: 999;
      background-color: grey;
      box-sizing: border-box;
    }

    .nav img {
      float: left;
      width: 80px;
      height: 80px;
    } 

    .nav ul {
      display: flex;
      align-items:center;
      /* float: right; */
      position: relative;
      margin: 0;
      padding: 0;
      list-style-type: none;
      justify-content: flex-end;
    }
    
    .nav ul li {
      list-style: none;
    }

    .nav ul li a { 
      position: relative;
      margin: 0 2px;
      text-decoration: none;
      text-transform: uppercase;
      color: white;
      letter-spacing: 1px;
      font-weight: bold;
      padding: 5px 20px;
      line-height: 5px;
    }
    
    .nav ul li a.active,
    .nav ul li a:focus,
    .nav ul li a:hover {
      color: gold;
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
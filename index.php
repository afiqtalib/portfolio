<?php
    include "header.php";
    include "navbar.php";
?>

<!-- Include CSS -->
    <link rel="stylesheet" href="style.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio | Afiq Talib</title>
</head>
<body>

    <!-- HOME SECTION -->
<section class="home-section" id="home">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>I am Muhammad Afiq</h2><br>
                <h4>Looking for Job Position in</h4><br><br>
                <h4>Software engineer • System Engineer • Programmer • IT Support</h4><br><br>
                <div id="digital-clock"></div>
            </div>
            <div class="col">
                <img src="images/img.png" alt="photo" style="width: 70%; border-style: groove;">
            </div>
        </div>
        
    </div>
</section>

    <!-- ABOUT ME SECTION  -->
<section class="about-section" id="about">
    <div class="container">
        <div class="section_heading">
            <h2>ABOUT ME</h2>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="p-3 border">
                    <img src="images/test.JPG" alt="photo" style="width: 100%;">
                </div>
            </div>
            <div class="col-7">
                <div class="p-3 no-border">
                    <div class="row p-2">
                        <div class="col-1"><i class="bi bi-person-circle" style="font-size:2rem"></i></div>
                        <div class="col text">Muhammad Afiq Bin Talib Ali</div>
                    </div>
                    <div class="row p-2">
                        <div class="col-1"><i class="bi bi-gender-male" style="font-size:2rem;  color: black;" ></i></div>
                        <div class="col-6 text">22 Years Old</div>
                    </div>
                    <div class="row p-2">
                        <div class="col-1"><i class="bi bi-telephone" style="font-size:2rem;" ></i></div>
                        <div class="col-6 text">011-21828562</div>
                    </div>
                    <div class="row p-2">
                        <div class="col-1"><i class="bi bi-envelope" style="font-size:2rem;" ></i></div>
                        <div class="col-6 text">afiqtalib2580@gmail.com</div>
                    </div>
                    <div class="row p-2">
                        <div class="col-1"><i class="fa fa-home" style="font-size:2rem;"></i></div>
                        <div class="col-6 text">Kota Bharu, Kelantan</div>
                    </div>
                    <div class="row p-2">
                        <div class="col-1"><i class="fa fa-linkedin" style="font-size:2rem;"></i></div>
                        <a class="col-6 text" href="https://www.linkedin.com/in/afiqtalib/">Linked In</a>
                    </div>
                </div>
                <div class="text" style="text-align:justify;">
                    <span>My name is Muhammad Afiq Bin Talib Ali <br> I interested in web development 
                    I is hardworking and passionate person in venturing my interested and new things. 
                    My interested is in web desinger, web development and data management.
                    Currently, i looking for job related with my interested.describe about me
                    </span>
                </div>
                <br>
                <div class="button">
                    <button type="button" class="btn btn-light">Download CV</button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- EDUCATION SECTION -->
<section class="education-section" id="education">
    <div class="container">
        <div class="section_heading">
            <h2>EDUCATION</h2>
        </div>

        <div class="card border-left-primary" style="width: 90%;">
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="card-title">UiTM Terengganu, Campus Kuala Terengganu</h5>
                        <p class="card-text"> Bachelor Degree of Information System Hons. Business Computing </p>
                        <small>Sept 2019 - Present</small>
                    </div>
                    <div class="col-3">
                        <img src="images/logo-uitm.png" alt="" style="width: 95%; align-items: center; ">
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">CGPA 3.31</li>
                <li class="list-group-item">Developed the web-based system, Barber Booking System (BBS)</li>
            </ul>
        </div>
        <br>
        <div class="card" style="width: 90%;">
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="card-title">Mara Collage Kuala Nerang, Kedah</h5>
                        <p class="card-text">Matriculation in Accounting</p>
                        <small>May 2018 - Apr 2019</small>
                    </div>
                    <div class="col-3">
                        <img src="images/logo-kmkn.png" alt="" style="width: 45%; align-items: center; ">
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">CGPA 3.92</li>
                <li class="list-group-item">Awarded Dean List in Semester 1</li>
            </ul>
        </div>
        <br>
        <div class="card" style="width: 90%;">
            <div class="row">
                <div class="col-7">
                    <div class="card-body">
                        <h5 class="card-title">Sekolah Menengah Kebangsaan Long Ghafar 2, Kota Bharu, Kelantan</h5>
                        <p class="card-text"> Sijil Pelajaran Malaysia (SPM) in Accounting</p>
                        <small>Jan 2013 - Dec 2017</small>
                    </div>
                </div>
                <div class="col-3">
                    <img src="images/logo-lg2.png" alt="" style="width: 40%; padding-top: 15px; ">
                </div>
            </div>
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item">GRADE 4A, 2A-, 1B, 1C+, 1D </li>
                <li class="list-group-item">Targeted Student in SPM 2017</li>
            </ul>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section class="skill-section" id="skills">
    <div class="container-fluid">
        <div class="section_heading">
            <h2>SKILLS</h2>
        </div>
        <div class="card shadow mb-4" style="width: 90%">
            <div class="card-body">
                <h4 class="small font-weight-bold">HTML<span
                        class="float-right">90%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">CSS<span
                        class="float-right">50%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">BOOTSTRAP<span
                        class="float-right">75%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 75%"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">MYSQL<span
                        class="float-right">50%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">PHP <span
                        class="float-right">40%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Power BI <span
                        class="float-right">40%</span></h4>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 40%"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LANGUAGE -->
<section class="language-section" id="language">
    <div class="container">
        <div class="section_heading">
            <h2>LANGUAGE</h2>
        </div>
        <div class="card shadow mb-4" style="width: 90%; justify-content: center;">
            <div class="card-body">
                <h4 class="small font-weight-bold">MALAY<span
                        class="float-right">90%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">ENGLISH<span
                        class="float-right">65%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"
                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">ARABIC<span
                        class="float-right">50%</span></h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                
                
            </div>
        </div>
    </div>
</section>

<!-- CURRICULAR ACTIVITIES SECTION -->
<section class="activity-section" id="activity">
    <div class="container">
        <div class="section_heading">
            <h2>ACTIVITY</h2>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">MALAY</li>
            <li class="list-group-item">ENGLISH</li>
            <li class="list-group-item">ARABIC</li>
        </ul>
    </div>
</section>

<!-- WORK EXPERIENCES -->
<section class="experience-section" id="experience">
    <div class="container">
        <div class="section_heading">
            <h2>EXPERIENCES</h2>
        </div>

        <div class="card" style="width: 90%;">
            <div class="card-body">
                <div class="row">
                    <div class="col-7">
                        <h5 class="card-title">Iman Catering-KB</h5>
                        <p class="card-text"> Kitchen Helper & Runner </p>
                        <small>May 2018 - July 2019</small>
                    </div>
                    <div class="col-3">
                        <img src="images/iman-catering.jpg" alt="" style="width: 80%; align-items: center; ">
                    </div>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Prepare the food following the SOP properly</li>
                <li class="list-group-item">Arrange the schedule time to delivery for customers</li>
            </ul>
        </div>
    </div>
</section>
</body>
</html>
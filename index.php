<?php
include "header.php";
include "navbar.php";
?>

<!-- Include CSS -->
<link rel="stylesheet" href="style.css?v=2">

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
                    <span class="hero-eyebrow">WELCOME TO MY PORTFOLIO</span>
                    <h2>I am Muhammad Afiq</h2>
                    <p class="hero-subtitle"><span id="typed-role"></span><span class="typed-cursor">|</span></p>
                    <div id="digital-clock">
                        <div class="clock-skeleton">
                            <div class="skeleton-bar skeleton-time"></div>
                            <div class="skeleton-bar skeleton-date"></div>
                            <div class="skeleton-bar skeleton-hijri"></div>
                        </div>
                    </div>
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
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="p-3 border">
                        <img src="images/test.JPG" alt="photo" style="width: 100%;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="info-grid">
                        <div class="info-item d-none">
                            <i class="bi bi-person-circle"></i>
                            <div>
                                <small>FULL NAME</small>
                                <span>Muhammad Afiq Bin Talib Ali</span>
                            </div>
                        </div>
                        <div class="info-item d-none">
                            <i class="bi bi-gender-male"></i>
                            <div>
                                <small>AGE</small>
                                <span>22 Years Old</span>
                            </div>
                        </div>
                        <div class="info-item d-none">
                            <i class="bi bi-telephone"></i>
                            <div>
                                <small>PHONE</small>
                                <span>011-21828562</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="bi bi-envelope"></i>
                            <div>
                                <small>EMAIL</small>
                                <span>afiqtalib2580@gmail.com</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-home"></i>
                            <div>
                                <small>LOCATION</small>
                                <span>Kota Bharu, Kelantan</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fa fa-linkedin"></i>
                            <div>
                                <small>LINKEDIN</small>
                                <a href="https://www.linkedin.com/in/afiqtalib/">View Profile</a>
                            </div>
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
                    <div class="button text-center">
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

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date-badge">Sept 2019 - Present</span>
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title">UiTM Terengganu, Campus Kuala Terengganu</h5>
                                <p class="card-text"> Bachelor Degree of Information System Hons. Business Computing </p>
                            </div>
                            <div class="col-3 text-center">
                                <img src="images/logo-uitm.png" alt="" style="width: 80px;">
                            </div>
                        </div>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">Developed the web-based system, Barber Booking System (BBS)</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date-badge">May 2018 - Apr 2019</span>
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title">Mara Collage Kuala Nerang, Kedah</h5>
                                <p class="card-text">Matriculation in Accounting</p>
                            </div>
                            <div class="col-3 text-center">
                                <img src="images/logo-kmkn.png" alt="" style="width: 55px;">
                            </div>
                        </div>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">Awarded Dean List in Semester 1</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date-badge">Jan 2013 - Dec 2017</span>
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h5 class="card-title">Sekolah Menengah Kebangsaan Long Ghafar 2, Kota Bharu, Kelantan</h5>
                                <p class="card-text"> Sijil Pelajaran Malaysia (SPM) in Accounting</p>
                            </div>
                            <div class="col-3 text-center">
                                <img src="images/logo-lg2.png" alt="" style="width: 55px;">
                            </div>
                        </div>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">Targeted Student in SPM 2017</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="skill-section" id="skills">
        <div class="container">
            <div class="section_heading">
                <h2>SKILLS</h2>
            </div>

            <h6 class="skill-group-title">Frontend</h6>
            <div class="skill-pill-group">
                <span class="skill-pill">CSS</span>
                <span class="skill-pill">Tailwind CSS</span>
                <span class="skill-pill">JavaScript & jQuery</span>
                <span class="skill-pill">React</span>
                <span class="skill-pill">Vue.js</span>
                <span class="skill-pill">SASS</span>
            </div>

            <h6 class="skill-group-title">Backend</h6>
            <div class="skill-pill-group">
                <span class="skill-pill">PHP</span>
                <span class="skill-pill">Node.js</span>
                <span class="skill-pill">Express</span>
                <span class="skill-pill">Python</span>
                <span class="skill-pill">REST API</span>
                <span class="skill-pill">WebSocket</span>
                <span class="skill-pill">WhatsApp API</span>
            </div>

            <h6 class="skill-group-title">Framework</h6>
            <div class="skill-pill-group">
                <span class="skill-pill">Laravel</span>
                <span class="skill-pill">Livewire</span>
                <span class="skill-pill">OutSystems</span>
                <span class="skill-pill">Spring Boot</span>
            </div>

            <h6 class="skill-group-title">Database</h6>
            <div class="skill-pill-group">
                <span class="skill-pill">MySQL</span>
                <span class="skill-pill">SQL Server</span>
                <span class="skill-pill">MongoDB</span>
                <span class="skill-pill">Redis</span>
            </div>

            <h6 class="skill-group-title">Tools</h6>
            <div class="skill-pill-group">
                <span class="skill-pill">Docker</span>
                <span class="skill-pill">Git</span>
                <span class="skill-pill">GitHub</span>
                <span class="skill-pill">GitLab</span>
                <span class="skill-pill">VS Code</span>
                <span class="skill-pill">Postman</span>
            </div>

            <h6 class="skill-group-title">Language</h6>
            <div class="skill-grid">
                <div class="skill-card">
                    <h4 class="small font-weight-bold">MALAY<span class="float-right">100%</span></h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="skill-card">
                    <h4 class="small font-weight-bold">ENGLISH<span class="float-right">70%</span></h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%"
                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WORK EXPERIENCES -->
    <section class="experience-section" id="experience">
        <div class="container">
            <div class="section_heading">
                <h2>EXPERIENCES</h2>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date-badge">December 2025 - Present</span>
                        <h5 class="card-title">PHP Developer</h5>
                        <p class="card-text">DBT Technologies Sdn. Bhd., Kuala Lumpur</p>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">Diagnosed and resolved system bugs and issues.</li>
                            <li class="list-group-item">Supported and maintained production systems.</li>
                            <li class="list-group-item">Developed new features per business needs.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date-badge">October 2024 - December 2025</span>
                        <h5 class="card-title">Programmer</h5>
                        <p class="card-text">Digital Adage Sdn. Bhd., Damansara</p>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">Designed responsive layouts and UI/UX mockups.</li>
                            <li class="list-group-item">Enhanced wasep.me based on customer feedback.</li>
                            <li class="list-group-item">Tested and deployed code via Git (GitHub).</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date-badge">August 2023 - July 2024</span>
                        <h5 class="card-title">Protege GEES Human Resources Management</h5>
                        <p class="card-text">PETRONAS Chemicals Ethylene & Polyethylene Sdn. Bhd., Terengganu</p>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">Coordinated company events for over 500 staff.</li>
                            <li class="list-group-item">Built e-Parcel Notification System for tracking.</li>
                            <li class="list-group-item">Built e-Register Safety Briefing HSE system.</li>
                            <li class="list-group-item">Designed dashboards for monthly reporting.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date-badge">Sept 2022 - Jan 2023</span>
                        <h5 class="card-title">Information Technology Intern</h5>
                        <p class="card-text">Pande Media (M) Sdn. Bhd., Kelantan</p>
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item">Developed Learning Portal for 40+ clients.</li>
                            <li class="list-group-item">Added new features and fixed system issues.</li>
                            <li class="list-group-item">Boosted service productivity by 90%.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const typedRoles = ["Web Developer", "Data Enthusiast", "Lifelong Learner"];
        let typedRoleIndex = 0;
        let typedCharIndex = 0;
        let typedIsDeleting = false;

        function typeRole() {
            const el = document.getElementById("typed-role");
            const current = typedRoles[typedRoleIndex];
            let delay = typedIsDeleting ? 40 : 90;

            if (typedIsDeleting) {
                typedCharIndex--;
            } else {
                typedCharIndex++;
            }
            el.textContent = current.substring(0, typedCharIndex);

            if (!typedIsDeleting && typedCharIndex === current.length) {
                typedIsDeleting = true;
                delay = 1400;
            } else if (typedIsDeleting && typedCharIndex === 0) {
                typedIsDeleting = false;
                typedRoleIndex = (typedRoleIndex + 1) % typedRoles.length;
                delay = 300;
            }

            setTimeout(typeRole, delay);
        }

        typeRole();
    </script>
</body>

</html>

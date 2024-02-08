<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"> 
    <title>Airu Lab</title>
</head>

<body>

    <header class="header">
        <nav class="navbar">
            <a href="#"><img class="nav-logo" src="img/logo/logo.png" alt="logo"></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    {{-- <section class="section_blank">
    </section> --}}

    <main>
        <section class="work-detail-section">
            <div class="work-detail-container">
                <div class="work-detail_left">
                    <p>Portfolio</p>
                    <h3>Every Story<br>From My Works</h3>
                </div>
                <div class="work-detail_right">
                    <p>These experiences showcase my commitment to excellence, innovation, and leveraging technology for transformative solutions.
                    </p>
                    <a href="my-work-stories"><button class="story_btn btn">Collaborate<img class="icon-arrow" src="img/svg/arrow-right.svg"></button></a>
                </div>
            </div>
        </section>
    </main>

    <section>
        <div class="work-list-container">
            <div class="flex card-work-container">
                <a href="uat-flore-app" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/uat.webp" alt="image-card">
                        <h6>
                            User Acceptance Testing (UAT) Case Study on Flore App
                        </h6>
                        <p>
                            The Flore Recognition System is created to assist anyone who desires to learn more about flowers...
                        </p>
                        <div class="flex card-work-skills">
                            <p>User Acceptance Testing</p>
                            <p>Testing Plan</p>
                            <p>Testing Document</p>
                        </div>
                    </div>
                </a>

                <a href="building-an-application-supporting-sdgs-through-product-management" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/literaku.webp" alt="image-card">
                        <h6>
                            Building an App Supporting SDGs through Product Management
                        </h6>
                        <p>
                            The fourth goal of the Sustainable Development Goals (SDGs) emphasizes the importance of provid...
                        </p>
                        <div class="flex card-work-skills">
                            <p>Product Management</p>
                            <p>Data Analysis</p>
                            <p>User behaviour</p>
                            <p>SDLC Implementation</p>
                            <p>Product Documentation</p>
                        </div>
                    </div>
                </a>

                <a href="software-requirements-specification-srs-case-study-to-initiate-on-building-app" class="card-work-link">               
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/flore.webp" alt="image-card">
                        <h6>
                            Software Requirements Specification (SRS) Case Study To Initiate on Building an App
                        </h6>
                        <p>
                            Since there are thousands of different flower species throughout the world, flower recognition...
                        </p>
                        <div class="flex card-work-skills">
                            <p>SRS</p>
                            <p>PRD</p>
                            <p>Product Documentation</p>
                            <p>UML</p>
                            <p>System Architecture</p>
                            <p>Functional Requirements</p>
                            <p>Android (Java)</p>
                        </div>
                    </div>
                </a>

                {{-- <a href="#" class="card-work-link">
                    <div class="card-work" onclick="window.location='detail'">
                        <img class="card-work-img" src="img/activity/UiTM-2.jpg" alt="image-card">
                        <h6>
                            Gathering Data to Analyze User Behavior on Maya App
                        </h6>
                        <p>
                            Gathering and analyzing user behavior involves a structured process of collecting, organizing...
                        </p>
                        <div class="flex card-work-skills">
                            <p>UX Research</p>
                            <p>Design Thinking</p>
                        </div>
                    </div>
                </a> --}}

                <a href="flexibility-learning-management-system-through-ux-research" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/flexibility.webp" alt="image-card">
                        <h6>
                            Flexibility Learning Management System through UX Research
                        </h6>
                        <p>
                            Users who already have a job and are busy so learning time must be flexible. However, users...
                        </p>
                        <div class="flex card-work-skills">
                            <p>UX Research</p>
                            <p>Persona</p>
                            <p>Empathy Map</p>
                            <p>User Journey</p>
                            <p>Wireframe</p>
                        </div>
                    </div>
                </a>

                
                <a href="ux-camera-system-for-culture-with-augmented-reality-technology" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/maya.webp" alt="image-card">
                        <h6>
                            UX Camera System for Culture with Augmented Reality Technology
                        </h6>
                        <p>
                            Nowadays, people, especially millennials, are less familiar with and proud of these traditional...
                        </p>
                        <div class="flex card-work-skills">
                            <p>UX Research</p>
                            <p>User Centered Design</p>
                            <p>Persona</p>
                            <p>Prototyping</p>
                        </div>
                    </div>
                </a>

                <a href="18th-csa-computer-science-anniversary-logo" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/csa.webp" alt="image-card">
                        <h6>
                            18th CSA - Computer Science Anniversary Logo
                        </h6>
                        <p>
                            CSA is an annual agenda of the Computer Science department. In 2019, it was held with the theme...
                        </p>
                        <div class="flex card-work-skills">
                            <p>Graphic Design</p>
                            <p>Philosophy</p>
                            <p>Adobe Illustrator</p>
                        </div>
                    </div>
                </a>

                <a href="think-before-you-believe-check-before-you-share-poster" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/hoax.webp" alt="image-card">
                        <h6>
                            "Think Before You Believe, Check Before You Share" Poster
                        </h6>
                        <p>
                            The poster is made in the form of infographics that present data, graphs, and illustrations to...
                        </p>
                        <div class="flex card-work-skills">
                            <p>Graphic Design</p>
                            <p>Philosophy</p>
                            <p>Adobe Illustrator</p>
                        </div>
                    </div>
                </a>


                <a href="https://play.google.com/store/apps/details?id=io.kodular.khairul_imam.Table_Manner" target="_blank" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/kodular.webp" alt="image-card">
                        <h6>
                            E-Modul Tata Hidang Android Development
                        </h6>
                        <p>
                            The E-Module Application for Cooking is an electronic module specifically for learning Cooking...
                        </p>
                        <div class="flex card-work-skills">
                            <p>Mobile Development</p>
                            <p>Functional Requirements</p>
                        </div>
                    </div>
                </a>

                <a href="https://www.sribudayaresort.com" target="_blank" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/sribudaya.webp" alt="image-card">
                        <h6>
                            Sribudaya Resort Company Profile Website
                        </h6>
                        <p>
                            Sribudaya Resort and Homestay is located near the beach and in the center of town. Our resort...
                        </p>
                        <div class="flex card-work-skills">
                            <p>Website Development</p>
                            <p>Functional Requirements</p>
                        </div>
                    </div>
                </a>


                <a href="https://www.sribudayaresort.com" target="_blank" class="card-work-link">
                    <div class="card-work">
                        <img class="card-work-img" src="img/work/icon/sman2.webp" alt="image-card">
                        <h6>
                            SMA Negeri 2 Medan Profile and Portal Website
                        </h6>
                        <p>
                            Education is a long-term investment whose results cannot be seen and felt instantly, so that...
                        </p>
                        <div class="flex card-work-skills">
                            <p>Website Development</p>
                            <p>Database Modelling</p>
                            <p>UI/UX Design</p>
                            <p>Project Management</p>
                        </div>
                    </div>
                </a>



            </div>
        </div>
    </section>



    <section class="section-collaborate">
        <div class="container">
            <div class="flex collaborate-wrapper">
                <div data-aos="fade-right" class="collaborate_left">
                    <h4>Unlock your<br>
                        business’s full<br>
                        potential. Now.
                    </h4>
                </div>
                <div data-aos="fade-right" data-aos-delay="250" class="collaborate_right">
                    <a href="#">
                        <button class="achievements_btn btn">
                            Collaborate
                            <img class="icon-arrow" src="img/svg/arrow-right-white.svg"></button>
                    </a>
                    <a class="contact-link contact-number" href="https://wa.me/6281281631376" target=”_blank”>+62 812 8163 1376</a>
                    <a class="contact-link" href="mailto:khairulimamofficial@gmail.com" target=”_blank”>khairulimamofficial@gmail.com</a>
                    <a class="contact-link" href="https://www.linkedin.com/in/khairul-imam" target=”_blank”>linkedin.com/in/khairul-imam</a>
                </div>
            </div>
        </div>
    </section>

</body>
<footer>
    <div class="container">
        <div data-aos="fade-right">
            <p class="footer_top">These experiences showcase my commitment to excellence, innovation, and leveraging technology for transformative solutions.
            </p>
        </div>
        <div class="flex footer-wrapper">
            <p class="footer_bottom">Made by</p>
            <img src="img/logo/logo.png" alt="logo" width="80px">
            <p class="footer_bottom">using PHP Laravel</p>
        </div>
    </div>
</footer>

<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000
  });
</script>

</html>
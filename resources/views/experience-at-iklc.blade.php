<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"> 
    <title>Activity</title>
</head>

<body>

    <header class="header">
        <nav class="navbar">
            <a href="../"><img class="nav-logo" src="img/logo/logo.png" alt="logo"></a>
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

    <main>

        <section class="section-detail-work">
            <div class="container">
                <div>
                    <h3>My approach to giving feedback at IKLC</h3>
                </div>
                <div class="flex detail-flex">
                    <div class="detail-flex-item">
                        <p class="detail-flex-title">Information</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Date:</p>
                        <p class="detail-flex-desc">24 January 2024</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Skills:</p>
                        <p class="detail-flex-desc">Teaching, Evaluation Method, Presentation, Speaking
                        </p>
                    </div>

                </div>
            </div>           
        </section>

        <section>
            <div class="container">
                <div class="work-description">

                    {{-- <div>
                        <h4>A. Introduction</h4>
                    </div> --}}
                    <div>
                        {{-- <h6>About Project</h6> --}}
                        
                        <p>
                            In January 2021, a pandemic forced me to teach virtually in my first position as a laboratory instructor at Ilmu Komputer Laboratory Center (IKLC USU). I gained from my experience as a student, all I needed to my progress learning was to have direct feedback on my assignments. From that point on, I made a commitment to consistently provide feedback to my students. This was my approach:
                        </p>
                        <p><b>
                            1. A day before class</b>
                        </p>
                        <p>
                            I put comments on each of their works on Google Classroom. I believe everyone has varying capabilities and different mistakes. I refuse to let the one who has fallen behind remain in their current position, and the one with potential will not cease to strive for more.
                        </p>   
                        <p> <b>
                            2. 15 minutes before class</b>
                        </p>
                        <p>
                            I decided which assignment was on the right path and who had made a misstep, without taking their identity into account. Then, I prepared to start the class by opening the students' works on my screen.
                        </p>   
                        <p><b>
                            3. First 15 minutes </b>
                        </p>
                        <p>
                            I started to present the representative assignments for 10 minutes. I guided them in performing the task correctly and highlighted errors in certain aspects. At the end, I opened for discussion for 5 minutes.
                        </p>
                        <p>    
                            The result of this approach rewarded me. I can confidently state that a significant portion of the class submitted exceptional projects by the end of the semester. Some others also put extra effort to be outstanding. Additionally, this was also shown by positive anonymous messages that were sent to me on a platform that I provided.
                        </p>
                        <p> 
                            “Feedback shows you care”
                        </p>
                        <br>
                        <p>#Commenting on Google Classroom</p>
                        <img class="work-detail-img" src="https://media.licdn.com/dms/image/D5622AQFK_saPDRP7wA/feedshare-shrink_2048_1536/0/1706438241983?e=1709769600&v=beta&t=sO22MsqAM9YFi3nKUubBJhxhU1g4JClQM4wBVtMDvT0" alt="foto-group">
                        <p>#Class Session</p>
                        <img class="work-detail-img" src="https://media.licdn.com/dms/image/D5622AQE6Ab6nGcYqIw/feedshare-shrink_2048_1536/0/1706438239901?e=1709769600&v=beta&t=GofRvRUaOCCmczaFpr7fS9cA4yyUOJAXLlpSj8jE4-Y" alt="foto-group">
                        <p>#Me & Team</p>
                        <img class="work-detail-img" src="https://media.licdn.com/dms/image/D5622AQEtQQPel8zX4A/feedshare-shrink_2048_1536/0/1706438249390?e=1709769600&v=beta&t=U-aDnpLxv4vb-l_TUt1MXAeuLKdNrkORgQaC5LadImM" alt="foto-group">
                    </div>
                    
                </div>
            </div>
        </section>


    </main>

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
                    <a class="contact-link contact-number" href="contact-number">+62 812 8163 1376</a>
                    <a class="contact-link" href="contact-number">khairulimamofficial@gmail.com</a>
                    <a class="contact-link" href="contact-number">linkedin.com/in/khairul-imam</a>
                </div>
            </div>
        </div>
    </section>

</body>
<footer>
    <div class="container">
        <div data-aos="fade-right">
            <p class="footer_top">My hands-on experience, technical proficiency, and
                dedication to providing exceptional end-user support
                align well with your organization's goals.
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
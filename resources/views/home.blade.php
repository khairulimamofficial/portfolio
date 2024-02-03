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

    <main>
        <section>
            <div class="flex">
                <div class="left-side">
                    <div>
                        <h3 data-aos="fade-right" class="full-name">
                            Hi!<br>I'm Khairul Imam
                        </h3>
                        <h5 data-aos="fade-right" data-aos-delay="200" class="title-name">
                            Founder & CTO of Literaku
                        </h5>
                        <h5 data-aos="fade-right" data-aos-delay="200" class="title-name">
                            Freelancer
                        </h5>
                    </div>
                    <div>
                        <h4 data-aos="fade-right" data-aos-delay="300" class="skill-name">
                            Business & Product
                        </h4>
                        <p data-aos="fade-right" data-aos-delay="400" class="skill-description">
                            My expertise lies in formulating inventive approaches to 
                            align technological progress with business solutions by 
                            analyzing target audience and market, 
                            identifying customer needs and market trends, 
                            and assessing competition.
                        </p>
                    </div>
                    <div data-aos="fade-right" data-aos-delay="400" class="hire-wrapper">
                        <a href="https://wa.me/6281281631376" target=”_blank”><button class="contact-btn btn">Hire Me!</button></a>
                        {{-- <a class="download-btn">Download Resume</a> --}}
                    </div>
                </div>
                <div class="right-side background-gray">
                    <img data-aos="fade-right" data-aos-delay="400" class="photo-profile" src="img/photos/my-photo.png" alt="photo-profile">
                </div>
            </div>
        </section>
    </main>

    <section>
        <div class="quote-container">
            <p data-aos="fade-right" class="quote">Never being <span class="highlight-yellow">competitor-focused</span> to doing something. Be Pioneer with <span class="highlight-yellow">customer-focused.</span></p>
            <p data-aos="fade-right" class="name-quote">Khairul Imam</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="logo-intro">
                <img src="img/logo/logo.png" alt="logo" width="180px">
            </div>
            <div class="flex intro-flex-wrapper">
                <div data-aos="fade-right" class="left-side-intro">
                    <h5 class="title-intro">
                        Professional Track Record
                    </h5>
                </div>
                <section class="right-side-intro">
                    <p data-aos="fade-left" class="headline">
                        Elevating Businesses through Analytical Excellence and Innovative Solutions.
                        
                    </p>
                    <p data-aos="fade-left" class="details">
                        In my freelance work, I am dedicated to delivering tailored business solutions, spanning from designing logos, posters, to web and mobile development projects.
                    </p>
                    <p data-aos="fade-left" class="details">
                        Concurrently, my 2+ years at Literaku and TestMate honed my expertise in business model development, competitor analysis, user behavior analysis, and securing millions funding from investors through financial management, while also involving leadership and Agile management. As the CEO of B2B TestMate, I led continuous incremental processes, resulting in increased market fit and user satisfaction, attracting schools to subscribe to our secure and analytical Computer Based Test (CBT) platform. 
                    </p>
                    <p data-aos="fade-left" class="details">
                        My 1.5+ years of experience as a Product Manager and QA Tester involved producing ERP system requirements, project documentation (eg. RFP, quotation, PRD, delivery and launching plan), and significantly improving website rankings from 29th to 12th through meticulous analysis and monitoring (eg. Publish and Perish, Ahrefs, and Google Analytics).
                    </p>
                    <div data-aos="fade-left" class="flex flex-shape">
                        <p class="headline-study">
                            Study at
                        </p> 
                        <div class="rectangular-box"></div>
                    </div>

                    <div class="flex">
                        <div data-aos="fade-left" data-aos-delay="150" class="card card-left" style="background-image: url('img/photos/USU.webp');">
                            <div class="card-content">
                                <p class="title-card-content">Bachelor of Computer Science at Universitas Sumatera Utara</p>
                            </div>
                        </div>
                        <div data-aos="fade-left" class="card" style="background-image: url('img/photos/UiTM.webp');">
                            <div class="card-content">
                                <p class="title-card-content">One-semester program at Universiti Teknologi MARA Malaysia</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


        </div>
    </section>



    <section class="section-experience">
        <div class="container">
            <div class="flex experiences-flex">
                <div data-aos="fade-right" class="experiences-flex_left">
                    <h4 class="experience_title">Work Experiences</h4>
                    
                </div>

                <div class="experiences-flex_right">
                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Chief Technology Officer</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/literaku.png" alt="logo"> --}}
                                <p class="item-experience-company">Literaku</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Dec 2022 - Present</p>
                            <p class="item-experience-duration">1 year 3 months</p>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Freelance</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/logo.png" alt="logo"> --}}
                                <p class="item-experience-company">AiruLab</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Jun 2020 - Present</p>
                            <p class="item-experience-duration">3 years 9 months</p>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Product Manager</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/iki-logo.png" alt="logo"> --}}
                                <p class="item-experience-company">Inovasi Karya Indonesia</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Nov 2023 - Jan 2024</p>
                            <p class="item-experience-duration">3 months</p>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Chief Executive Officer</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/testmate.png" alt="logo"> --}}
                                <p class="item-experience-company">TestMate</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Aug 2023 - Jan 2024</p>
                            <p class="item-experience-duration">6 months</p>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Part Time Quality Assurance Tester</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/usu.png" alt="logo"> --}}
                                <p class="item-experience-company">Directorate of Digitalization and System Integration</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Sep 2022 - Dec 2023</p>
                            <p class="item-experience-duration">1 year 4 months</p>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Laboratory Instructor</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/iklc-black.png" alt="logo"> --}}
                                <p class="item-experience-company">Ilmu Komputer Laboratory Center (IKLC USU)</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Jan 2021 - Jul 2023</p>
                            <p class="item-experience-duration">2 years 7 months</p>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Founder and Chief Executive Officer</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/literaku.png" alt="logo"> --}}
                                <p class="item-experience-company">Literaku</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Mar 2022 - Nov 2022</p>
                            <p class="item-experience-duration">9 months</p>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Administrative Assistant Ind4.0 Erasmus+ Programme</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/usu.png" alt="logo"> --}}
                                <p class="item-experience-company">Universitas Sumatera Utara</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Dec 2021 - Nov 2022</p>
                            <p class="item-experience-duration">1 year 10 months</p>
                        </div>
                    </div>

                    <div data-aos="fade-left" class="flex item-experience">
                        <div class="flex item-experience_left">
                            <p class="item-experience-title">Administrative Assistant United Erasmus+ Programme</p>
                            <div class="flex item-experience-role">
                                {{-- <img class="item-experience-img" src="img/logo/usu.png" alt="logo"> --}}
                                <p class="item-experience-company">Universitas Sumatera Utara</p>
                            </div>                            
                        </div>
                        <div class="flex item-experience_right">
                            <p class="item-experience-date">Feb 2021 - Aug 2022</p>
                            <p class="item-experience-duration">1 year 7 months</p>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <a download href="file/Resume_Khairul_Imam.pdf"><button class="resume_btn btn">Download Resume<img class="icon-arrow" src="img/svg/arrow-right.svg"></button></a>
                    </div>
                    
                </div>
               
            </div>

            <div data-aos="fade-up" class="card-container flex">
                <div class="card-box">
                    <p class="title-number">
                        3+
                    </p>
                    <p>
                        Years of Experience
                    </p>
                </div>
                <div class="card-box color-fill">
                    <p class="title-number color-fill_text">
                        10+
                    </p>
                    <p class="color-fill_text">
                        Achievements
                    </p>
                </div>
                <div class="card-box">
                    <p class="title-number">
                        2
                    </p>
                    <p>
                        Publications
                    </p>
                </div>
            </div>


        </div>
    </section>





    <section class="section-work">
        <div class="container flex">
            <div data-aos="fade-up" class="section__left">
                <p class="title-section_sm">
                    Portfolio
                </p>
            </div>

            <div class="section__right">
                <div data-aos="fade-up" class="section-work_title flex">
                    <h4 class="title-section section-work__middle">
                        My Work <br><span class="highlight-yellow">Stories</span></h4>
                    <a href="#"><button class="story_btn btn">More Stories<img class="icon-arrow" src="img/svg/arrow-right.svg"></button></a>
                </div>
                <div class="section-work__desc">
                    <div class="flex-container-work">
                        <div data-aos="fade-right" class="flex flex-item-work-container">
                            <a class="flex flex-item-work-link" href="uat-flore-app">
                                <div class="flex-item-work">
                                    <h6 class="flex-item-work_title">
                                        User Acceptance Testing (UAT) Case Study on Flore App
                                    </h6>
                                    <p class="flex-item-work_desc">
                                        The Flore Recognition System is created to assist anyone who desires to learn more about flowers... 
                                    </p>
                                </div>                            
                                <img class="arrow-right-circle" src="img/svg/arrow-right-circle.svg">
                            </a>
                        </div>
                        <div data-aos="fade-right" class="flex flex-item-work-container">
                            <a class="flex flex-item-work-link" href="building-an-application-supporting-sdgs-through-product-management">    
                                <div class="flex-item-work">
                                    <h6 class="flex-item-work_title">
                                        Building an App Supporting SDGs through Product Management
                                    </h6>
                                    <p class="flex-item-work_desc">
                                        The fourth goal of the Sustainable Development Goals (SDGs) emphasizes the importance of provid...
                                    </p>
                                </div>                            
                                <img class="arrow-right-circle" src="img/svg/arrow-right-circle.svg">
                            </a>
                        </div>
                        <div data-aos="fade-right" class="flex flex-item-work-container">
                            <a class="flex flex-item-work-link" href="uat-flore-app">
                                <div class="flex-item-work">
                                    <h6 class="flex-item-work_title">
                                        Software Requirements Specification (SRS) Case Study To Initiate on Building an App
                                    </h6>
                                    <p class="flex-item-work_desc">
                                        Since there are thousands of different flower species throughout the world, flower recognition...
                                    </p>
                                </div>                            
                                <img class="arrow-right-circle" src="img/svg/arrow-right-circle.svg">
                            </a>
                        </div>
                        <div data-aos="fade-right" class="flex flex-item-work-container">
                            <a class="flex flex-item-work-link" href="uat-flore-app">
                                <div class="flex-item-work">
                                    <h6 class="flex-item-work_title">
                                        Gathering Data to Analyze User Behavior on Maya App
                                    </h6>
                                    <p class="flex-item-work_desc">
                                        Gathering and analyzing user behavior involves a structured process of collecting, organizing...
                                    </p>
                                </div>                            
                                <img class="arrow-right-circle" src="img/svg/arrow-right-circle.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <div class="section-service">
                <div data-aos="fade-up" class="section-service__top">
                    <h4 class="service-title">
                        Services
                    </h4>
                    <p>
                        My Top Skills
                    </p>
                </div>
                <div class="flex-container-service">
                    <div data-aos="fade-right" class="flex-item-service">
                        <h6 class="flex-item-service_title">
                            Business Analyst
                        </h6>
                        <p class="flex-item-service_desc">
                            Business Process Modeling, Data Analysis, Data modeling, PowerBI, UML, SQL, Agile Methodology, User Acceptance Testing (UAT), Asana, Elicitation
                        </p>
                    </div>
                    <div data-aos="fade-right" data-aos-delay="150" class="flex-item-service">
                        <h6 class="flex-item-service_title">
                            Product Management
                        </h6>
                        <p class="flex-item-service_desc">
                            Product Lifecycle Management, Market Analysis, Competitor Analysis, Prototyping and Wireframing, Trello, UX Design, Product Roadmapping, Risk Management
                        </p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-service">
                        <h6 class="flex-item-service_title">
                            Mobile & Web Development
                        </h6>
                        <p class="flex-item-service_desc">
                            Laravel, PHP, Javascript, Python, SQL, Java, Machine Learning, HTML, CSS, CMS, Kodular, OWL, Turtle, C#
                        </p>
                    </div>
                    <div data-aos="fade-right" data-aos-delay="150" class="flex-item-service">
                        <h6 class="flex-item-service_title">
                            UI/UX Design
                        </h6>
                        <p class="flex-item-service_desc">
                            UX Research, User Journey, UI Design, Prototyping, Usability Testing, Figma, Adobe Illustrator, Adobe Photoshop
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container ">
            <div class="section-achievements">
                <div data-aos="fade-up" class="section-achievements__top">
                    <h4 class="achievements-title">
                        Achievements
                    </h4>
                    <p>
                        Recognitions & Accomplishments
                    </p>
                </div>
                
                <div class="flex-container-achievements">
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                Silver award in art and creative industries on IMInE
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Universiti Teknologi MARA (UiTM)
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Business</p>
                        <p class="flex-item-achievements_year">2023</p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                Finalist of scientific paper in Pagelaran Mahasiswa Nasional TIK - GEMASTIK XV
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Diktiristek RI
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Artificial Intellegent</p>
                        <p class="flex-item-achievements_year">2022</p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                Finalist of Pekan Ilmiah Mahasiswa Nasional - PIMNAS 35
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Artificial Intellegent
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Business</p>
                        <p class="flex-item-achievements_year">2022</p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                Sariraya Japanhalal scholarship awardee 
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Sariraya Japan
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Education</p>
                        <p class="flex-item-achievements_year">2022</p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                3rd Winner of Essay National Competition at Math Revolution 2
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Himatika UNPAM
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Artificial Intellegent</p>
                        <p class="flex-item-achievements_year">2021</p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                Best Presenter in the most outstanding presentation at university level 
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Universitas Sumatera Utara
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Product</p>
                        <p class="flex-item-achievements_year">2021</p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                Green Campus Ambassador USU 
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Universitas Sumatera Utara
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Social</p>
                        <p class="flex-item-achievements_year">2020</p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                Finalist of UI/UX Design National Competition ITFEST 2020
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Universitas Sumatera Utara
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Design</p>
                        <p class="flex-item-achievements_year">2020</p>
                    </div>
                    <div data-aos="fade-right" class="flex-item-achievements flex flex-container-achievements__in">
                        <p class="number-box">1</p>
                        <div class="flex-item-achievement_wrapper">
                            <h6 class="flex-item-achievements_title">
                                1st Winner of Scientific Poster PsyGeneration 2.0 
                            </h6>
                            <p class="flex-item-achievements_desc">
                                Universitas Sumatera Utara
                            </p>
                        </div>
                        <p class="flex-item-achievements_category">Design</p>
                        <p class="flex-item-achievements_year">2019</p>
                    </div>
                </div>
                <div data-aos="fade-right" class="achievements-btn-wrapper">
                    <a href="#"><button class="achievements_btn btn">More Stories<img class="icon-arrow" src="img/svg/arrow-right-white.svg"></button></a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-testimonials">
        <div class="container testimonials-wrapper">
            <div data-aos="fade-right">
                <h4 class="testimonials-wrapper_title">Testimonials</h4>
            </div>
            <div class="flex testimonials-wrapper_bottom">
                <div data-aos="fade-right" class="testimonial-block">
                    <p>“My hands-on experience, technical proficiency,
                        and dedication to providing exceptional end-user
                        support align well with your organization's goals.”
                    </p>
                    <p class="testimonial-name">Dra. Nikmat Akmal, M.Pd.</p>
                    <p class="testimonial-title">Lecturer at Universitas Negeri Medan</p>
                </div>
                <div data-aos="fade-right" data-aos-delay="200" class="testimonial-block">
                    <p>“My hands-on experience, technical proficiency,
                        and dedication to providing exceptional end-user
                        support align well with your organization's goals.”
                    </p>
                    <p class="testimonial-name">Dra. Nikmat Akmal, M.Pd.</p>
                    <p class="testimonial-title">Lecturer at Universitas Negeri Medan</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section-work">
        <div class="container flex">
            <div data-aos="fade-up" class="section__left">
                <p class="title-section_sm">
                    Event
                </p>
            </div>

            <div class="section__right">
                <div data-aos="fade-up" class="section-work_title flex">
                    <h4 class="title-section section-work__middle">
                       Track <br><span class="highlight-yellow">My Activities</span></h4>
                    <a href="#"><button class="story_btn btn">More Events<img class="icon-arrow" src="img/svg/arrow-right.svg"></button></a>
                </div>
                
                <div class="section-work__desc">
                    <div class="flex-container-event">
                        <a href="experience-at-iklc">
                            <div data-aos="fade-right" class="flex-item-event">
                                <img class="flex-item-event__img" src="https://media.licdn.com/dms/image/D5622AQEtQQPel8zX4A/feedshare-shrink_2048_1536/0/1706438249390?e=1709769600&v=beta&t=U-aDnpLxv4vb-l_TUt1MXAeuLKdNrkORgQaC5LadImM" alt="sample">
                                <h6 class="flex-item-event_title">
                                    My approach to giving feedback at IKLC
                                </h6>

                                <p class="flex-item-event_desc">
                                    In January 2021, a pandemic forced me to teach virtually in my first position as a laboratory instructor laboratory inst...
                                </p>
                                <p class="flex-item-event_date">
                                    27 JAN 2024
                                </p>
                            </div>
                        </a>
                        <a href="experience-at-iklc">
                            <div data-aos="fade-right" data-aos-delay="150" class="flex-item-event">
                                <img class="flex-item-event__img" src="img/photos/sample.jpg" alt="sample">
                                <h6 class="flex-item-event_title">
                                    My hands-on experience, technical proficiency, and dedication
                                </h6>

                                <p class="flex-item-event_desc">
                                    My hands-on experience, technical proficiency, and dedication My hands-on experience, technical proficiency, and dedication
                                </p>
                                <p class="flex-item-event_date">
                                    27 JAN 2024
                                </p>
                            </div>
                        </a>
                        <a href="experience-at-iklc">
                            <div data-aos="fade-right" data-aos-delay="350" class="flex-item-event">
                                <img class="flex-item-event__img" src="img/photos/sample.jpg" alt="sample">
                                <h6 class="flex-item-event_title">
                                    My hands-on experience, technical proficiency, and dedication
                                </h6>

                                <p class="flex-item-event_desc">
                                    My hands-on experience, technical proficiency, and dedication My hands-on experience, technical proficiency, and dedication
                                </p>
                                <p class="flex-item-event_date">
                                    27 JAN 2024
                                </p>
                            </div>
                        </a>

                    </div>
                </div>
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
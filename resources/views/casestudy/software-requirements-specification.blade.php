<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"> 
    <title>Case Study</title>
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
                    <h3>Software Requirements Specification (SRS) Case Study To Initiate on Building an App</h3>
                </div>
                <div class="flex detail-flex">
                    <div class="detail-flex-item">
                        <p class="detail-flex-title">Information</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Project Name:</p>
                        <p class="detail-flex-desc">Flore Application</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Category:</p>
                        <p class="detail-flex-desc">Product Management</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Client:</p>
                        <p class="detail-flex-desc">N/A</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Date:</p>
                        <p class="detail-flex-desc">July 2023</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Skills:</p>
                        <p class="detail-flex-desc">SRS, PRD, Product Documentation, UML, System Architecture, Functional Requirements, Android (Java)
                        </p>
                    </div>

                </div>
            </div>           
        </section>

        <section>
            <div class="container">
                <div class="work-description">

                    <div>
                        <h4>Introduction</h4>
                    </div>
                    <div>
                        <p>Since there are thousands of different flower species throughout the world, flower recognition is an extremely difficult problem. It's a labor-intensive and time-consuming task that has primarily been completed by botanists. While individuals frequently use cameras and mobile phones in daily life to photograph flowers, they occasionally become perplexed by the type of flower they are photographing. As a result, it is essential for botany to design an automatic flower recognition system because it will make people's lives so much more enjoyable. The main goal is to educate the community about flowers. Flore's attempt to classify flowers typically relied on characteristics like color, texture, or shape. The model can be trained using these traits in order to make it capable of later identifying an unknown bloom.</p>
                    </div>
                    <div>
                        <p>A short overview of each section of the document is provided below.</p>
                    </div>

                    <div>
                        <ul class="work-description-desc-list">
                            <li><b>Part 1 (Introduction)</b><p>This segment provides an overview of the Flore, outlining its goals and scope, general system information, and some significant platform-related constraints.</p></li>
                            <li><b>Part 2 (Overall Description)</b><p>Classification by class is described in this segment, as well as the product perspective, class structures, operating environment, and restrictions on design and execution.</p></li>
                            <li><b>Part 3 (External Interfaces Requirements)</b><p>The whole construction of the Graphical User Interface (GUI), including its hardware, software, and communication interfaces, is covered in this segment. This segment provides readers with a sneak preview of the finished article.</p></li>
                            <li><b>Part 4 (Systems Features)</b><p>The use case specifications and flow pattern used by the system are covered in this part, which users should reference if they are interested in the functional requirements of FLORE.</p></li>
                            <li><b>Part 5 (Other Non-functional Requirements)</b><p>The non-functional requirements of Flore application, a collection of specifications that outline the system's operational capabilities and limitations and seek to enhance its functionality, are covered in this segment.</p></li>
                            <li><b>Part 6 (Appendices)</b><p>Any additional information on Flore application that might be useful to readers is included in this segment of the document.</p></li>
                        </ul>
                    </div>

                    <div>
                        <h4>Product Perspective</h4>
                    </div>
                    <div>
                        <p>Flore is the acronym for Flower Recognition. Flore is a mobile-based flower recognition and identification application through object detection methods. The main challenge for humans is to recognize the name of the flower, even in normal ways like searching on the internet using search engines and search keywords are not efficient, time consuming, and without a definite result. Flore solves this challenge by providing an artificial intelligence system of flower recognition with object detection method emmbeded in application. The application enables users to track and take a picture of the flower by Android camera in real-time. The application provides a dictionary feature that contains information of various flowers to educate and acknowledge the user. As well as the community, the Flore community can share their experience through the application to express their experience using the application.</p>
                    </div>

                    <div>
                        <h4>Product Scope</h4>
                    </div>
                    <div>
                        <p>The primary purpose of Flore applications is to classify various kinds of flowers by looking at their photographs. Users mostly download and utilize the app for this function. Secondary but still crucial components of the app include other features like presenting details about the flower's species, name, characteristics, habitat, and care recommendations.</p>
                        
                        <p>Users can receive a continuous stream of fresh flowers and details about them due to the feature feed in Flore applications. Based on the user's choices and interests, the feed may be tailored. The software may analyze the user's search history and make suggestions for new flowers based on machine learning techniques. Updates from the app creator, such as new features, bug patches, and other announcements, may also be included in the feed. By like, commenting, and exchanging flowers with other users, users may engage with the stream. The feed feature encourages users to keep using the app and keeps them interested in it.
                        </p>
                    </div>

                    <div>
                        <h4>Product Functions</h4>
                    </div>
                    <div>
                        <ul class="work-description-desc-list">
                            <li>New user able to register a new account</li>
                            <li>Registered user able to sign in as community of Flore</li>
                            <li>Administrator able to control registered accounts</li>
                            <li>All users able to get real-time flower recognition or a photo from gallery and display the information of the flower</li>
                            <li>Application provides various type of flower information in detail</li>
                            <li>Application provides dashboard Administrator to manage dictionary items</li>
                            <li>Flore Community able to save and remove the taken picture from camera</li>
                            <li>Flore Community able to add a post and their experience from flower that was taken from their surroundings</li>
                            <li>Flore Community able to organize their post</li>
                            <li>Administrator able to control community feed due to any restrictions and regulations.</li>
                        </ul>
                    </div>

                    <div>
                        <p>The complete document can be accessed below:
                        </p>
                        <iframe src= 
                        "http://localhost:3000/file\SRS Group 3 - Flore Recognition.pdf" 
                                        width="100%"
                                        height="500"> 
                                </iframe>
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
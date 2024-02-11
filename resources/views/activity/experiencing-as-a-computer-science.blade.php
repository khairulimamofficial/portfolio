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

    @include('components/navbar')

    <main>

        <section class="section-detail-work">
            <div class="container">
                <div>
                    <h3>Experiencing as a Computer Science student at UiTM Malaysia
                    </h3>
                </div>
                <div class="flex detail-flex">
                    <div class="detail-flex-item">
                        <p class="detail-flex-title">Information</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Date:</p>
                        <p class="detail-flex-desc">3 Agustus 2023</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Skills:</p>
                        <p class="detail-flex-desc">Software Engineering, Product Documentation, Design Documentation, Testing Report, Android Development
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
                        <br>
                        <img class="work-detail-img" src="img/activity/UiTM-3.jpg" alt="foto-group">
                        <i>Photo: Class Session</i>
                        <p>
                            From March to August, I gained an opportunity to have a one-semester program at one of the renowned universities - Universiti Teknologi MARA (UiTM) at Shah Alam, Malaysia. The program I had was computer science.
                        </p>

                        <p>
                            One memorable project focused on creating a product application. It all began with understanding what it means to be a software engineer and how to put our ideas into action. Then, we were implementing methodology until presenting our product with a good presentation supported by relevant documents about the product. The key to our project's success was good documentation. The documents produced were System Requirements Specification, System Design Documentation, Test Requirements Document, and the artificial intelligent application within 5 months. Inside the documents, there were many must-have aspects. For instance, the creation of UML, activity diagram, architecture system, interface, prototyping, and testing plan for real users with test cases. In the end, we presented our work, and it felt great to see how everything came together.
                        </p>   
                        <p>
                            As I reflect on my time at UiTM Malaysia, I am grateful for the opportunity for lessons learned and experiences gained during this semester have significantly shaped my perspective, leaving me better prepared to tackle the challenges that lie ahead in my future endeavors within the field.
                        </p>
                        
                        <br>
                        
                        <img class="work-detail-img" src="img/activity/UiTM-2.jpg" alt="foto-group">
                        <i>Photo: Certificate Awarding</i>

                        <img class="work-detail-img" src="img/activity/UiTM.jpg" alt="foto-group">
                        <i>Photo: Joining University Program</i>
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

    @include('components.collaborate')

</body>

    @include('components.footer')

<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000
  });
</script>

</html>
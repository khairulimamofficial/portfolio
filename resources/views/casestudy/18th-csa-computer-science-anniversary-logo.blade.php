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

    @include('components/navbar')

    <main>

        <section class="section-detail-work">
            <div class="container">
                <div>
                    <h3>18th CSA - Computer Science Anniversary Logo</h3>
                </div>
                <div class="flex detail-flex">
                    <div class="detail-flex-item">
                        <p class="detail-flex-title">Information</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Project Name:</p>
                        <p class="detail-flex-desc">18th CSA - Computer Science Anniversary</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Category:</p>
                        <p class="detail-flex-desc">Graphic Design</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Client:</p>
                        <p class="detail-flex-desc">Ilmu Komputer USU</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Date:</p>
                        <p class="detail-flex-desc">November 2019</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Skills:</p>
                        <p class="detail-flex-desc">Graphic Design, Philosophy, Adobe Illustrator
                        </p>
                    </div>

                </div>
            </div>           
        </section>

        <section>
            <div class="container">
                <div class="work-description">

                    <div>
                        <br><br>
                        <img class="work-detail-img" src="img/work/csa/logo.webp" alt="uat-roles">
                        <h4>Introduction</h4>
                    </div>
                    <div>
                        <p>CSA is an annual agenda of the Computer Science department. In 2019, it was held with the theme "All About Our Moments" with the concept of autumn.</p>
                        <img class="work-detail-img" src="img/work/csa/2.webp" alt="uat-roles">
                        <p>The poster I designed that was used to promote the competition at the CSA event.</p>
                        <img class="work-detail-img" src="img/work/csa/3.webp" alt="uat-roles">
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
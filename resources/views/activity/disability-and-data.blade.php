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
                    <h3>Disability and Data in Literaku at SLBA YAPENTRA</h3>
                </div>
                <div class="flex detail-flex">
                    <div class="detail-flex-item">
                        <p class="detail-flex-title">Information</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Date:</p>
                        <p class="detail-flex-desc">20 January 2024</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Skills:</p>
                        <p class="detail-flex-desc">Collecting Data, Data Analysis, User Behivour, UX Research, Trainer
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
                        <img class="work-detail-img" src="img/activity/Sosialisasi-2.jpg" alt="foto-group">
                        <p>
                            On January 20th, Literaku was promoted to one selected school at SLBA YAPENTRA Tanjung Morawa, marking a milestone for the Indonesian-language literacy application. The event's primary goals were to provide application training for Literaku and collect valuable data to analyze additional needs and enrich the dataset, including common command words used by the disability community. This data-driven approach aims to improve the user experience of the app based on real user feedback.
                        </p>
                        <p>During the opportunity, I was presenting the era of Society 5.0, emphasizing the importance of data in developing excellent products. As an opening statement, the recent high-end technologies used for disability schools were highlighted, such as Google's latest version of Envision, an assistive glass technology for blind people. Despite the high cost, Google covered the expenses for the development and research, ultimately leading to the creation of a suitable product.
                        </p>
                        <p>
                            The event showcased the potential of data-driven innovation in education and accessibility. By collecting and analyzing data, Literaku can better understand the needs of its users and develop its application to provide a more personalized and effective learning experience. This approach aligns with the principles of Society 5.0, which emphasizes the use of data and technology to create a more inclusive and sustainable society.
                        </p>   
                        
                        <br>
                        <img class="work-detail-img" src="img/activity/Sosialisasi-1.jpg" alt="foto-group">
                        <i>Photo: Live training with the students</i>
                        
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
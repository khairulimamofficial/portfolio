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
                    <h3>Interactive Web-based Scrabble Game</h3>
                </div>
                <div class="flex detail-flex">
                    <div class="detail-flex-item">
                        <p class="detail-flex-title">Information</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Project Name:</p>
                        <p class="detail-flex-desc">Scrabble Game</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Category:</p>
                        <p class="detail-flex-desc">Website Development</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Client:</p>
                        <p class="detail-flex-desc">N/A</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Date:</p>
                        <p class="detail-flex-desc">July 2022</p>
                    </div>
                    <div class="flex detail-flex-item">
                        <p class="detail-flex-title">Skills:</p>
                        <p class="detail-flex-desc">PHP, Javascript, CSS, Logical Thinking, Dictionary 
                        </p>
                    </div>

                </div>
            </div>           
        </section>

        <section>
            <div class="container">
                <div class="work-description">

                    <br><br>
                    <div>
                        <h6>About Project</h6>
                        <p>Language is an important aspect of human life. Language is used to interact with other humans, obtain and share information. However, language differences between countries make it challenging to communicate with people from different countries. Thus, foreign language education is important to facilitate the communication process.
                        </p>
                        <p>One of the providers of foreign language education is formal education which has been taught since childhood. However, thanks to the advancement of the technological era, foreign language education can be obtained from various sources on the internet.  Technology-based learning media are more attractive to students because it improves their learning outcomes (Khaira, 2021).
                        </p>
                        <p>attractive learning media can be realized through the game. Scrabble is a word game that requires memorizing vocabulary in a certain language. This game will be played by one to four players by placing the tiles, each bearing a single letter, onto a virtual game board divided into a 15×15 grid of squares. The tiles must form words that, in crossword fashion, read left to right in rows or downward in columns, and be included in a standard dictionary or lexicon (Onasanya, 2021).
                        </p>
                    </div>
                    <div>
                        <h6>Problem Statement</h6>
                        <p>The great opportunity for the application of scrabble games for foreign language education is not matched by a good application interface. Some providers of web-based scrabble games do not consider good user interface and user experience, thus confusing users. 
                            </p>
                    </div>
                    <div>
                        <h6>Objectives</h6>
                        <p>In order to answer the problem statement above, the author offers (game name) as a web-based scrabble game that aims to improve attractiveness and interface quality. These objectives include:</p>
                        <ol class="work-description-desc-list-number">
                            <li>Augmented Reality feature on the camera in the form of traditional clothing</li>
                            <li>Stickers with personal characters wearing traditional clothing</li>
                        </ol>
                    </div>

                    <div>
                        <h6>Target Users</h6>
                        <img class="work-detail-img" src="img/work/scrabble/persona.webp" alt="test-case">
                        <p>This game targets high school students who have persona like this
                            following user persona. High school students are able to understand the complex
                            rule of the scrabble game. In addition, many high schools start a competition of
                            this game to challenge student vocabularies knowledge.</p>
                        
                    </div>


                    <div>
                        <h6>Result</h6>
                        <p><a href="https://github.com/raflyritonga/Scrabble-Game"><b>-> Visit GitHub</b></a></p>
                        <p><a href="https://www.figma.com/proto/tOhE7mQFX3KZkoU6yXTBOz/Scrabble-UiTM?type=design&node-id=5-241&scaling=scale-down-width&page-id=0%3A1&starting-point-node-id=5%3A241"><b>-> Visit Figma Design</b></a></p>
                                            
                        <img class="work-detail-img" src="img/work/scrabble/home page.webp" alt="test-case">
                        <img class="work-detail-img" src="img/work/scrabble/tutorial page.webp" alt="test-case">
                        <img class="work-detail-img" src="img/work/scrabble/status page.webp" alt="test-case">
                        <img class="work-detail-img" src="img/work/scrabble/gameplay page.webp" alt="test-case">


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
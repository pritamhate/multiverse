<?php include('header.php');?>
<link rel="stylesheet" href="assets/css/electro.css" >
<link rel="stylesheet" href="assets/vendor/owl.carousel.min.css" >
<link rel="stylesheet" href="assets/vendor/owl.theme.default.min.css" >


<div id="content-mobile">
    <!-- Sticky header -->
    <div class="stickyHeader">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand smallLogo">
                    <img src="assets/images/spiderman-no-way-home-small.png" class="img-fluid" alt="">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#quiz" class="nav-item nav-link">START QUIZ</a>
                        <a href="#prizes" class="nav-item nav-link">PRIZES</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sticky header -->

    <!-- Banner -->
    <section class="bannerWrapper" style="background-image: url('assets/images/electro/electro-banner.jpg');">
        <div class="bannerContent electroBannerText text-center">
            <h2 class="text-uppercase"><span>Welcome to <span>ELECTROverse. </h2>
            <p class="white">Swing, web, kick, punch - when you're as fast as lightning nothing misses your aim.</p>
            <p class="electro_blue">And with millions of volts, certainly not Spider-Man.</p>
            <p class="white">Can you survive his universe and travel <br>to the next? <small>Answer the quiz and taP into the multiverse that exists on your phone.</small></p>

            <a href="#quiz" class="startQuizBtn">START QUIZ</a>
        </div>

        
    </section>
    <!-- Banner -->

    <!-- Quiz -->
    <section class="quizWrapper electro" id="quiz">

        <!-- quiz slider -->
        <div class="quizSlider">
            <!-- Progressbar -->
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <h3>WHAT IS ELECTRO'S REAL NAME?</h3>

                    <div class="options">
                        <label for="" class="label">
                            MAXWELL "MAX" DILLON
                            <input type="radio" name="one">
                        </label>

                        <label for="" class="label">
                            MITCHELLE "WAX" JOHNSON
                            <input type="radio" name="one">
                        </label>

                        <label for="" class="label">
                            MARTIN "MAC" O'CONNOLLY
                            <input type="radio" name="one">
                        </label>
                    </div>
                </div>
                <div class="item">
                    <h3>WHEN DID ELECTRO'S CHARACTER FIRST APPEAR IN THE SPIDER-MAN UNIVERSE?</h3>

                    <div class="options">
                        <label for="" class="label">
                            1984
                            <input type="radio" name="two">
                        </label>

                        <label for="" class="label">
                            1964
                            <input type="radio" name="two">
                        </label>

                        <label for="" class="label">
                            1944
                            <input type="radio" name="two">
                        </label>
                    </div>
                </div>
                <div class="item">
                    <h3>HOW DID ELECTRO GET HIS POWERS?</h3>

                    <div class="options" >
                        <label for="" class="label">
                            FROM A WALL-SOCKET, <br> HOLDING THE TOASTER
                            <input type="radio" name="three">
                        </label>

                        <label for="" class="label">
                            A POWERBANK, HOLDING<br> A USB-C WIRE
                            <input type="radio" name="three">
                        </label>

                        <label for="" class="label">
                            STRUCK BY LIGHTHNING WHILE HOLDING LIVE, HIGH-TENTION WIRES
                            <input type="radio" name="three">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- quiz slider -->

    </section>
    <!-- Quiz -->

    <!-- Prizes -->
    <section class="prizesWrapper electro" id="prizes">
        <a href="#prizes" class="prizesBtn">PRIZES</a>

        <div class="thunder"></div>
        <div class="prizesContent text-center">
            <h2>Travel to all 3 universes and stand a chance to win </h2>
            <img src="assets/images/electro/electro-prises.png" class="img-fluid" alt="">
            <p>Tickets to Spider-Man : No Way Home    and amazing merchandise!</p>

            <a href="#">T&C*</a>
        </div>
    </section>
    <!-- Prizes -->
</div>

<?php include('footer.php');?>
<script src="assets/vendor/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop:false,
            autoplay: false,
            margin:10,
            nav:false,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });

        var owl = $('.owl-carousel');

        // Go to the next item
        $('.label').click(function() {
            owl.trigger('next.owl.carousel');
        });
    });
</script>
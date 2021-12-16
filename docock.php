<?php include('header.php');?>
<link rel="stylesheet" href="assets/css/docock.css" >
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
    <section class="bannerWrapper">
        <div class="bannerContent docockBannerText text-center">
            <div class="row">
                <img src="assets/images/docock/docock.png" class="img-fluid" alt="">
            </div>

            <h2 class="text-uppercase"><span>Welcome to <span>OCTOVERSE. </h2>
            <p class="white">What do you get when you take a mad genius with an interest in robotics and put HIM in another universe ? </p>
            <p class="dococ_red">One Spidey in trouble. </p>
            <p class="white">Can you survive his universe and travel <br>to the next? <small>Answer the quiz and taP into the multiverse that exists on your phone.</small></p>

            <a href="#quiz" class="startQuizBtn">START QUIZ</a>
        </div>

        
    </section>
    <!-- Banner -->

    <!-- Quiz -->
    <section class="quizWrapper docock" id="quiz">
        <!-- Progressbar -->
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- quiz slider -->
        <div class="quizSlider">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <h3>IN WHICH MOVIE DID DR. OCK FIRST APPEAR?</h3>

                    <div class="options">
                        <label for="" class="label">
                            SPIDER-MAN: FAR FROM HOME
                            <input type="radio" name="one">
                        </label>

                        <label for="" class="label">
                            SPIDER-MAN 3
                            <input type="radio" name="one">
                        </label>

                        <label for="" class="label">
                            SPIDER-MAN 2
                            <input type="radio" name="one">
                        </label>
                    </div>
                </div>
                <div class="item">
                    <h3>HOW DID DR. OCK GET HIS POWERS?</h3>

                    <div class="options">
                        <label for="" class="label">
                            BIO-MECHANICAL SURGERY
                            <input type="radio" name="two">
                        </label>

                        <label for="" class="label">
                            RADIATION LEAK EXPLOSION THAT MERGED THE APPARATUS WITH HIS BODY
                            <input type="radio" name="two">
                        </label>

                        <label for="" class="label">
                            BIOHAZARD LEAK MELTING THE ARMS TO HIS BACK
                            <input type="radio" name="two">
                        </label>
                    </div>
                </div>
                <div class="item">
                    <h3>WHP PLAY'S DR. OCK?</h3>

                    <div class="options" >
                        <label for="" class="label">
                            ALPINE MORIARTY
                            <input type="radio" name="three">
                        </label>

                        <label for="" class="label">
                            ALPHONSO MARTINA
                            <input type="radio" name="three">
                        </label>

                        <label for="" class="label">
                            ALFRED MOLINA
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
    <section class="prizesWrapper goblin" id="prizes">
        <a href="#prizes" class="prizesBtn">PRIZES</a>

        <div class="thunder"></div>
        <div class="prizesContent text-center">
            <h2>Travel to all 3 universes and stand a chance to win </h2>
            <img src="assets/images/docock/docock-prises.png" class="img-fluid" alt="">
            <p>Tickets to Spider-Man : No Way Home    and amazing merchandise!</p>

            <a href="#">T&C*</a>
            
            <div class="row">
                <img src="assets/images/docock/docock-hand.png" class="img-fluid" alt="">
            </div>
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
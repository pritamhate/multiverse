<?php include('header.php');?>
<link rel="stylesheet" href="assets/css/goblin.css" >
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
    <section class="bannerWrapper" style="background-image: url('assets/images/goblin/greengoblin-bg.jpg');">
        <div class="bannerContent goblinBannerText text-center">
            <div class="row">
                <img src="assets/images/goblin/green-goblin.png" class="img-fluid" alt="">
            </div>

            <h2 class="text-uppercase"><span>Welcome to <span>Goblinverse. </h2>
            <p class="gobline_green">"MWAHAHAHAHAHAHAHA".</p>
            <p class="white">That's all you'll hear. Not the thrusters on his silver glider, not the click of his blasters, nothing! Just KABOOM before the Green Goblin gets you. </p>
            <p class="gobline_green">Can you survive his universe and travel to the next? </p>
            <p class="white">Answer the quiz and taP into the multiverse that exists on your phone.</small></p>

            <a href="#quiz" class="startQuizBtn">START QUIZ</a>
        </div>

        
    </section>
    <!-- Banner -->

    <!-- Quiz -->
    <section class="quizWrapper goblin" id="quiz">
        

        <!-- quiz slider -->
        <div class="quizSlider">
            <!-- Progressbar -->
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="owl-carousel owl-theme">
                <div class="item">
                    <h3>HOW MANY DIFFERENT PEOPLE HAVE BEEN THE GREEN GOBLIN IN THE COMICS?</h3>

                    <div class="options">
                        <label for="" class="label">
                            8
                            <input type="radio" name="one">
                        </label>

                        <label for="" class="label">
                            2
                            <input type="radio" name="one">
                        </label>

                        <label for="" class="label">
                            5
                            <input type="radio" name="one">
                        </label>
                    </div>
                </div>
                <div class="item">
                    <h3>HOW DID THE GREEN GOBLIN BECOME EVIL?</h3>

                    <div class="options">
                        <label for="" class="label">
                            SPLIT PERSONALITY THAT DRIVES HIM TO BECOME A SUPERVILLAIN
                            <input type="radio" name="two">
                        </label>

                        <label for="" class="label">
                            ANXIETY THAT DRIVES HIM TO BECOME A SUPERVILLAIN
                            <input type="radio" name="two">
                        </label>

                        <label for="" class="label">
                            GREED THAT DRIVES HIM TO BECOME A SUPERVILLAIN
                            <input type="radio" name="two">
                        </label>
                    </div>
                </div>
                <div class="item">
                    <h3>WHAT IS GREEN GOBLIN'S REAL NAME?</h3>

                    <div class="options" >
                        <label for="" class="label">
                            NORMAN OSBORN
                            <input type="radio" name="three">
                        </label>

                        <label for="" class="label">
                            NORMAN OSCORP
                            <input type="radio" name="three">
                        </label>

                        <label for="" class="label">
                            NAMAN OSBORN
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
            <img src="assets/images/goblin/goblin-prises.png" class="img-fluid" alt="">
            <p>Tickets to Spider-Man : No Way Home    and amazing merchandise!</p>

            <a href="#">T&C*</a>

            <img src="assets/images/goblin/goblin-bomb.png" class="img-fluid" alt="">
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
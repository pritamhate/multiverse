<?php include 'header.php' ?>

<div id="content-mobile">
    <div class="signIn" id="sign-in">
        <img src="./assets/images/logo-main.jpg" class="img-fluid signin-logo" alt="">

        <h1>Tap into the<br>multiversE</h1>

        <div class="signInForm">
            <div class="socialLogin">
                <button type="button" class="btn btn-light"><i class="btn-icon"><img src="./assets/images/ico-google.svg" class="img-fluid" alt=""></i>Continue with Google</button>
                <button type="button" class="btn btn-light"><i class="btn-icon"><img src="./assets/images/ico-fb.svg" class="img-fluid" alt=""></i>Continue with Facebook</button>
            </div>
            <p class="divider">
                <span>OR</span>
            </p>
            <form class="needs-validation" novalidate>
                <div class="col-12 mb-3 mobileField">
                    <input type="tel" class="form-control" placeholder="Sign up using mobile number" required>
                    <button type="submit" class="btn btn-link text-white arrow-button"><i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="col-6 mb-3">
                    <input type="password" class="form-control" placeholder="OTP" id="otp" required>
                </div>
                <button type="submit" class="btn btn-light rounded-0">Submit</button><br>
                <a href="#" class="signin-tnc">T&amp;C<sup>*</sup></a>
            </form>
        </div>
    </div>
</div>
<!-- Visible Only On Mobile -->

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?php include 'footer.php' ?>
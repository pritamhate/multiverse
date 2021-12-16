<?php include 'header.php' ?>

<div id="content-mobile">
    <div class="signIn" id="sign-in">
        <img src="./assets/images/logo-main.jpg" class="img-fluid signin-logo" alt="">

        <h1>Tap into the<br>multiversE</h1>

        <div class="signInForm">
            <div class="socialLogin">
                <button type="button" class="btn btn-light"><i class="btn-icon"><img src="./assets/images/ico-google.png" class="img-fluid" alt=""></i>Continue with Google</button>
                <button type="button" class="btn btn-light"><i class="btn-icon"><img src="./assets/images/ico-google.png" class="img-fluid" alt=""></i>Continue with Facebook</button>
            </div>
            <p class="divider">
                <span>OR</span>
            </p>
            <form>
                <div class="col-12 mb-3 mobileField">
                    <input type="tel" class="form-control" placeholder="Sign up using mobile number" required >
                    <button type="submit" class="btn btn-link text-white arrow-button"><i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="col-6 mb-3">
                    <input type="password" class="form-control" placeholder="otp" id="otp">
                </div>
                <button type="submit" class="btn btn-light rounded-0" disabled>Submit</button><br>
                <a href="#" class="signin-tnc">T&amp;C<sup>*</sup></a>
            </form>
        </div>
    </div>
</div>
<!-- Visible Only On Mobile -->

<?php include 'footer.php' ?>
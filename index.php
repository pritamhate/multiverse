<?php include 'header.php' ?>

<style>
    #content-desktop {
        display: block;
    }

    #content-mobile {
        display: none;
    }

    @media screen and (max-width: 768px) {

        #content-desktop {
            display: none;
        }

        #content-mobile {
            display: block;
        }

    }
</style>

<div id="content-desktop">
    <h1>Desktop</h1>
</div>

<div id="content-mobile">
    <h1>Mobile</h1>
</div>

<?php include 'header.php' ?>
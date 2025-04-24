<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<?php

define('TITLE', "Search Books");
include '../assets/layouts/header.php';
check_verified();

?>


<style>
    /* Custom Scrollbar Start */
    body::-webkit-scrollbar {
        /* width of the entire scrollbar */
        width: 8px;
    }

    body::-webkit-scrollbar-track {
        /* color of the tracking area */
        background: grey;
    }

    body::-webkit-scrollbar-thumb {
        /* color of the scroll thumb */
        background-color: blue;
        /* roundness of the scroll thumb */
        border-radius: 15px;
    }

    /* Custom Scrollbar End */

    /* Custom Search Box Start */
    .active-pink-2 input.form-control[type=text]:focus:not([readonly]) {
        border-bottom: 1px solid #f48fb1;
        box-shadow: 0 1px 0 0 #f48fb1;
    }

    .active-pink input.form-control[type=text] {
        border-bottom: 1px solid #f48fb1;
        box-shadow: 0 1px 0 0 #f48fb1;
    }

    .active-purple-2 input.form-control[type=text]:focus:not([readonly]) {
        border-bottom: 1px solid #ce93d8;
        box-shadow: 0 1px 0 0 #ce93d8;
    }

    .active-purple input.form-control[type=text] {
        border-bottom: 1px solid #ce93d8;
        box-shadow: 0 1px 0 0 #ce93d8;
    }

    .active-cyan-2 input.form-control[type=text]:focus:not([readonly]) {
        border-bottom: 1px solid #4dd0e1;
        box-shadow: 0 1px 0 0 #4dd0e1;
    }

    .active-cyan input.form-control[type=text] {
        border-bottom: 1px solid #4dd0e1;
        box-shadow: 0 1px 0 0 #4dd0e1;
    }

    /* Custom Search Box End */
</style>



<!-- jQuery & AJAX CDN Link Start -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- jQuery & AJAX CDN Link End -->



<!-- AJAX Script JS File Start -->
<script type="text/javascript" src="script.js"></script>
<!-- AJAX Script JS File End -->



<!-- Search Box Start -->
<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Search Books</h6>
</div>
<div class="container mt-5">
    <div class="md-form active-pink active-pink-2 mb-3 mt-0">
        <input class="form-control" type="text" id="search" placeholder="Enter Book Name or Book Number" autofocus aria-label="Search">
    </div>
    <br>
    <!-- Suggestions will be displayed in below div. -->
    <div id="display"></div>
</div>
<!-- Search Box End -->


<?php

include '../assets/layouts/footer.php'

?>
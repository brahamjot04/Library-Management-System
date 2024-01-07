
<head>

    <!-- Bootstrap CSS Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- Bootstrap CSS End -->

    <!-- Custom CSS Start -->
    <link rel="stylesheet" href="../assets/css/custom.css">
    
<?php

require '../assets/setup/env.php';
require '../assets/setup/db.inc.php';
?>    

    <style>
        /* CSS for Custom Scrollbar Start */
        * {
            -webkit-user-select: none;
            /* Safari */
            -ms-user-select: none;
            /* IE 10 and IE 11 */
            user-select: none;
            /* Standard syntax */
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
            /* width of the entire scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: grey;
            /* color of the tracking area */
        }

        ::-webkit-scrollbar-thumb {
            background-color: blue;
            /* color of the scroll thumb */
            border-radius: 15px;
            /* roundness of the scroll thumb */
        }

        /* CSS for Custom Scrollbar End */
    </style>
    <!-- Custom CSS End -->

</head>

<body>
    <?php
    include 'navbar.php';
    ?>
</body>
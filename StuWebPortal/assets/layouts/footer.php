<?php if (isset($_SESSION['auth'])) { ?>
    <style>
        .footer-copyright .creditsme {
            color: black;
            /* border: 1px solid #0F0F10; */
            text-align: center;
        }

        .footer-copyright .creditsme::before {
            content: "© " attr(data-date)" - All Rights Reserved - GNDPC | Designed By Computer Department";
        }

        .footer-copyright:hover .creditsme::before {
            content: "© " attr(data-date)" - All Rights Reserved - GNDPC | Designed By Brahamjot Singh (1014) & Gagan Kumar Shah (1019)";
        }
    </style>

    <body>

        <footer class="bg-light text-center text-black mt-5">
            <!-- Copyright -->
            <div class="footer-copyright" style="background-color: rgba(0, 0, 0, 0.2);">
                <div class="col">
                    <spans class="creditsme" data-date="<?php echo date('Y'); ?>"></spans>
                </div>
            </div>
            <!-- Copyright -->
        </footer>

    <?php } ?>


    <script src="../assets/vendor/js/jquery-3.4.1.min.js"></script>
    <script src="../assets/vendor/js/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <?php if (isset($_SESSION['auth'])) { ?>

        <script src="../assets/js/check_inactive.js"></script>

    <?php } ?>


    </body>

    </html>

    <?php

    if (isset($_SESSION['ERRORS']))
        $_SESSION['ERRORS'] = NULL;
    if (isset($_SESSION['STATUS']))
        $_SESSION['STATUS'] = NULL;

    ?>
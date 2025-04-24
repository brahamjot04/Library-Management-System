
<?php if (isset($_SESSION['auth'])) { ?>

<body>

    <!-- <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                
                    <h2 class="logo">
                        <a href="../home/" target="_blank"> 
                        <div data-annotate="banner" class="css-11z4o4l" style="background-color: rgb(0, 0, 0);">
						<svg height="70" width="369.99999999999994" style="width: 370px; height: 70px; position: absolute; top: 50%; left: 0%; transform: translate(-50%, -50%) scale(1); z-index: 0; cursor: pointer;"><defs id="SvgjsDefs1001"><linearGradient id="SvgjsLinearGradient1011"><stop id="SvgjsStop1012" stop-color="#8f5e25" offset="0"></stop><stop id="SvgjsStop1013" stop-color="#fbf4a1" offset="0.5"></stop><stop id="SvgjsStop1014" stop-color="#8f5e25" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1015"><stop id="SvgjsStop1016" stop-color="#8f5e25" offset="0"></stop><stop id="SvgjsStop1017" stop-color="#fbf4a1" offset="0.5"></stop><stop id="SvgjsStop1018" stop-color="#8f5e25" offset="1"></stop></linearGradient></defs><g id="SvgjsG1007" featurekey="symbolFeature-0" transform="matrix(0.7777777777777778,0,0,0.7777777777777778,-3.888888888888889,-3.888888888888889)" fill="url(#SvgjsLinearGradient1011)"><path xmlns="http://www.w3.org/2000/svg" d="M50,5C25.1,5,5,25.1,5,50s20.1,45,45,45s45-20.1,45-45S74.9,5,50,5z M65.1,59.3l9.4-9.4L65,40.6c-0.5-0.4-0.7-1-0.7-1.6  c0-0.7,0.3-1.3,0.8-1.9c0.4-0.5,1-0.7,1.6-0.7c0,0,0,0,0.1,0c0.7,0,1.3,0.3,1.8,0.8L81.4,50L68.5,62.9c-0.9,0.9-2.5,0.9-3.5,0l0,0  c-0.4-0.4-0.7-1-0.7-1.6C64.3,60.6,64.5,59.9,65.1,59.3z M44,69.7c-0.2,0-0.5-0.1-0.8-0.2c-1.2-0.4-1.9-1.8-1.5-3.2l12-34.4l0,0  c0.2-0.6,0.6-1.1,1.2-1.4c0.3-0.2,0.7-0.2,1-0.2c0.3,0,0.6,0.1,0.9,0.2c1.2,0.4,1.9,1.8,1.5,3.2L46.3,68C46,69,45,69.7,44,69.7z   M34.9,40.6L25.6,50l9.4,9.4c0.5,0.4,0.7,1,0.7,1.6c0,0.7-0.3,1.3-0.8,1.8c-0.5,0.5-1.1,0.8-1.7,0.8c-0.6,0-1.3-0.3-1.7-0.8L18.6,50  l12.9-12.9c0.4-0.5,1-0.7,1.6-0.7c0.7,0,1.3,0.3,1.9,0.8c0.5,0.4,0.7,1,0.7,1.6C35.7,39.5,35.4,40.1,34.9,40.6z"></path></g><g id="SvgjsG1008" featurekey="nameFeature-0" transform="matrix(1.6252612142092024,0,0,1.6252612142092024,85.31925061702087,-7.5031314705706755)" fill="url(#SvgjsLinearGradient1015)"><path d="M13.88 28.48 l4.6 -16.48 l6.4 0 l-7.8 28 l-6.4 0 l-7.8 -28 l6.4 0 z M44.040000000000006 33.6 l0 -21.6 l6.4 0 l0 23.04 c0 2.76 -2.24 4.96 -5 4.96 l-9.84 0 c-2.76 0 -4.96 -2.2 -4.96 -4.96 l0 -23.04 l6.4 0 l0 21.6 l7 0 z M62.60000000000001 12 l0 21.6 l10.32 0 l0 6.4 l-16.72 0 l0 0 l0 -28 l6.4 0 z M92.08000000000001 12 l6.4 0 l0 28 l-6.4 0 l-7 -14.56 l0 14.56 l-6.4 0 l0 -28 l6.4 0 l7 14.6 l0 -14.6 z M117.64000000000001 22.8 l0 -10.8 l6.4 0 l0 28 l-6.4 0 l0 -10.8 l-7 0 l0 10.8 l-6.4 0 l0 -28 l6.4 0 l0 10.8 l7 0 z M143.20000000000002 33.6 l0 -21.6 l6.4 0 l0 23.04 c0 2.76 -2.24 4.96 -5 4.96 l-9.84 0 c-2.76 0 -4.96 -2.2 -4.96 -4.96 l0 -23.04 l6.4 0 l0 21.6 l7 0 z M170.16000000000003 12 c2.76 0 5 2.24 5 5 l0 5.28 c0 1.84 -1.32 3.4 -3.16 3.68 l-0.24 0.04 l0.24 0.04 c1.84 0.32 3.16 1.88 3.16 3.68 l0 5.32 c0 2.72 -2.24 4.96 -5 4.96 l-14.8 0 l0 -28 l14.8 0 z M168.76000000000002 32.28 l0 -1.72 c0 -0.76 -0.6 -1.32 -1.32 -1.32 l-5.68 0 l0 4.36 l5.68 0 c0.72 0 1.32 -0.6 1.32 -1.32 z M168.76000000000002 21.48 l0 -1.72 c0 -0.72 -0.6 -1.32 -1.32 -1.32 l-5.68 0 l0 4.36 l5.68 0 c0.72 0 1.32 -0.6 1.32 -1.32 z"></path></g></svg></div>    
                        <img src="../assets/images/vulnhublogo.png" alt="" width="370" height="70" class="">
                        </a>
                    </h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="../welcome/" target="_blank">Welcome</a></li>
                        <li><a href="../login/" target="_blank">Log in</a></li>
                        <li><a href="../register/" target="_blank">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Features</h5>
                    <ul>
                        <li><a href="../home/" target="_blank">Home</a></li>
                        <li><a href="../dashboard/" target="_blank">Dashboard</a></li>
                        <li><a href="../profile/" target="_blank">Profile</a></li>
                        <li><a href="../profile-edit/" target="_blank">Edit Profile</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="../contact/" target="_blank">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="social-networks">
                        <a href="#" class="twitter" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="facebook" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <a class="btn btn-default" href="mailto:hacknation28@gmail.com" target="_blank">Email Me</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>
                <a href="#" target="">VulnHub</a> |  
                <a href="#" target="">Bakshish Singh</a>
                <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> GNDPC - All Rights Reserved</p>
            </p>
        </div>
    </footer> -->

<?php } ?>


<script src="../assets/vendor/js/jquery-3.4.1.min.js"></script>
<script src="../assets/vendor/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

<?php if(isset($_SESSION['auth'])) { ?> 

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
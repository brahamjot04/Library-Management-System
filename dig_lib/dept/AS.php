<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<title>Applied Science | Digital Library</title>

<!-- Header Start -->
<?php

include '../assets/includes/header.php';

?>
<!-- Header End -->

<style>
    .prevent-select {
        -webkit-user-select: none;
        /* Safari */
        -ms-user-select: none;
        /* IE 10 and IE 11 */
        user-select: none;
        /* Standard syntax */
    }

    body::-webkit-scrollbar {
        width: 8px;
        height: 8px;
        /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
        background: grey;
        /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
        background-color: blue;
        /* color of the scroll thumb */
        border-radius: 15px;
        /* roundness of the scroll thumb */
    }

    /* table.table tbody tr td,
    table.table thead tr th,
    table.table thead {
    border-left: 1px solid gray;
    border-right: 1px solid gray;
    } */
</style>


<!-- jQuery & AJAX CDN Link Start -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- jQuery & AJAX CDN Link End -->

<!-- Custom JS File Start -->
<script type="text/javascript" src="scriptAS.js"></script>
<!-- Custom JS File End -->


<!-- Main Heading Block -->
<div class="container" style="margin-top:100px;">
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Applied Science Books</h6>
</div>

<!-- Table Start -->
<div class="container rounded shadow border mb-5" style="background-color:#fff;">
    <div class="container mt-4 shadow">
        <button type="button" class="text-right float-right btn btn-primary shadow" data-toggle="modal" data-target="#searchAS">Search Books</button>
    </div>
    <div class="container d-grid">
        <!-- Pending Before this UI creation after books data is entered and A table is created name -->
        <?php
        // Search Query
        $qry0 = "SELECT * FROM admin_books WHERE Dept_name='AS'";

        $result0 = mysqli_query($conn, $qry0);
        ?>
        <div class='container text-bg-light shadow px-3 py-3 mb-4 bg-body rounded mt-4 scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>
            <table class='table border'>
                <thead>
                    <tr>
                        <th scope='col border'>Accession No.</th>
                        <th scope='col'>Book Name</th>
                        <th scope='col'>Author Name</th>
                        <th scope='col'>Publisher Name</th>
                        <th scope='col'>Edition</th>
                        <th scope='col'>Year</th>
                        <th scope='col'>Volume</th>
                        <th scope='col'>Pages</th>
                    </tr>
                </thead>

                <?php
                while ($r0 = mysqli_fetch_array($result0)) {
                    echo "<tr><td>$r0[0]</td>";
                    echo "<td>$r0[4]</td>";
                    echo "<td>$r0[5]</td>";
                    echo "<td>$r0[6]</td>";
                    echo "<td>$r0[8]</td>";
                    echo "<td>$r0[9]</td>";
                    echo "<td>$r0[10]</td>";
                    echo "<td>$r0[11]</td>";
                }
                ?>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- Table End -->

<!-- Video Gallery Code Start -->
<div class="container">
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Video Gallery</h6>
</div>
<div class="container rounded shadow border mb-5" style="background-color:#fff; overflow-y:scroll; max-height: 300px;">
    <div class="row">
        
        <div class="col-lg-4 col-md-6 mt-2">
            <div class="container">
                <iframe class="tutorial container text-center mt-5
                embed-responsive embed-responsive-16by9" style="min-width:280px; min-height:157px;" width="560px" height="200px" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" src="https://www.youtube.com/embed/videoseries?list=PLdVPhVskZsyZeD2iTZple-6xg4aiP9dnK"  allowfullscreen></iframe>
                <p class="pl-4 mt-2">Applied Physics I & II Playlist</p>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mt-2">
            <div class="container">
                <iframe class="tutorial container text-center mt-5
                embed-responsive embed-responsive-16by9" style="min-width:280px; min-height:157px;" width="560px" height="200px" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" src="https://www.youtube.com/embed/videoseries?list=PLdVPhVskZsyZz4PDoNoXmDIhudoC4bcQT" allowfullscreen></iframe>
                <p class="pl-4 mt-2">Applied Chemistry I & II Playlist</p>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mt-2">
            <div class="container">
                <iframe class="tutorial container text-center mt-5
                embed-responsive embed-responsive-16by9" style="min-width:280px; min-height:157px;" width="560px" height="200px" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" src="https://www.youtube.com/embed/videoseries?list=PLdVPhVskZsybpUtoOuRW0TTUj28-oN9Im" allowfullscreen></iframe>
                <p class="pl-4 mt-2">Applied Mathematics I & II Playlist</p>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-2">
            <div class="container">
                <iframe class="tutorial container text-center mt-2
                embed-responsive embed-responsive-16by9" style="min-width:280px; min-height:157px;" width="560px" height="200px" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" src="https://www.youtube.com/embed/videoseries?list=PL0s3O6GgLL5egBN9RQS9jsX04IQaMl9S6" allowfullscreen></iframe>
                <p class="pl-4 mt-2">Engineering Drawing Playlist</p>
            </div>
        </div>


        </div>
    </div>
</div>
<!-- Video Gallery Code End -->


<!-- Modal1 Start Here-->
<div class="modal fade" id="searchAS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Applied Science</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="md-form active-pink active-pink-2 mb-3 mt-3">
                    <input class="form-control" name="search" type="text" id="search" placeholder="Enter Book Name or Book Number" aria-label="Search" autofocus>
                </div>
                <br>
                <!-- Suggestions will be displayed in below div. -->
                <div id="display"></div>

            </div>
        </div>
    </div>
</div>
<!-- Modal1 End Here-->

<?php

include '../assets/includes/footer.php'

?>
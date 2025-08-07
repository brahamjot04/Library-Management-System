<div class='card text-center shadow bg-white mt-3 rounded'>

    <?php if (isset($_SESSION['auth'])) { ?>

        <img alt='' class='card-img-top card-user-cover img-fluid' src='../assets/images/Banner3.jpg'>
        <div class='card-block pt-3'>
            <a href='../profile'>
                <img src='../assets/uploads/users/<?php echo $_SESSION['profile_image']; ?>' class='card-img-profile' style="width:60px; height:60px;">
            </a>
            <!-- <a href="../profile-edit"> -->
            <!-- <i class="fa fa-pencil-alt fa-1x edit-profile" aria-hidden="true"></i> -->
            <!-- <i class="fa fa-female"></i> -->
            <!-- </a> -->
            <h4 class='card-title' style="margin-top: -30px;">
                <small class="font-weight-bold fs-6">
                    <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name']; ?><br>
                    (<?php echo $_SESSION['username']; ?>)
                </small><br>
                <small class="text-muted" style="font-size: 1rem;">
                    <?php echo $_SESSION['email']; ?>
                </small><br>
                <small class="text-muted mt-4" style="font-size: 1rem;">
                    <?php echo $_SESSION['headline']; ?>
                </small>
            </h4>
        </div>

    <?php } else { ?>

        <img alt='' class='card-img-top card-user-cover' src='../assets/images/Banner3.jpg'>
        <div class='card-block'>
            <a href=''>
                <img src='../assets/images/logo.png' class='card-img-profile'>
            </a>
            <h5 class='card-title'>
                GNDPC Library System
                <small class="text-muted">
                    <a href=""></a>
                </small>
                <br>
                <small class="text-muted">Guru Nanak Dev Polytechnic College, Ludhiana</small>
            </h5>
        </div>

    <?php } ?>

</div>
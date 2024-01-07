<html lang="en">

<head>
    <title>GNDPC | Library</title>
    <link rel="icon" type="image/x-icon" href="img/images/logo.png">
</head>

<body oncontextmenu="return false" class="prevent-select">

    <!-- Header Start -->
    <?php
    include 'header.php';
    $dis = $_GET['library'];
    ?>
    <!-- Header End -->

    <!-- Library Home Page Start -->
    <div style="<?php if ($dis != 'home') {
                    echo " display:none";
                } ?>">

        <!-- Library Main Image Start -->
        <div class="container-xl globaltext">
            <img src="img/library/library.jpg" class="img-fluid rounded-3" alt="Library Image">
        </div>
        <!-- Library Main Image End -->

        <!-- Library About Section Start -->
        <div class="container-fluid globaltext">
            <div class="mx-4 justify-content-evenly">
                <div class="row g-3">

                    <!-- Assistant Libraian Section Start -->
                    <div class="col-lg-4">
                        <div class="p-3 text-bg-light shadow bg-body rounded">
                            <h3 class="p-2 h4 text-light bg-primary text-center shadow rounded-top">Our Staff</h3>
                            <div class="card col" style="width: 25rem; margin: auto;">
                                <img src="img/library/suman_bala.png" class="card-img-top px-3 mt-3" alt="Ms. Suman Bala (Assistant Librarian)">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h3 class="fw-semibold">Ms. Suman Bala</h3>
                                        <h5>(Assistant Librarian)</h5>
                                    </div>
                                    <p class="card-text">Ms. Suman Bala has been serving this college as the Assistant
                                        Librarian since 2014. She has been performing her job well. She is always there
                                        to assist the students and staff to provide information regarding any book.</p>
                                    <p class="card-text"><b>Qualifications:</b> M.A. English, M.Lib. & Inf. Sc.</p>
                                    <p class="card-text"><b>Date Joined:</b> 28 July, 2014</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Assistant Librarian End -->

                    <!-- About Library Start -->
                    <div class="col-lg-4">
                        <div class="p-3 text-bg-light shadow bg-body rounded mb-4">
                            <h3 class="p-2 h4 text-light bg-primary text-center shadow rounded-top">About Our Library</h3>
                            <p class="text-start" style="font-size: .85rem;">
                                Progress in this information age depends largely on frontline
                                knowledge/information gained by educationists, technologies, engineers and scientists
                                and
                                library plays a key role in dissemination of information. The flood of literaure,
                                shirinking
                                resources, escalation of prices has made it impossible to get all information at
                                individual
                                level. So, at this Library comes to the rescue to its users.
                            </p>
                            <p class="text-start" style="font-size: .85rem;">The library is an ideal place to enjoy the
                                delight of perusing and for
                                exploring. These days, administrators furnish finish help and direction with exploring
                                and
                                exploring information.The College has a well-stocked Library catering to the needs of
                                students
                                as well as members of the faculity. It has a working area of around 4580 sq. ft. Total
                                number of
                                books in Library is about 15490. There are 21 Periodicals (Journals), Internation (2),
                                National
                                (19). There are 19 Magazines (6 Technical, 13 Non-Technical) and 7 Daily Newspapers
                                received
                                regularly. The Library has Internet and Multimedia Facility. It also has a separate
                                Reading
                                Hall.
                            </p>
                            <p class="text-start" style="font-size: .85rem;">The Library is having various sections:
                            <ul>
                                <li style="font-size: .85rem;">Reference Section</li>
                                <li style="font-size: .85rem;">Text-Book Section</li>
                                <li style="font-size: .85rem;">Book-Bank Section</li>
                                <li style="font-size: .85rem;">Circulatin Section</li>
                                <li style="font-size: .85rem;">Newspaper Section</li>
                                <li style="font-size: .85rem;">Journal & Magazines Section</li>
                            </ul>
                            </p>
                            <hr>
                            <p class="text-center" style="font-size: .85rem;">Library Timings: <b>8:30 A.M to 1:00 P.M</b> and <b>2:00 P.M to 4:00 P.M</b></p>
                        </div>
                    </div>
                    <!-- About Library End -->

                    <!-- Section 3 Start -->
                    <div class="col-lg-4">
                        <!-- Useful Links Start -->
                        <div class="p-3 mb-3 text-bg-light shadow bg-body rounded">
                            <h3 class="p-2 h4 text-light bg-primary text-center shadow rounded-top">Useful Links</h3>
                            <h6 class="h6 text-center text-dark">Student Corner</h6>
                            <ul>
                                <li scope="col"><a href="library.php?library=rules" style="text-decoration: none;">Rules and Regulations</a></li>
                                <li scope="col"><a href="#book-details" id="book-link" onclick="remove_hash()" style="text-decoration: none;">Book Details</a>
                                </li>
                                <li scope="col"><a href="https://www.brpaper.com/psbte/diploma" target="_blank" class="text-decoration-none">Question Papers</a></li>
                                <li scope="col"><a href="StuWebPortal/" target="_blank" style="text-decoration: none;">Student Web Portal</a></li>
                                <li scope="col"><a href="dig_lib/" target="_blank" style="text-decoration: none;">Digital Library</a></li>
                            </ul>
                            <h6 class="h6 text-center text-dark">Extra Resources</h6>
                            <ul>
                                <li scope="col"><a href="https://ndl.iitkgp.ac.in/" target="_blank" class="text-decoration-none">National Digital Library</a>
                                </li>
                                <!-- <li scope="col"><a href="https://www.delnet.in" target="_blank" class="text-decoration-none">Delnet</a></li> -->
                                <li scope="col"><a href="https://www.bookshare.org/cms/" target="_blank" style="text-decoration: none;">Book Share</a></li>
                                <li scope="col"><a href="https://library.daisyindia.org/NALP/welcomeLink.action" target="_blank" style="text-decoration: none;">Sugamya Pustakalaya</a></li>
                                <li scope="col"><a href="https://www.youtube.com/@Nitttrchd/videos" target="_blank" style="text-decoration: none;">NITTTR Chandigarh (YouTube)</a></li>
                                <li scope="col"><a href="https://www.youtube.com/@IITBombayOfficialChannel/videos" target="_blank" style="text-decoration: none;">IIT Bombay (YouTube)</a></li>
                            </ul>
                        </div>
                        <!-- Useful Links End -->


                        <!-- Library News Section Start -->
                        <div class="p-3 mb-5 text-bg-light shadow bg-body rounded">
                            <h3 class="p-2 h4 text-light bg-primary text-center shadow rounded-top">News Section</h3>
                            <div class="text-align-left" style="overflow-y: scroll; max-height:200px;">
                                <?php
                                include "news_library.php";
                                ?>
                            </div>
                        </div>
                        <!-- Library News Section End -->


                    </div>
                    <!-- Section 3 End -->

                </div>

            </div>

        </div>

        <!-- Book Details Section Start -->
        <div class="mx-4 p-3 mt-4 justify-content-evenly rounded shadow" id="book-details">
            <h3 class="p-2 mb-4 h4 text-light bg-primary text-center shadow rounded-top" id="book-details">Book Details</h3>
            <?php
            include 'lib_book_details.php';
            ?>
        </div>
        <!-- Book Details Section End -->

        <!-- Library Home Page End -->


        <!-- Library Rules & Regulations Start -->
        <div style="<?php if ($dis != 'rules') {
                        echo " display: none";
                    } ?>">
            <div class="container">
                <h1 class="pt-3 text-primary text-center">Rules & Regulations for Library</h1>
                <div class="container text-bg-light shadow px-3 py-5 mb-5 bg-body rounded mt-5">
                    <div class="text-bg-light shadow px-3 pb-3 mb-5 bg-body rounded ">
                        <h4 class="pt-3 text-primary">Library Hours</h4>
                        Library Hours are fixed by the Principal from time to time.
                    </div>
                    <div class="text-bg-light shadow px-3 pb-3 mb-5 bg-body rounded">
                        <h4 class="pt-3 text-primary">Library Use</h4>
                        The Library is primarily intended for the staff and students of the College. Others can use the
                        Library
                        only
                        with the special permission of the Principal.
                    </div>
                    <div class="text-bg-light shadow px-3 pb-3 mb-5 bg-body rounded">
                        <h4 class="pt-3 text-primary">Access to Books</h4>
                        The readers have free access to books and periodicals which are on the open shelves. Text Books
                        and
                        disserations can be consulted in the assigned area only.
                    </div>
                    <div class="text-bg-light shadow px-3 pb-3 mb-5 bg-body rounded">
                        <h4 class="pt-3 text-primary">Library Service</h4>
                        Members are free to seek the assistance of Library staff in selecting reading material, checking
                        of
                        reference, searching misplaced reading material, compilation bibliographies and new acquisition
                        etc.
                        <br>
                        Members are free to recommend new books and journals for the Library and to suggest improvement
                        in
                        Library
                        and its services
                    </div>
                    <div class="text-bg-light shadow px-3 pb-3 mb-5 bg-body rounded">
                        <h4 class="pt-3 text-primary">Membership</h4>
                        Only Library members can enjoy the privilege of borrowing books. The students of the college can
                        enroll
                        themselves as members by filing a prescribed application form and aggreeing to abide by the
                        rules.
                        Borrower
                        cards given to registered members are strictly non-transferable and are renewed every semester.
                        A lost
                        borrower's card found should be immediately deposited in Library. Failure to comply, or its
                        misuse can
                        lead
                        to cancellation of membership.
                        <br>
                        Periodicals are not issued for home use. Certain categories of material, particularly reference
                        books
                        and
                        damaged books are also not ordinarily issued for home use.
                        <br>
                        The books borrowed by members are not to sublet. The books are not to be retained beyond the due
                        dates.
                        An
                        overcharge of ₹2 per book per day (except holidays falling on due dates) is levied on the books
                        retained
                        beyond beyond due date.
                        <br>
                        Books and other library materials are not to be marked or damaged. Before getting the book
                        issued, any
                        manipuation marking should be pointed out immediately by the member of the counter in-charge and
                        his
                        initials be obtained otherwise the member will be responsible for any mutilation discovered
                        afterwards.
                    </div>
                    <div class="text-bg-light shadow px-3 pb-3 mb-5 bg-body rounded">
                        <h4 class="pt-3 text-primary">Borrowing Privilege for Members</h4>
                        The number of books that may be borrowed and the time period for various categories of the
                        members will
                        be
                        as follows:
                        <table class="table">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Time Period</th>
                                    <th scope="col">No. Of Books</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Post-Diploma Students</th>
                                    <td>14 days</td>
                                    <td>02</td>
                                </tr>
                                <tr>
                                    <th scope="row">Diploma Students</th>
                                    <td>14 days</td>
                                    <td>02</td>
                                </tr>
                                <tr>
                                    <th scope="row">1st & 2nd Year <br>(All Branches) </th>
                                    <td>14 days</td>
                                    <td>02</td>
                                </tr>
                                <tr>
                                    <th scope="row">Final Year Students <br>(All Branches) </th>
                                    <td>14 days</td>
                                    <td>02</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-bg-light shadow px-3 pb-3 mb-5 bg-body rounded">
                        <h4 class="pt-3 text-primary">Loss of Books</h4>
                        In case of damage or loss of book, the members shall be required to replace the book or pay the
                        cost of
                        the
                        book (Accoring to Accession Register) and 50% extra.
                    </div>
                    <div class="text-bg-light shadow px-3 pb-3 mb-5 bg-body rounded">
                        <h4 class="pt-3 text-primary">Loss of Membership Card</h4>
                        Loss of Reader's Ticket(s) should be immediately reported to the librarian. A new library card
                        will be
                        issued on payment of ₹50 per ticket.
                    </div>
                    <div class="text-bg-light shadow px-3 pb-3 bg-body rounded">
                        <h4 class="pt-3 text-primary">No Dues Certificate</h4>
                        A "No Dues Certificate" is given to the borrower when he/she wishes to terminate the membership of the Library. The certificate can be obtained from the Library after surrending the membership ticket and clearing the dues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Library Rules & Regulations End -->


        <script>
        </script>
        <!-- Bootstrap JavaScript Start -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <!-- Bootstrap JavaScript End -->


        <!-- Footer Start -->
        <?php
        include 'footer.php';
        ?>
        <!-- Footer End -->
</body>

</html>
<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">


<!-- Header Start -->
<?php

define('TITLE', "Manage Books");
include '../assets/layouts/header.php';
check_verified();

?>
<!-- Header End -->

<link rel="stylesheet" href="scrollbar.css">
<style>
    /* disable right side control icon of input feild */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>


<!-- Manage Books Button Start -->
<div class="container text-bg-light shadow p-3 my-5 bg-body rounded">
    <!-- Main Heading Block Start -->
    <div class="container mt-3">
        <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Manage Books</h6>
    </div>
    <!-- Main Heading Block End -->
    <div class="row justify-content-center row-cols-1">
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 13rem;">
            <a href="search.php" style="text-decoration: none;">
                <button type="button" class="btn btn-primary" style="width: 10rem;">Search Books</button>
            </a>
        </div>
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 13rem;">
            <a href="view_books.php" style="text-decoration: none;">
                <button type="button" class="btn btn-secondary" style="width: 10rem;">View Books</button>
            </a>
        </div>
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 13rem;">
            <a href="add_book.php" style="text-decoration: none;">
                <button type="button" class="btn btn-success" style="width: 10rem;">Add New Book</button>
            </a>
        </div>

        <!-- Trigger the modal with a button start-->
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 13rem;">
            <a href="#" style="text-decoration: none;">
                <button type="button" class="btn btn-warning" style="width: 10rem;" data-toggle="modal" data-target="#myModal">Issue Book</button>
            </a>
        </div>
        <!-- Trigger the modal with a button end-->

        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 13rem;">
            <a href="#" style="text-decoration: none;">
                <button type="button" class="btn btn-dark" style="width: 10rem;" data-toggle="modal" data-target="#myModal2">Return Book</button>
            </a>
        </div>
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 13rem;">
            <a href="view_issue_book.php" style="text-decoration: none;">
                <button type="button" class="btn btn-light" style="width: 10rem; background-color: red; color: white;">View Issued Books</button>
            </a>
            </a>
        </div>
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 15rem;">
            <a href="view_return_book.php" style="text-decoration: none;">
                <button type="button" class="btn btn-light" style="width: 12rem; background-color: purple; color:white;">View Returned Books</button>
            </a>
        </div>
    </div>
</div>
<!-- Manage Books Button End -->

<!-- Fine Management Button Start -->
<div class="container text-bg-light shadow p-3 my-5 bg-body rounded">
    <!-- Main Heading Block Start -->
    <div class="container mt-3">
        <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Fine Management</h6>
    </div>
    <!-- Main Heading Block End -->
    <div class="row justify-content-center row-cols-1">
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 17rem;">
            <a href="#" style="text-decoration: none;">
                <button type="button" class="btn btn-light mb-2" style="width: 15rem;background-color: #FF4500; color: white;" data-toggle="modal" data-target="#payfineStuIdModal">Pay Fine</button>
            </a>
        </div>
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 17rem;">
            <a href="#" style="text-decoration: none;">
                <button type="button" class="btn btn-primary mb-2" style="width: 15rem;" data-toggle="modal" data-target="#allStuFineDetailModal">Check all Students Fine Details</button>
            </a>
        </div>
        <div class="col my-3 align-items-center p-3 bg-white rounded box-shadow card mx-2" style="width: 17rem;">
            <a href="#" style="text-decoration: none;">
                <button type="button" class="btn btn-success" style="width: 15rem;" data-toggle="modal" data-target="#fineStuIdModal">Check Fine By Student Id</button>
            </a>
        </div>
    </div>
</div>
<!-- Fine Management Button End -->

<!-- Department Wise Book Start -->
<div class="container text-bg-light shadow p-3 mb-5 bg-body rounded">
    <div class="row justify-content-center row-cols-1">
        <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Department Wise Books</h6>

        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/AS.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Applied.png" class="card-img-top border rounded" alt="Applied Science">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/AS.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3">Applied Science Department</h6>
                </a>
            </div>
        </div>
        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/CSE.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Computer.png" class="card-img-top border rounded" alt="Computer Science">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/CSE.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3">Computer Science Department</h6>
                </a>
            </div>
        </div>
        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/ECE.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Electronics.png" class="card-img-top border" alt="Electronics">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/ECE.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3 text-nowwrap">Electronics & Communication Department</h6>
                </a>
            </div>
        </div>
        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/CE.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Civil.png" class="card-img-top border" alt="Civil">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/CE.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3">Civil Department</h6>
                </a>
            </div>
        </div>
        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/EE.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Electrical.png" class="card-img-top border" alt="Electrical">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/EE.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3">Electrical Department</h6>
                </a>
            </div>
        </div>
        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/ME.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Mechanical.png" class="card-img-top border" alt="Mechanical">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/ME.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3">Mechanical Department</h6>
                </a>
            </div>
        </div>
        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/AE.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Automobile.png" class="card-img-top border" alt="Automobile">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/AE.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3">Automobile Department</h6>
                </a>
            </div>
        </div>
        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/Reference.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Reference.jpg" class="card-img-top border" alt="Reference">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/Reference.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3">Other Reference</h6>
                </a>
            </div>
        </div>
        <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 21rem;">
            <a href="../department/Literature.php" style="text-decoration: none;">
                <img src="../assets/images/dept/Literature.jpg" class="card-img-top border" alt="Literature">
            </a>
            <div class="media text-dark pt-3 card-body">
                <a href="../department/Literature.php" style="text-decoration: none;">
                    <h6 class="h6 pb-3">Literature</h6>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Department Wise Book End -->

<!-- Modal1 Start Here-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content project-details-popup">
            <button type="button" class="close text-right mr-2" data-dismiss="modal">&times;</button>
            <form action="issue_book.php" name="issuePrompt" method="GET" onsubmit="return Validate()">
                <div class="modal-body">
                    <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
                        <div class="container d-flex flex-wrap flex-row">
                            <div class="form-group mx-2 align-items-center flex-fill flex-column">
                                <label class="form-label fw-semibold">Student Id.: <span class="text-danger">*</span></label>
                                <input class="form-control w-100 text-uppercase" type="number" inputmode="numeric" name="s_id" placeholder="Enter the Student Roll No." value="" autofocus>
                                <div id="rNoErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                            </div>
                            <div class="form-group mx-2 align-items-center flex-fill flex-column">
                                <label class="form-label fw-semibold">Accession No.: <span class="text-danger">*</span></label>
                                <input class="form-control form-control w-100 text-uppercase" type="number" name="accession_no" placeholder="Enter Accession No. Here">
                                <div id="accessionNoErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>

                            </div>
                            <div class="container d-flex justify-content-center">

                                <td><button class="form-control btn btn-success mx-2 mb-4 w-25" type="submit" name="submit">SUBMIT</button></td>
                            </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal1 End Here-->

<!-- Modal2 Start Here-->
<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content project-details-popup">
            <button type="button" class="close text-right mr-2" data-dismiss="modal">&times;</button>
            <form action="return_book.php" name="returnPrompt" method="GET" onsubmit="return return_Validate()">
                <div class="modal-body">
                    <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
                        <div class="form-group mx-2 align-items-center flex-fill flex-column">
                            <label class="form-label fw-semibold">Accession No.: <span class="text-danger">*</span></label>
                            <input class="form-control form-control w-100 text-uppercase" type="number" name="accession_no" placeholder="Enter Accession No. Here">
                            <div id="accessionNoErr2" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <td><button class="form-control btn btn-success mx-2 mb-4 w-25" type="submit" name="submit">SUBMIT</button></td>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal2 End Here-->

           
<!-- Fine Detail Form Modal Find By Id Start Here-->
<div id="fineStuIdModal" class="modal fade" aria-hidden="true" aria-labelledby="fineStuIdModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content project-details-popup">
            <button type="button" class="close text-right mr-2" data-dismiss="modal">&times;</button>
            <form action="../fine_mgm/fine_Stu_Id_Table.php" name="fineStuIdPrompt" method="GET" onsubmit="return fineStuIdValidate()">
                <div class="modal-body">
                    <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
                        <div class="container d-flex flex-wrap flex-row">
                            <div class="form-group mx-2 align-items-center flex-fill flex-column">
                                <label class="form-label fw-semibold">Student Id: <span class="text-danger">*</span></label>
                                <input class="form-control w-100 text-uppercase" type="number" inputmode="numeric" name="s_id" placeholder="Enter the Student Id" value="<?php echo $S_Id; ?>" autofocus>
                                <div id="stuIdErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                            </div>
                            <div class="container d-flex justify-content-center">
                                <td><button class="form-control btn btn-success mx-2 mb-4 w-25 btn btn-primary" data-bs-target="#fineTablePromptModal" data-bs-toggle="modal" data-bs-dismiss="modal" type="submit" name="submit">SUBMIT</button></td>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fine Detail Form Modal Find By Id End Here-->


<!-- All Student Fine Detail Modal Form By Date Start Here-->
<div id="allStuFineDetailModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content project-details-popup">
            <button type="button" class="close text-right mr-2" data-dismiss="modal">&times;</button>
            <form action="../fine_mgm/fine_all_stu_table.php" name="allStuFineDetailPrompt" method="POST" onsubmit="return allStuFineDetailValidate()">
                <div class="modal-body">
                    <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
                        <div class="form-group mx-2 align-items-center flex-fill flex-column">
                            <label class="form-label fw-bold">From Date: <span class="text-danger">*</span></label>
                            <input class="form-control form-control w-100 text-uppercase" type="date" name="from_date" id='fromDate'>
                            <div id="fromDateErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                        </div>
                        <div class="form-group mx-2 align-items-center flex-fill flex-column">
                            <label class="form-label fw-bold">To Date: <span class="text-danger">*</span></label>
                            <input class="form-control form-control w-100 text-uppercase" type="date" name="to_date" id="toDate">
                            <div id="toDateErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <td><button class="form-control btn btn-success mx-2 mb-4 w-25" type="submit" name="submit">SUBMIT</button></td>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- All Student Fine Detail Modal Form By Date End Here-->
    


<!-- Pay fine Start Here-->
<div id="payfineStuIdModal" class="modal fade" aria-hidden="true" aria-labelledby="fineStuIdModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content project-details-popup">
            <button type="button" class="close text-right mr-2" data-dismiss="modal">&times;</button>
            <form action="../fine_mgm/pay_process.php" name="fineStuIdPrompt" method="GET" onsubmit="return fineStuIdValidate()">
                <div class="modal-body">
                    <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
                        <div class="container d-flex flex-wrap flex-row">
                            <div class="form-group mx-2 align-items-center flex-fill flex-column">
                                <label class="form-label fw-semibold">Invoice Id: <span class="text-danger">*</span></label>
                                <input class="form-control w-100 text-uppercase" type="text" inputmode="text" name="invoice_id" placeholder="Enter the Invoice Id"  autofocus>
                                <div id="stuIdErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                            </div>
                            <div class="container d-flex justify-content-center">
                                <td><button class="form-control btn btn-success mx-2 mb-4 w-25 btn btn-primary" data-bs-target="#fineTablePromptModal" data-bs-toggle="modal" data-bs-dismiss="modal" type="submit" name="submit">SUBMIT</button></td>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Pay fine End Here-->

<!-- Form Validation Script Start -->
<script>
    var a = document.issuePrompt;

    function Validate() {
        if (a.r_no.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("rNoErr").innerHTML = "Roll Number is missing!";
            event.preventDefault();
        } else {
            document.getElementById("rNoErr").innerHTML = "";
        }

        if (a.accession_no.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("accessionNoErr").innerHTML = "Accession Number is missing!";
            event.preventDefault();
        } else {
            document.getElementById("accessionNoErr").innerHTML = "";
        }
        if (a.r_no.value == "" || a.accession_no.value == "") {
            return false;
        }
    }

    var b = document.returnPrompt;

    function return_Validate() {
        if (b.accession_no.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("accessionNoErr2").innerHTML = "Accession Number is missing!";
            event.preventDefault();
        } else {
            document.getElementById("accessionNoErr2").innerHTML = "";
        }
        if (b.accession_no.value == "") {
            return false;
        }
    }

    // Fine Detail of Student By Id Modal Validation Start Here
    var c = document.fineStuIdPrompt;

    function fineStuIdValidate() {
    if (c.s_id.value == "") {
        // alert('Enter Roll No.');
        document.getElementById("stuIdErr").innerHTML = "Student Id is missing!";
        event.preventDefault();
    } else {
        document.getElementById("stuIdErr").innerHTML = "";
    }

    if (c.s_id.value == "") {
        return false;
    }
    }
    // Fine Detail of Student By Id Modal Validation End Here

    // Fine Detail of All Student By Date Modal Validation Start Here
    var d = document.allStuFineDetailPrompt;
    const fromDate = document.getElementById('fromDate');
    const toDate = document.getElementById('toDate');

    function allStuFineDetailValidate() {
    if (fromDate.value === '' || fromDate.value === null) {
        // alert('Enter Roll No.');
        document.getElementById("fromDateErr").innerHTML = "From Date is missing!";
        event.preventDefault();
    } else {
        document.getElementById("fromDateErr").innerHTML = "";
    }

    if (toDate.value === '' || toDate.value === null) {
        // alert('Enter Roll No.');
        document.getElementById("toDateErr").innerHTML = "To Date is missing!";
        event.preventDefault();
    } else {
        document.getElementById("toDateErr").innerHTML = "";
    }
    }
    // Fine Detail of All Student By Date Modal Validation End Here
    
</script>
<!-- Form Validation Script End -->

<!-- example for double prompt prompt code in JS -->

<?php

include '../assets/layouts/footer.php'

?>

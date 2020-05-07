<!DOCTYPE html>
<html lang="en">

<?php require_once('inc/headers/head.php'); ?>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <?php require_once('inc/headers/nav.php'); ?>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <?php require_once('inc/headers/brand.php'); ?>

            <div class="list-group list-group-flush">
                <a href="dashboard.php" class="list-group-item waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="student_registration.php" class="list-group-item  list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Register Students</a>
                <a href="student_management.php" class="list-group-item active list-group-item-action waves-effect">
                    <i class="fas fa-table mr-3"></i>Manage Students</a>
                <a href="student_profile.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i>Student Profile</a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">

            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">

                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">

                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="student_registration.php">Student Registration</a>
                        <span>/</span>
                        <span>Manage Student</span>
                    </h4>



                </div>

            </div>
            <!-- Heading -->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 mb-4">
                    <div class="studentShow"></div>
                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                            <h4 style="text-align:center;">REGISTERED STUDENT</h4>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-9 ">
                                    <form method="POST">
                                        <div style="text-align:center;">SEARCH</div>
                                        <input type="text" id="manageStudentSearch" class="form-control"
                                            name="manageStudentSearch" placeholder="Search by Name or Student ID" />
                                    </form>
                                </div>
                                <div class="col-sm-3">
                                    <div style="text-align:center;">LIMIT</div>
                                    <select class="custom-select mr-sm-2" id="student_manage_limit"
                                        name="student_manage_limit">

                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="100000">All</option>

                                    </select>
                                    <small id="infoStudentForm" class="form-text"></small>
                                </div>
                            </div>
                            <hr>
                            <!-- Table  -->
                            <div id="manageStudentRegistration"></div>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->



            </div>
            <!--Grid row-->


        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <?php require_once('inc/headers/footer.php'); ?>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <?php require_once('inc/headers/jsscripts.php'); ?>


</body>

</html>
<script>
$(document).ready(function() {
    showDefault();

    function showDefault() {
        var select = "show";
        var changeLimit = $('#student_manage_limit').val()
        $.ajax({
            url: 'inc/scripts/studentRegistrationScript.php',
            method: 'POST',
            data: {
                select,
                changeLimit
            },
            success: function(data) {
                $('#manageStudentRegistration').html(data);
            }
        })
    }
    //==========================================| LIMIT
    $('#student_manage_limit').change(function() {
        var student_manage_lim = $('#student_manage_limit').val();
        $.ajax({
            url: 'inc/scripts/studentRegistrationScript.php',
            method: 'POST',
            data: {
                student_manage_lim
            },
            success: function(data) {
                $('#manageStudentRegistration').html(data);
            }
        })
    })
    //===============================================|SEARCH TEXT
    $('#manageStudentSearch').keyup(function() {
        // var student_manage_lim = $('#student_manage_limit').val();
        var keysearch = $('#manageStudentSearch').val();
        $.ajax({
            url: 'inc/scripts/studentRegistrationScript.php',
            method: 'POST',
            data: {
                keysearch
            },
            success: function(data) {
                $('#manageStudentRegistration').html(data);
            }
        })
    });
    // =============================== SET STUDENT UPDATE ============================
    $(document).on('click', '.edit', function() {
        var id = $(this).attr('id');

        $.ajax({
            url: 'inc/scripts/studentRegistrationScript.php',
            method: 'POST',
            dataType: 'json',
            data: {
                id
            },
            success: function(data) {
                $('#student_ID').val(data.student_ID);
                $('#student_name').val(data.student_name);
                $('#student_gender').val(data.student_gender);
                $('#student_form').val(data.student_form);
                $('#student_health').val(data.student_health);
                $('#student_program').val(data.student_program);
                $('#parent_name').val(data.parent_name);
                $('#parent_contact').val(data.parent_contact);
                $('#parent_location').val(data.parent_location);

            }
        })
    });

    // =======================================| UPDATE STUDENT RECORDS

    $(document).on('click', '#updateStudent', function() {
        var updateStudentId = $('#student_ID').val();
        var updateStudentName = $('#student_name').val();
        var updateStudentGender = $('#student_gender').val();
        var updateStudentForm = $('#student_form').val();
        var updateStudentHealth = $('#student_health').val();
        var updateStudentProgram = $('#student_program').val();
        var updateStudentParentName = $('#parent_name').val();
        var updateStudentParentContact = $('#parent_contact').val();
        var updateStudentParentLocation = $('#parent_location').val();
        var updateStudent = $('#updateStudent').val();
        if (confirm(`You are about to make changes to ${updateStudentName} Records`)) {
            $.ajax({
                url: 'inc/scripts/studentRegistrationScript.php',
                method: 'POST',
                data: {
                    updateStudentId,
                    updateStudentName,
                    updateStudentGender,
                    updateStudentForm,
                    updateStudentHealth,
                    updateStudentProgram,
                    updateStudentParentName,
                    updateStudentParentContact,
                    updateStudentParentLocation,
                    updateStudent
                },
                success: function(data) {
                    $('.studentShow').html(data);
                }
            })
        } else {
            return false;
        }
    });
    $(document).on('click', '.close', function() {
        location.reload();
    })
    // ==========================| DELETE STUDENT
    $(document).on('click', '.del', function() {
        var delid = $(this).attr('id');

        if (confirm(`Are you sure you want to delete student ID ${delid} records`)) {
            $.ajax({
                url: 'inc/scripts/studentRegistrationScript.php',
                method: 'POST',
                data: {
                    delid
                },
                success: function(data) {
                    $('.studentShow').html(data);
                }
            })
        } else {
            return false;
        }
    });
})
</script>

<!--Modal Form Login with Avatar Demo-->

<div class="modal fade" id="managestudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UPDATE STUDENT RECORDS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php $_PHP_SELF; ?>" enctype="multipart/form-data">
                    <legend align="center">UPDATE STUDENT</legend>
                    <div class="studentShow"></div>
                    <div class="form-group row">
                        <label for="student_ID" class="col-sm-2 col-form-label">Student ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled id="student_ID" name="student_ID">
                            <small id="infoStudentID" class="form-text" style="color:red"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="student_name" class="col-sm-2 col-form-label">Student Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="student_name" name="student_name">
                            <small id="infoStudentName" class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="student_gender" class="col-sm-2 col-form-label">Student Gender</label>
                        <div class="col-sm-10">
                            <select class="custom-select mr-sm-2" id="student_gender" name="student_gender">

                                <option value="M">Male</option>
                                <option value="F">Female</option>

                            </select>
                            <small id="infoStudentGender" class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="student_form" class="col-sm-2 col-form-label">Student Form</label>
                        <div class="col-sm-10">
                            <select class="custom-select mr-sm-2" id="student_form" name="student_form">

                                <option value="Form_1">Form 1</option>
                                <option value="Form_2">Form 2</option>
                                <option value="Form_3">Form 3</option>

                            </select>
                            <small id="infoStudentForm" class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="student_health" class="col-sm-2 col-form-label">Student Health</label>
                        <div class="col-sm-10">
                            <select class="custom-select mr-sm-2" id="student_health" name="student_health">

                                <option value="healthy">Healthy</option>
                                <option value="partial">Partial</option>
                                <option value="bad">Bad</option>

                            </select>
                            <small id="infoStudentHealth" class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="student_program" class="col-sm-2 col-form-label">Student Program</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="student_program" name="student_program">
                            <small id="infoStudentProgram" class="form-text"></small>
                        </div>
                    </div>
                    <strong>
                        <marquee>
                            <p align="center" style="color:red">PARENT INFORMATION</p>
                        </marquee>
                    </strong>

                    <div class="form-group row">
                        <label for="parent_name" class="col-sm-2 col-form-label">Parent Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="parent_name" name="parent_name">
                            <small id="infoStudentParentName" class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="parent_contact" class="col-sm-2 col-form-label">Parent
                            Contact</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="parent_contact" name="parent_contact">
                            <small id="infoStudentParentcontact" class="form-text"></small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="parent_location" class="col-sm-2 col-form-label">Parent
                            Location</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="parent_location" name="parent_location">
                            <small id="infoStudentParentLocation" class="form-text"></small>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="registration_date" class="col-sm-2 col-form-label">Registration
                            Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="registration_date" name="registration_date">
                            <small id="infoStudentDate" class="form-text"></small>
                        </div>
                    </div> -->

                    <!-- <div class="form-group row">
                        <label for="student_Image" class="col-sm-2 col-form-label">Student Image</label>
                        <div class="custom-file col-sm-10">
                            <input type="file" class="custom-file-input" id="student_Image" name="student_Image">
                            <label class="custom-file-label" for="customFile">Browse Image</label>
                        </div>
                    </div> -->

                    <!-- <div align="center">
                        <button type="submit" name="submitBtn" id="submitBtn" value="submitBtn"
                            class="btn btn-primary col-md-6">Register</button>
                    </div> -->

                </form>
            </div>
            <div class="studentShow"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="updateStudent" name="updateStudent" value="updateStudent"
                    class="btn btn-primary">Update Student</button>
            </div>
        </div>
    </div>
</div>
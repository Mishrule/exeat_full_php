<!DOCTYPE html>
<html lang="en">

<?php require_once('inc/headers/head.php'); ?>

<body class="grey lighten-3">

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <?php require_once('inc/headers/nav.php'); ?>
        <!-- Navbar -->
        <div class="StaffShow"></div>
        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <?php require_once('inc/headers/brand.php'); ?>

            <div class="list-group list-group-flush">
                <a href="dashboard.php" class="list-group-item  waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="staff_registration.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Staff Registration</a>
                <a href="staff_management.php" class="list-group-item active list-group-item-action waves-effect">
                    <i class="fas fa-table mr-3"></i>Manage Staff</a>
                <a href="staff_profile.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i>Staff Profile</a>

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
                        <a href="staff_registration.php">Staff Registration</a>
                        <span>/</span>
                        <span>Staff Management</span>
                    </h4>

                </div>

            </div>
            <!-- Heading -->

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-12 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">
                            <h4 style="text-align:center;">REGISTERED STAFF</h4>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-9 ">
                                    <form method="POST">
                                        <div style="text-align:center;">SEARCH</div>
                                        <input type="text" id="manageStaffSearch" class="form-control"
                                            name="manageStaffSearch" placeholder="Search by Name or Staff ID" />
                                    </form>
                                </div>
                                <div class="col-sm-3">
                                    <div style="text-align:center;">LIMIT</div>
                                    <select class="custom-select mr-sm-2" id="staff_manage_limit"
                                        name="staff_manage_limit">

                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="100000">All</option>

                                    </select>
                                    <small id="infoStaffForm" class="form-text"></small>
                                </div>
                            </div>
                            <hr>
                            <!-- Table  -->
                            <div id="manageStaffRegistration"></div>

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
        var changeLimit = $('#staff_manage_limit').val()
        $.ajax({
            url: 'inc/scripts/staffRegistrationScript.php',
            method: 'POST',
            data: {
                select,
                changeLimit
            },
            success: function(data) {
                $('#manageStaffRegistration').html(data);
            }
        })
    }
    //==========================================| LIMIT
    $('#staff_manage_limit').change(function() {
        var staff_manage_lim = $('#staff_manage_limit').val();
        $.ajax({
            url: 'inc/scripts/staffRegistrationScript.php',
            method: 'POST',
            data: {
                staff_manage_lim
            },
            success: function(data) {
                $('#manageStaffRegistration').html(data);
            }
        })
    })
    //===============================================|SEARCH TEXT
    $('#manageStaffSearch').keyup(function() {
        // var Staff_manage_lim = $('#staff_manage_limit').val();
        var keysearch = $('#manageStaffSearch').val();
        $.ajax({
            url: 'inc/scripts/staffRegistrationScript.php',
            method: 'POST',
            data: {
                keysearch
            },
            success: function(data) {
                $('#manageStaffRegistration').html(data);
            }
        })
    })
    // ===============================================| SET UPDATE
    $(document).on('click', '.edit', function() {
        var staffID = $(this).attr('id');

        $.ajax({
            url: 'inc/scripts/staffRegistrationScript.php',
            method: 'POST',
            dataType: 'json',
            data: {
                staffID
            },

            success: function(data) {
                $('#Staff_ID').val(data.Staff_ID);
                $('#Staff_name').val(data.Staff_name);
                $('#Staff_position').val(data.Staff_position);
                $('#staffContact').val(data.staffContact);
                // console.log(data);
            }
        })
    })
    // =======================================| UPDATE Staff RECORDS

    $(document).on('click', '#updateStaff', function() {
        var updateStaffId = $('#Staff_ID').val();
        var updateStaffName = $('#Staff_name').val();
        var updateStaffPosition = $('#Staff_position').val();
        var updateStaffContact = $('#staffContact').val();
        var updateStaff = $('#updateStaff').val();
        if (confirm(`You are about to make changes to ${updateStaffName} Records`)) {
            $.ajax({
                url: 'inc/scripts/staffRegistrationScript.php',
                method: 'POST',
                data: {
                    updateStaffId,
                    updateStaffName,
                    updateStaffPosition,
                    updateStaffContact,
                    updateStaff
                },
                success: function(data) {
                    $('.StaffShow').html(data);

                }
            })
        } else {
            return false;
        }
    });
    // ============================| Reload |
    $(document).on('click', '.close', function() {
        location.reload();
    })

    // ==========================| DELETE STAFF
    $(document).on('click', '.del', function() {
        var delid = $(this).attr('id');

        if (confirm(`Are you sure you want to delete student ID ${delid} records`)) {
            $.ajax({
                url: 'inc/scripts/StaffRegistrationScript.php',
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

<div class="modal fade" id="managestaff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
    data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UPDATE STAFF RECORDS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <legend align="center">UPDATE STAFF</legend>
                    <div class="StaffShow"></div>
                    <div class="form-group row">
                        <label for="Staff_ID" class="col-sm-2 col-form-label">Staff ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" disabled id="Staff_ID" name="Staff_ID">
                            <small id="infoStaffID" class="form-text" style="color:red"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Staff_name" class="col-sm-2 col-form-label">Staff Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Staff_name" name="Staff_name">
                            <small id="infoStaffName" class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Staff_position" class="col-sm-2 col-form-label">Staff Position</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Staff_position" name="Staff_position">
                            <small id="infoStaffposition" class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staffContact" class="col-sm-2 col-form-label">Staff Contact</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staffContact" name="staffContact">
                            <small id="infoStaffContact" class="form-text"></small>
                        </div>
                    </div>

                </form>
            </div>
            <div class="StaffShow"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="updateStaff" name="updateStaff" value="updateStaff"
                    class="btn btn-primary">Update Staff</button>
            </div>
        </div>
    </div>
</div>
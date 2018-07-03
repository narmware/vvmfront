<?php
        include "header.php";
?>
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Stater Page
                <small>Welcome to VVM</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-upload"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> VVM</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Student</a></li>
                    <li class="breadcrumb-item active">Student Profile</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <h4>Student List</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Address</th>
                                        <th>Gendere</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Address</th>
                                        <th>Gendere</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Ritesh</td>
                                        <td>9th</td>
                                        <td>Pune</td>
                                        <td>Male</td>
                                        <td>9876543210</td>
                                        <td>ritesh@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
        include "footer.php";
?>
<!-- Jquery DataTable Plugin Js --> 
<script src="../assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="../assets/js/pages/tables/jquery-datatable.js"></script>

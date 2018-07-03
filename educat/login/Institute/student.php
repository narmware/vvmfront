<?php
        include "header.php";
?>
<link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

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
                        <h4>Student Profile</h4>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder=" Name of Student">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Student Address"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group"><br />
                                            <input type="text" class="form-control" placeholder="Class"><br />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <select class="form-control show-tick">
                                                <option>Male</option>                                            
                                                <option>Female</option>                                            
                                                <option>Trasngender</option>                                            
                                            </select>
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
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
<script src="../assets/js/pages/forms/basic-form-elements.js"></script> 



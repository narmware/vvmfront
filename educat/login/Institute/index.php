<?php
        include "header.php";
?>
<!-- Main Content -->
<section class="content file_manager">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard
                <small>Welcome to VVM</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> VVM</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Reports</strong> Reports</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="m_bar_chart"></div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="body">                        
                                    <p>Students</p>
                                    <h4 class="m-t-0">20</h4>                                
                                    <div class="progress m-t-10">
                                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                    <small class="info">of 50</small>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="body">
                                    <p>Class</p>
                                    <h4 class="m-t-0">2</h4>
                                    <div class="progress m-t-10">
                                        <div class="progress-bar l-blush" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                    </div>
                                    <small class="info">of 6</small>
                                </div>
                            </div>

                        </div>
                    </div>                    
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <a href="javascript:void(0);">
                            <div class="hover"><!--
                                <button type="button" class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>-->
                            </div>
                            <div class="icon">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">Students</p>
                                <small>Toatl Register : 20 <!--<span class="date text-muted">Nov 02, 2017</span>--></small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <a href="javascript:void(0);">
                            <div class="hover"><!--
                                <button type="button" class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>-->
                            </div>
                            <div class="icon">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">Male Students</p>
                                <small>Toatl Register : 10 <!--<span class="date text-muted">Nov 02, 2017</span>--></small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <a href="javascript:void(0);">
                            <div class="hover"><!--
                                <button type="button" class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>-->
                            </div>
                            <div class="icon">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">Female Students</p>
                                <small>Toatl Register : 10 <!--<span class="date text-muted">Nov 02, 2017</span>--></small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card">
                    <div class="file">
                        <a href="javascript:void(0);">
                            <div class="hover"><!--
                                <button type="button" class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>-->
                            </div>
                            <div class="icon">
                                <i class="zmdi zmdi-account"></i>
                            </div>
                            <div class="file-name">
                                <p class="m-b-5 text-muted">Class</p>
                                <small>Toatl Class : 10 <!--<span class="date text-muted">Nov 02, 2017</span>--></small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>


<?php
        include "footer.php";
?>

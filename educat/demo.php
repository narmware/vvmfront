
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vidyarthi Vigyan Manthan</title>
        <link rel="SHORTCUT ICON" href= "http://vvm.org.in/wp-content/uploads/2015/07/favicon1.ico"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
        <meta name="description" content="" />
        <meta name="keywords" content=""/>
        <meta name="google-site-verification" content="" />
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <link href="http://vvm.org.in/assets/css/styleclient.css" media="all" rel="stylesheet" type="text/css" />
        <link href="http://vvm.org.in/assets/flexslider.css" rel="stylesheet" type="text/css" />
        <script src="http://vvm.org.in/assets/jquery.flexslider-min.js"></script>
        <script src="http://vvm.org.in/assets/jquery.totemticker.min.js"></script>
        <link href="http://vvm.org.in/assets/time/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    easing: "swing",
                    slideshowSpeed: 5000,
                    speed: 600,
                });
            });
            $(function () {
                $('#vertical-ticker').totemticker({
                    row_height: '230px',
                    mousestop: true,
                    interval: 2000,
                });
            });
            function hide_success()
            {
                setTimeout(function () {
                    $("#success").fadeOut("slow", function () {
                        $("#success").remove();
                    });

                }, 2000);
            }
            $(document).ready(function () {
                setInterval('blink()', 1000);
            });
            function blink() {
                $("#downloadApp").toggleClass("backgroundRed");
                $("#strip").toggleClass("backgroundRed");
            }
        </script>
        <style>
		h4.notice{color:red;}
		th { text-align: center !important;}
		.row {margin-right: 0px !important;  margin-left: 0px !important;}
            .backgroundRed{background-color: blue;}
            .mock{text-align:left;border-collapse:collapse;}
            .mock td{border: solid 1px rgba(255, 255, 255, 0.16);padding: 5px;font-size: 12px;}
            .insbut {color: #fff;font-size: 20px;border: none;background-color: #f57f17;font-family: font3;padding: 10px 60px;border-radius: 15px;margin-top: 5px;}
            .insbut:hover{cursor: pointer}
			span.new{
				    color: red;
    font-size: 12px;
    margin-top: -5px;
    float: right;
    position: absolute;
    margin-left: 3px;
    font-weight: 700;
			}
			@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.new{
	text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 0.6s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate;
}
#examplej thead, #examplej th {
    background-color: #93cddb;
	vertical-align:middle;
}
#examplej td{vertical-align:middle;}

        </style>
    </head>
    <script>
        jQuery(document).ready(function ($) {
            $(window).load(function () {
                $('#preloader').fadeOut('slow', function () {
                    $(this).remove();
                })
            })
        });
    </script>
    <div class="js">
        <body>
            
           
                <div class="anmid">








                    <link href="http://vvm.org.in/assets/student/bootstrap.css" type="text/css" rel="stylesheet" />
                    <link href="http://vvm.org.in/assets/student/bootstrap.min.css" type="text/css" rel="stylesheet" />
                    <link href="http://vvm.org.in/assets/student/style.css" type="text/css" rel="stylesheet" />
                    <link href="http://vvm.org.in/assets/student/owl.carousel.css" rel="stylesheet">
                    <link href="http://vvm.org.in/assets/student/owl.theme.css" rel="stylesheet">
                    <link href="http://vvm.org.in/assets/student/animate.min.css" rel="stylesheet" />
                    <script src="http://vvm.org.in/assets/student/bootstrap.min.js" type="text/javascript"></script>
                    <script src="http://vvm.org.in/assets/student/owl.carousel.js" type="text/javascript"></script>
                    <script src="http://vvm.org.in/assets/student/wow.min.js" type="text/javascript"></script>
                    <script src="http://vvm.org.in/assets/student/index.js" type="text/javascript"></script>
                    <script src="http://vvm.org.in/assets/student/all.js" type="text/javascript"></script>
                    <script>
        $(document).ready(function () {
           toggletabel();
            $(".national_camp_qualifiers_wrapper_show").click(function () {
                $(".content_state_camp_winners_show").hide();
                $(".content_national_camp_qualifiers_show").toggle();
                $("#state_camp_winners_hide").hide();
                $("#state_camp_winners_show").show();
                $("#national_camp_qualifiers_hide").toggle();
                $("#national_camp_qualifiers_show").toggle();
            });
			$(".national_camp_level_wrapper_show").click(function () {
                $(".content_state_camp_winners_show").hide();
                $(".content_national_camp_level_show").toggle();
                $("#state_camp_winners_hide").hide();
                $("#state_camp_winners_show").show();
                $("#national_camp_level_hide").toggle();
                $("#national_camp_level_show").toggle();
            });
			//$(".national_camp_level_wrapper_show").trigger("click");
        });
		function toggletabel(){
			$(".newsection").slideToggle();
			$(".but").toggleClass('opendiv');
			$(".but i").removeClass("glyphicon glyphicon-plus").addClass("glyphicon glyphicon-minus");
			$(".but.opendiv i").removeClass("glyphicon glyphicon-minus").addClass("glyphicon glyphicon-plus");
		}
                    </script>
                    <style>
					.newsection{display:none;}
                        #example{width:100%;margin:auto}
                        #example thead,#example th{background-color: #93cddb}
                        #example tbody th{width:5% !important}
                        #example tbody td{width:45% !important}
                        #example1{width:100%;margin:auto}
                        #example1 thead,#example th{background-color: #93cddb}
                        #example1 tbody th{width:4% !important}
                        #example1 tbody td{width:29% !important}
                        #minus_hide{display: none}
                        #plus_hide{display: none}
                        #tog_hide{display: none}
                        #state_camp_winners_hide{display: none}
                        #national_camp_qualifiers_hide{display: none}
						#national_camp_level_hide{display: none}
                        #all_results_hide{display: none}
                    </style>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                           <!-- <div style="text-align:center;background-color: yellowgreen;color: #fff;font-weight: normal;padding: 13px;border-radius: 5px;text-align: center;">
                                <b>National Level Camp will be conducted in Mumbai on 12 & 13 May, 2018 at DAE CONVENTION CENTRE, BARC COLONY, ANUSHAKTINAGAR, MUMBAI-94.</b>
                            </div>-->
                        </div>
						
						<button onClick="toggletabel()" class="but opendiv">
						<i id="icontoggle" class="glyphicon glyphicon-plus"></i>
						Research Institute/Lab Visit for District Level Winners</button>
						<div class="newsection">
						<h4 class="notice">*You have to confirm your participation one week prior to the visit. Link will be disabled before 7 days.</h4>
						<h4 class="notice">*Confirmation of visit will be valid only for scheduled visits.</h4>
						<table id="examplej" class="table table-bordered table-condensed table-stripped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center">Sl.No.</th>
												<th style="text-align:center">STATE/UT</th>
                                                <th style="text-align:center">Address of Research Institute / Lab</th>
												<th style="text-align:center">Day & Date</th>
												<th style="text-align:center">Name of Coordinator</th>
												<th style="text-align:center">Contact Details</th>
												<th style="text-align:center">Confirm Your Participation</th>
                                            </tr>
										</thead>
										<tbody>
																					<tr>
												<td>1</td>
												<td>JHARKHAND</td>
												<td>CSIR-Central Institute of Mining and Fuel Research, Barwa Road, Dhanbad, Jharkhand</td>
												<td style="width:10%">09-07-2018</td>
												<td>Dr. J. K. Pandey</td>
												<td>9431727134</td>
												
												<td><a class="anbuton1" href="http://vvm.org.in/home/confirm_your_participation/&id=1&state=16">Link</a></td>
											</tr>
																					<tr>
												<td>2</td>
												<td>PUNJAB</td>
												<td>Centre Institute of Plastic Engineering and Technology (CIPET): Centre for Skilling and Technical Support (CSTS), P.O. Rayon & Silk Mills, Adjacent to GND University,
Amritsar, Punjab</td>
												<td style="width:10%">13-07-2018</td>
												<td>Sh. Ajay Sharma</td>
												<td>9914377137</td>
												
												<td><a class="anbuton1" href="http://vvm.org.in/home/confirm_your_participation/&id=2&state=28">Link</a></td>
											</tr>
																					<tr>
												<td>3</td>
												<td>TAMIL NADU</td>
												<td>Salim Ali Centre for Ornithology & Natural History
Anaikatti, Coimbatore, 
Tamil Nadu - 641108</td>
												<td style="width:10%">11-07-2018</td>
												<td>Sh. G. Kannabiran</td>
												<td>9942467764</td>
												
												<td><a class="anbuton1" href="http://vvm.org.in/home/confirm_your_participation/&id=3&state=31">Link</a></td>
											</tr>
																					<tr>
												<td>4</td>
												<td>TAMIL NADU</td>
												<td>National Research Centre for Banana
Somarasempettai - Thogaimalai Rd, Podavur, 
Tamil Nadu - 639103</td>
												<td style="width:10%">21-07-2018</td>
												<td>Sh. G. Kannabiran</td>
												<td>9942467764</td>
												
												<td><a class="anbuton1" href="http://vvm.org.in/home/confirm_your_participation/&id=4&state=31">Link</a></td>
											</tr>
																					<tr>
												<td>5</td>
												<td>TAMIL NADU</td>
												<td>Central Leather Research Institute
Adyar, Chennai,
Tamil Nadu - 600020</td>
												<td style="width:10%">27-07-2018</td>
												<td>Sh. G. Kannabiran</td>
												<td>9942467764</td>
												
												<td><a class="anbuton1" href="http://vvm.org.in/home/confirm_your_participation/&id=5&state=31">Link</a></td>
											</tr>
																					<tr>
												<td>6</td>
												<td>TAMIL NADU</td>
												<td>CSIR-Central ElectroChemical Research Institute CECRI
College Road, Sivaganga, Karaikudi, 
Tamil Nadu - 630003</td>
												<td style="width:10%">10-08-2018</td>
												<td>Sh. G. Kannabiran</td>
												<td>9942467764</td>
												
												<td><a class="anbuton1" href="http://vvm.org.in/home/confirm_your_participation/&id=6&state=31">Link</a></td>
											</tr>
																				</tbody>
						</table>
						<h4 class="notice">*No TA will be provided. Students will have to meet the travel expenses at their own.</h4>				
						</div>
						
						
						
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!--<a href='http://vvm.org.in/auth/login'><button type="button" class="btn btn-info view-profile" style="background: darkorange;border-color:darkorange">-->
                            <!--        <span style="margin-left: 25px">DOWNLOAD MERIT & APPRECIATION CERTIFICATES</span>-->
                            <!--    </button></a>-->
							<button id="national_level_camp1" type="button" class="btn btn-info view-profile national_camp_level_wrapper_show" data-toggle="collapse" data-target="#national_level_camp" style="background: darkorange;border-color:darkorange">
                                <span class="pull-left"><i id="national_camp_level_show" class="glyphicon glyphicon-plus"></i><i id="national_camp_level_hide" class="glyphicon glyphicon-minus"></i></span>
                                <span style="margin-left: 25px">NATIONAL CAMP RESULT</span>
                            </button>
                            <div id="national_level_camp" class="collapse content_national_camp_level_show">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
                                    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">                                   
                                    <table id="example" class="table table-bordered table-condensed table-stripped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;width:5%">Sl.No.</th>
                                                <!--<th style="text-align:center;width:45%">NATIONAL CAMP</th>-->
												<th style="text-align:center;width:45%">NATIONAL CAMP</th>
                                                <th style="text-align:center;width:5%">Sl.No.</th>
												<th style="text-align:center;width:45%">NATIONAL CAMP</th>
                                                <!--<th style="text-align:center;width:45%">NATIONAL CAMP</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
											<tr>
												<th>1</th>
                                                <td><a href="http://vvm.org.in/uploads/results/VIDYARTHI VIGYAN MANTHAN zonal-result.pdf" target="_blank" title="RESULT">RESULT (ZONAL LEVEL WINNERS)</a></td>
											
												<th>2</th>
                                                <td><a href="http://vvm.org.in/uploads/results/VIDYARTHI VIGYAN MANTHAN HIMALAYANS group-result.pdf" target="_blank" title="RESULT">RESULT (NATIONAL WINNERS - HIMALAYANS)</a></td>
											</tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                           
                            
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </body>
    </div>
</html>
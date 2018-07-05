<?php
        include "header.php";
        include "common.php";
        
?>
<!-- Bootstrap Select Css -->
<link href=".e./assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<style>
.bootstrap-select button{
        display:none;
}
.bootstrap-select {
        border:none;
}

</style>
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
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> VVM</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Institute</a></li>
                    <li class="breadcrumb-item active">Institute Profile</li>
                </ul>                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <h4>Institute Profile</h4>
                        
                        <input type="hidden" id="inst_id" name="inst_id" value="<?php echo $_SESSION['inst_id'];?>">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="inst_name" name="inst_name" value="<?php echo $details['inst_name'];?>" class="form-control" placeholder="School Name">
                                            <span class="alert text-center hide " id="msginst">School Name Should Not Blank</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" style="width:105%;" >
                                              <select id="state" name="state" class="form-control show-tick" data-live-search="true"  >
                                                    <option value="">- Select State -</option> 
                                                        <?php
                            if($details['state_id']!="")                            
                            {                            		
                                                        populateComboSelValue ("state_master","state_name","state_id"," where status=1 order by state_id", $details['state_id'],$conn);
                            }                            
                            else
                            {
                                populateComboSelValue ("state_master","state_name","state_id"," where status=1 order by state_id",0,$conn);
                            }
                                                        ?>
                                              </select>
                                            <span class="alert text-center hide " id="msgstate">Select State</span>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" style="width:105%;">
                                        <select class="form-control" id="distrct" name="distrct" style="padding: 10px 18px 10px 18px !important;" >
                                                          <option value="">- Select District -</option> 
                   <?php		
                            populateComboSelValue ("district_master","dist_name","dist_id"," where state_id=".$details['state_id']." and status=1 order by dist_id",$details['dist_id'],$conn);
                   ?>

                                        </select>
                                            <span class="alert text-center hide " id="msgdist">Select District</span>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" style="width:105%;">
                                                <select id="city" name="city" class="form-control" required data-bv-notempty-message="Select City / Taluka Name"  >
                                                                    <option value="">- Select Taluka / City -</option> 
                                                                   <?php		
                                                                      populateComboSelValue ("city_master","city_name","city_id"," where dist_id=".$details['dist_id']." and status=1 order by city_id",$details['city_id'],$conn);
                                                                   ?>     
                                                                     
                                                </select>
                                            <span class="alert text-center hide " id="msgcity">Select City</span>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="tel" onkeypress="return isNumberKey(event)" style="margin-top:11px;" maxlength="6" class="form-control" id="pincode" name="pincode" value="<?php echo $details['pincode'];?>" placeholder="Pincode">
                                              <span class="alert text-center hide " id="msgpincode">Pincode Should Not Blank</span>
                                              <span class="alert text-center hide " id="msgpincodelen">Pincode Should Be 6 Digit Only</span>

                                        </div>
                                    </div>




                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" id="address" name="address" class="form-control no-resize" placeholder="Institute Address" style="border:1px solid #E3E3E3;border-radius:15px;"><?php echo $details['address'];?></textarea>
                                              <span class="alert text-center hide " id="msgaddress">Address Should Not Blank</span>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="pname" name="pname" value="<?php echo $details['nameofprincipal'];?>" class="form-control" placeholder="Name Of Principal">
                                              <span class="alert text-center hide " id="msgpname">Principal Name Should Not Blank</span>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="coordinator" name="coordinator" value="<?php echo $details['nameofexamcoordinator'];?>" placeholder="Name Of Exam Coordinator">
                                              <span class="alert text-center hide " id="msgcoordinator">Coordinator Name Should Not Blank</span>

                                        </div>
                                    </div>                                    
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="mobile" name="mobile" value="<?php echo $details['inst_mobile'];?>" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Mobile Number">
                                              <span class="alert text-center hide " id="msgmobile">Mobile or Telephone number Should Not Blank</span>
                                              <span class="alert text-center hide " id="msgmobilelen">Mobile Number Should be 10 Digit Only</span>
                                              <span class="alert text-center hide " id="msgmobiletellen">Telephone Number Should be 11 Digit Only (include code)</span>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="email" name="email" value="<?php echo decrypt_url($details['inst_email']);?>" class="form-control" placeholder="E-mail" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round" id="submit" onclick="return InstituteUpdate()">Save Changes</button><br>
                                        <div class="alert text-center squareright hide" id="msgcorrect">Information Update Successfully</div>
                                        <div class="alert text-center square hide" id="msgerror">Error in Updation</div>
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
<script src="..w/assets/js/pages/forms/basic-form-elements.js"></script> 

  <script type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
  
  
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement : 'top'
    });

     $("#state").change(function()
    {
   // alert();
        $("#distrct").val("");
        $("#city").html('<option value="">- Select Taluka / City -</option>');
        var id=$(this).val();
        //alert(id)
        $.post('load_dropdown.php',{state_id:id},function(res){//alert(res);
                    $("#distrct").html(res);
        });
    });
    $("#distrct").change(function()
    {
        $("#city").html('<option value="">- Select Taluka / City -</option>');
        var id=$(this).val();
        $.post('load_dropdown.php',{dist_id:id},function(res){
            $("#city").html(res);
        });
    });

});

function InstituteUpdate(){
        flag=1;       
         
        if (!$('#msgerror').hasClass("hide")) {
                $('#msgerror').addClass("hide");
        };

        if (!$('#msgcorrect').hasClass("hide")) {
                $('#msgcorrect').addClass("hide");
        };

        if (!$('#msginst').hasClass("hide")) {
                $('#msginst').addClass("hide");
        };
        if (!$('#msgstate').hasClass("hide")) {
                $('#msgstate').addClass("hide");
        };
        if (!$('#msgdist').hasClass("hide")) {
                $('#msgdist').addClass("hide");
        };
        if (!$('#msgcity').hasClass("hide")) {
                $('#msgcity').addClass("hide");
        };
        if (!$('#msgpincode').hasClass("hide")) {
                $('#msgpincode').addClass("hide");
        };
        if (!$('#msgpincodelen').hasClass("hide")) {
                $('#msgpincodelen').addClass("hide");
        };
        if (!$('#msgaddress').hasClass("hide")) {
                $('#msgaddress').addClass("hide");
        };
        if (!$('#msgpname').hasClass("hide")) {
                $('#msgpname').addClass("hide");
        };
        if (!$('#msgcoordinator').hasClass("hide")) {
                $('#msgcoordinator').addClass("hide");
        };
        if (!$('#msgmobile').hasClass("hide")) {
                $('#msgmobile').addClass("hide");
        };
        if (!$('#msgmobilelen').hasClass("hide")) {
                $('#msgmobilelen').addClass("hide");
        };
        if (!$('#msgmobiletellen').hasClass("hide")) {
                $('#msgmobiletellen').addClass("hide");
        };

    document.getElementById('submit').disabled = true; 
  var inst_name = $.trim(document.getElementById('inst_name').value);
  var pname = $.trim(document.getElementById('pname').value);
  var coordinator = $.trim(document.getElementById('coordinator').value);
  var inst_id=$.trim(document.getElementById('inst_id').value);

  var mobile = $.trim(document.getElementById('mobile').value);
  var address = $.trim(document.getElementById('address').value);
  var pincode = $.trim(document.getElementById('pincode').value);
  
  var state = '';
        var city = '';
        var dist = '';
        var state_id = 0;
        var city_id = 0;
        var dist_id = 0;

        state = $("#state option:selected").text();
        dist = $("#distrct option:selected").text();
        city = $("#city option:selected").text();
        state_id = $("#state option:selected").val();
        dist_id = $("#distrct option:selected").val();
        city_id = $("#city option:selected").val();

        //alert();
        if(inst_name=="")
        {
                flag=0;
                $('#msginst').removeClass("hide"); 
        }

        if(pname=="")
        {
                flag=0;
                $('#msgpname').removeClass("hide"); 
        }
        if(coordinator=="")
        {
                flag=0;
                $('#msgcoordinator').removeClass("hide"); 
        }
        if(address=="")
        {
                flag=0;
                $('#msgaddress').removeClass("hide"); 
        }

        if(state_id=="")
        {
                flag=0;
                $('#msgstate').removeClass("hide"); 
        }
        if(dist_id=="")
        {
                flag=0;
                $('#msgdist').removeClass("hide"); 
        }
        if(city_id=="")
        {
                flag=0;
                $('#msgcity').removeClass("hide"); 
        }
        if(pincode=="")
        {
                flag=0;
                $('#msgpincode').removeClass("hide"); 
        }
        if(pincode!="")
        {
                if(pincode.length!=6)
                {
                        flag=0;
                        $('#msgpincodelen').removeClass("hide");
                }         
        }
        if(mobile=="")
        {
                flag=0;
                $('#msgmobile').removeClass("hide"); 
        }
        if(mobile!="")
        {
                if(mobile.length!=11)
                {
                        flag=0;
                        $('#msgmobiletellen').removeClass("hide");                 
                }

        }



        if(flag==1)
        {
        
                $.post('../Validation/Institute-update.php',
                  {

                    mobile: mobile,
                    address: address,
                    pname:pname,
                    coordinator:coordinator,
                    state: state,
                    distrct: dist,
                    city: city,
                    state_id: state_id,
                    distrct_id: dist_id,
                    city_id: city_id,
                    pincode: pincode,
                    inst_id: inst_id,
                    inst_name: inst_name,
                  },
                  function(res)
                  { //alert(res);
                    var string = $.trim(res);
                    if (string == "TRUE")
                    {
                        $("#msgcorrect").removeClass("hide");
		        setTimeout(function() {
			window.location="edit-profile.php";
            		}, 2000);

                      

                    }
                    else
                    {
                      $("#msgerror").removeClass("hide");
                    }
                  });
        
        
        }


    document.getElementById('submit').disabled = false;
    return false; 
}
</script>
<style>
.alert{
color:red;
font-weight:bold;
font-size:0.8em;
}
.square{
    background-color:red;
    color:white;font-weight:bold;
}
.squareright{
    background-color:green;
    color:white;font-weight:bold;

}
.alert2{
        margin-top:-40px;
        margin-bottom:20px !important;
        color:red;
        font-weight:bold;
        font-size:0.8em;
}
.hide{
        display:none;
}
</style>


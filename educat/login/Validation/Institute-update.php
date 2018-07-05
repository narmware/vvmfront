<?php
        $sql="";
        $query="";
        include "../lib/connect.php";
        
        if(isset($_POST))
        {
                $sql="UPDATE `InstituteMaster` SET `inst_name`='".$_POST['inst_name']."',`city`='".$_POST['city']."', `state`='".$_POST['state']."', `district`='".$_POST['distrct']."', `city_id`=".$_POST['city_id'].",`state_id`=".$_POST['state_id'].",`dist_id`=".$_POST['distrct_id'].", `pincode`=".$_POST['pincode'].", `address`='".$_POST['address']."', `nameofprincipal`='".$_POST['pname']."', `nameofexamcoordinator`='".$_POST['coordinator']."', `inst_mobile`='".$_POST['mobile']."' WHERE `inst_id`=".$_POST['inst_id']." ";
                $query=mysqli_query($conn,$sql);
                if($query)
                        echo "TRUE";
                else
                        echo "FALSE ".$sql;
        }



?>

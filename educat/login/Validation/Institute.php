<?php
    $sql="";
    $query="";
    include "../lib/connect.php";
            if(isset($_POST))
            {
                $sql="select * from InstituteMaster where `inst_email`='".encrypt_url($_POST['email'])."' ";
                $query=mysqli_query($conn,$sql);
                $rows=mysqli_num_rows($query);
                if($rows>0)
                {
                    echo "PRESENT";
                }
                else
                {
                 //   if(isset($_POST))
                    {
                        $sql="INSERT INTO `InstituteMaster`(`inst_name`, `inst_email`, `password`) VALUES ('".($_POST['name'])."','".encrypt_url($_POST['email'])."', '".encrypt_url($_POST['password'])."')";
                        $query=mysqli_query($conn,$sql);
                        if($query)
                            echo "TRUE";
                        else
                            echo "FALSE 2".$sql;
                    }
                }

            }

?>

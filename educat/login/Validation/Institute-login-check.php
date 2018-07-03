<?php
    
    include "../lib/connect.php";
    
    $sql="select * from InstituteMaster where inst_email='".mysqli_real_escape_string($conn,encrypt_url($_POST['username']))."' and password='".mysqli_real_escape_string($conn,encrypt_url($_POST['password']))."' ";
    $query=mysqli_query($conn,$sql);

    $rows=mysqli_num_rows($query);
    if($rows>0)
    {
        $row=mysqli_fetch_array($query);
        $_SESSION['inst_id']=$row['inst_id'];
        $_SESSION['login']          = 1;
        $_SESSION['login_hash']     = hash("sha1", $row['inst_email'] . $row['inst_id']);
        echo "TRUE";
    }
    else
    {
            echo "FALSE";
    }
?>

<?php
session_start(); 
        include "../config.php";
        include "../lib/connect.php";
date_default_timezone_set('Asia/Kolkata');
?>
<?php
if ($_REQUEST['selVal']<>"")
{
	$state_id=$_REQUEST['state_id'];
	$dist_id=$_REQUEST['dist_id_chk'];
	$city_id=$_REQUEST['city_id_chk'];
}
if(isset($_REQUEST['dist_id']))
{
	$sqla="select city_id,city_name from city_master where dist_id='".$_REQUEST['dist_id']."' and status=1 order by city_id";
	$resa=mysqli_query($conn,$sqla);
	$rowa=mysqli_num_rows($resa);
	if ($rowa>0)
	{
		echo '<option value="">- Select Taluka / City -</option>';
		while ($rss=mysqli_fetch_array($resa))
		{
			if ($_REQUEST['selVal']<>"")
			{
				if ($rss['city_id']==$city_id)
				{
					echo '<option value="'.$rss['city_id'].'" selected>'.$rss['city_name'].'</option>';
				}
				else
				{
					echo '<option value="'.$rss['city_id'].'">'.$rss['city_name'].'</option>';
				}
			}
			else
			{
				echo '<option value="'.$rss['city_id'].'">'.$rss['city_name'].'</option>';
			}
		}
	}
	else
	{
		echo '<option value="">- Select Taluka / City -</option>';
	}
}
else if(isset($_REQUEST['state_id']))
{
	$sqla="select dist_id,dist_name from district_master where state_id='".$_REQUEST['state_id']."' and status=1 order by dist_id";
	$resa=mysqli_query($conn,$sqla);
	$rowa=mysqli_num_rows($resa);
	if ($rowa>0)
	{
		echo '<option value="">- Select District -</option>';
		while ($rss=mysqli_fetch_array($resa))
		{
			if ($_REQUEST['selVal']<>"")
			{
				if ($rss['dist_id']==$dist_id)
				{
					echo '<option value="'.$rss['dist_id'].'" selected>'.$rss['dist_name'].'</option>';
				}
				else
				{
					echo '<option value="'.$rss['dist_id'].'">'.$rss['dist_name'].'</option>';
				}
			}
			else
			{
				echo '<option value="'.$rss['dist_id'].'">'.$rss['dist_name'].'</option>';
			}		
		}
	}
	else
	{
		echo '<option value="">- Select District  -</option>';
	}
}
?>

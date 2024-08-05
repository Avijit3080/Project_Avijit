<?php
    
    $name = "";
    $address = "";
    $phone = "";
    $gender = "";
    $fname = "";
    $mname = "";
    $gphone = "";
    $idcard = "";
    $landmark = "";
    $date = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect = mysqli_connect("localhost","root","","student_registration");
}catch (Exception $ex){
	echo 'Error';
}

function getPosts()
{
	$posts = array();
	
	$posts[0] = $_POST['name'];
	$posts[1] = $_POST['address'];
	$posts[2] = $_POST['phone'];
	$posts[3] = $_POST['gender'];
	$posts[4] = $_POST['fname'];
	$posts[5] = $_POST['mname'];
	$posts[6] = $_POST['gphone'];
	$posts[7] = $_POST['idcard'];
	$posts[8] = $_POST['landmark'];
	$posts[9] = $_POST['dob'];
	return $posts;
}

//Search

if(isset($_POST['search']))
{
	$data = getPosts();
	$search_Query = "SELECT * FROM personal_details1 WHERE idcard = '$data[7]'";

	$search_Result = mysqli_query($connect, $search_Query);

	if($search_Result)
	{
		if(mysqli_num_rows($search_Result))
		{
			while($row = mysqli_fetch_array($search_Result))
			{
				
				$name  = $row['name'];
				$address  = $row['address'];
				$phone  = $row['phone'];
				$gender  = $row['gender'];
			    $fname  = $row['fname'];
				$mname  = $row['mname'];
				$gphone  = $row['gphone'];
				$idcard  = $row['idcard'];
				$landmark  = $row['landmark'];
			    $date  = $row['dob'];
			}
		}else{
			echo "<script>alert('No Records Found !!!')</script>";
        echo "<script>window.open('search1.php','_self')</script>";
		}
	}else{
		echo "<script>alert('Error !!!')</script>";
        echo "<script>window.open('search1.php','_self')</script>";
	}
}

//update

if(isset($_POST['update']))
{
	$data = getPosts();
	$update_Query = "UPDATE personal_details1 SET name='$data[0]', address='$data[1]', phone='$data[2]', gender='$data[3]', fname='$data[4]', mname='$data[5]', gphone='$data[6]', idcard='$data[7]', landmark='$data[9]', dob='$data[9]' WHERE idcard='$data[7]'";
	try{
		$update_Result = mysqli_query($connect, $update_Query);

		if($update_Result)
		{
			if(mysqli_affected_rows($connect)>0)
			{
				echo "<script>alert('New Data Updated !!!')</script>";
        echo "<script>window.open('search1.php','_self')</script>";
			}
			else
			{
				echo "<script>alert('No New Data Updated !!!')</script>";
        echo "<script>window.open('search1.php','_self')</script>";
			}
		}
	}catch(Exception $ex){
		echo 'Error Update'.$ex->getMessage();
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Search Personal Details
	</title>
	<script type="text/javascript">
		function validation(){
			var a = document.getElementById('A1').value;
			if(isNaN(document.myform.idcard.value)){
				document.getElementById('A2').innerHTML=alert("Registration Number Error Input");
				document.getElementById('A2').innerHTML="**Registration Number Error Input";
				return false;
			}
			if(a==""){
				document.getElementById('A2').innerHTML=alert("Please mention Registration Number");
				document.getElementById('A2').innerHTML="**Please mention Registration Number";
				return false;
			}
		}
	</script>
	<style type="text/css">
		h1.A{
               text-align: center;
               color: yellow;
               text-shadow: 10px 10px 10px red;
               font-family: algerian;
          }
          h3{
          	text-align: center;
          	color: white;
          	text-shadow: 10px 10px 10px black;
          	font-family: arialblack;
          	font-weight: bold;
          }
           form.C{
              padding-top: 5px; 
              margin: 10px;
          }
          dialog.D{
               font-size: 20px;
               font-weight: bold;
               position: top;
               background-image: url('img7.png');
               text-align: left;
               border-width: 5px;
          }
          input.A{
               width: 200px;
               height: 20px;
               border: inset;
               font-size: 18px;

          }
          input.B{
               text-align: center;
               font-size: 20px;
          }
          .A12{
          	cursor: pointer;
          }
          #A2{
          	color: red;
          	text-align: center;
          }
	</style>
</head>
<body background="kk.png">
	<center>
		<h1 class="A">NATIONAL COLLEGE OF ENGINEERING</h1><br>
		<h3>Search Student Personal Details</h3>
		<form action="search1.php" name="myform" method="POST" class="C" onsubmit="return validation()">
		<dialog open class="D">
		<center>H.S. Registration Number<br><input type="text" class="A" name="idcard" id="A1" value="<?php echo $idcard;?>" ></center><br><span id="A2"></span><br>
		<label>Name&nbsp;&nbsp;:</label><input type="text" class="A" name="name"  value="<?php echo $name;?>">
		<label>&nbsp;&nbsp;Address&nbsp;&nbsp;:</label><input type="text" class="A" name="address"  value="<?php echo $address;?>"><br><br>
				<label>Phone&nbsp;&nbsp;:</label><input type="number" class="A" name="phone"  value="<?php echo $phone;?>">
		<label>&nbsp;&nbsp;Gender&nbsp;&nbsp;:</label><input type="text" class="A" name="gender"  value="<?php echo $gender;?>"><br><br>
		<label>Father's Name&nbsp;&nbsp;:</label><input type="text" class="A" name="fname" value="<?php echo $fname;?>">
		<label>Mother's Name&nbsp;&nbsp;:</label><input type="text" class="A" name="mname"  value="<?php echo $mname;?>"><br><br>
		<label>Guardian Phone&nbsp;&nbsp;:</label><input type="number" class="A" name="gphone"  value="<?php echo $gphone;?>">
		
		<label>Landmark&nbsp;&nbsp;:</label><input type="text" class="A" name="landmark"  value="<?php echo $landmark;?>"><br><br>
		<label>Date Of Birth&nbsp;&nbsp;:</label><input type="date" class="A" name="dob"  value="<?php echo $date;?>"><br><br>
		
		<div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="Modify Data" class="B">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="search" value="Search" class="B">
		</div><br>
		<center><a href="searchmodify1.php" target="_blank" class="A12"><font color="red">Check Academic Details</font></a></center>
	</dialog>
	</form>
</table>
</center>
</body>
</html>

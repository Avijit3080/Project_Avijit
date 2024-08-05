<?php


    $idcard = "";
    $year10 = "";
    $year12 = "";
    $school10 = "";
    $school12 = "";
    $board10 = "";
    $board12 = "";
    $percentage = "";
    $eng = "";
    $beng = "";
    $phy = "";
    $chem = "";
    $maths = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect = mysqli_connect("localhost","root","","student_registration");
}catch (Exception $ex){
	echo 'Error';
}

function getPosts()
{
	$posts = array();
	
	$posts[0] = $_POST['idcard'];
	$posts[1] = $_POST['year10'];
	$posts[2] = $_POST['year12'];
	$posts[3] = $_POST['school10'];
	$posts[4] = $_POST['school12'];
	$posts[5] = $_POST['board10'];
	$posts[6] = $_POST['board12'];
	$posts[7] = $_POST['percentage'];
	$posts[8] = $_POST['eng'];
	$posts[9] = $_POST['beng'];
	$posts[10] = $_POST['phy'];
	$posts[11] = $_POST['chem'];
	$posts[12] = $_POST['maths'];
	return $posts;
}

//Search

if(isset($_POST['search']))
{
	$data = getPosts();
	$search_Query = "SELECT * FROM academic_details2 WHERE idcard = '$data[0]'";

	$search_Result = mysqli_query($connect, $search_Query);

	if($search_Result)
	{
		if(mysqli_num_rows($search_Result))
		{
			while($row = mysqli_fetch_array($search_Result))
			{
				$idcard = $row['idcard'];
				$year10 = $row['year10'];
    			$year12=$row['year12'];
    			$school10=$row['school10'];
    			$school12=$row['school12'];
    			$board10=$row['board10'];
    			$board12=$row['board12'];
    			$percentage=$row['percentage'];
    			$phy=$row['phy'];
    			$chem=$row['chem'];
    			$maths=$row['maths'];
    			$eng=$row['eng'];
    			$beng=$row['beng'];
			}
		}else{
			echo "<script>alert('No Records Found !!!')</script>";
        echo "<script>window.open('search2.php','_self')</script>";
		}
	}else{
		echo "<script>alert('Error !!!')</script>";
        echo "<script>window.open('search2.php','_self')</script>";
	}
}

//update

if(isset($_POST['update']))
{
	$data = getPosts();
	$update_Query = "UPDATE academic_details2 SET idcard='$data[0]', year10='$data[1]', year12='$data[2]', school10='$data[3]', school12='$data[4]', board10='$data[5]', board12='$data[6]', percentage='$data[7]', eng='$data[8]', beng='$data[9]', phy='$data[10]', chem='$data[11]', maths='$data[12]' WHERE idcard='$data[0]'";
	try{
		$update_Result = mysqli_query($connect, $update_Query);

		if($update_Result)
		{
			if(mysqli_affected_rows($connect)>0)
			{
				echo "<script>alert('New Data Updated !!!')</script>";
        echo "<script>window.open('search2.php','_self')</script>";
			}
			else
			{
				echo "<script>alert('No New Data Updated !!!')</script>";
        echo "<script>window.open('search2.php','_self')</script>";
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
		Search Academic Details
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
		<h3>Search Student Academic Details</h3>
		<form action="search2.php" name="myform" method="POST" class="C" onsubmit="return validation()">
		<dialog open class="D">
		<center>H.S. Registration Number<br><input type="text" class="A" name="idcard" id="A1" value="<?php echo $idcard;?>" ></center><br><span id="A2"></span><br>

		<label>Year of Passing(10th)&nbsp;&nbsp;:</label><input type="text" class="A" name="year10"  value
		="<?php echo $year10;?>">
		
		<label>&nbsp;&nbsp;Year of Passing(12th)&nbsp;&nbsp;:</label><input type="text" class="A" name="year12"  value="<?php echo $year12;?>"><br><br>
		
				<label>School(10th)&nbsp;&nbsp;:</label><input type="text" class="A" name="school10"  value="<?php echo $school10;?>">
		
		<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School(12th)&nbsp;&nbsp;:</label><input type="text" class="A" name="school12"  value="<?php echo $school12;?>"><br><br>
		
		<label>Board(10th)&nbsp;&nbsp;:</label><input type="text" class="A" name="board10" value="<?php echo $board10;?>">
		
		<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Board(12th)&nbsp;&nbsp;:</label><input type="text" class="A" name="board12"  value="<?php echo $board12;?>"><br><br>
		
		<center><label>Percentage(10th)&nbsp;&nbsp;:</label><input type="number" class="A" name="percentage"  value="<?php echo $percentage;?>"></center><br><br>
		
		<label>Marks(12th)&nbsp;&nbsp;:</label><br><br>
		
		<label>English&nbsp;&nbsp;:</label><input type="text" class="A" name="eng"  value="<?php echo $eng;?>">
		
		<label>&nbsp;&nbsp;Bengali&nbsp;&nbsp;:</label><input type="text" class="A" name="beng"  value="<?php echo $beng;?>"><br><br>
		
		<label>&nbsp;&nbsp;Physics&nbsp;&nbsp;:</label><input type="text" class="A" name="phy"  value="<?php echo $phy;?>">
		
		<label>&nbsp;&nbsp;Chemistry&nbsp;&nbsp;:</label><input type="text" class="A" name="chem"  value="<?php echo $chem;?>">
		
		<label>&nbsp;&nbsp;Maths&nbsp;&nbsp;:</label><input type="text" class="A" name="maths"  value="<?php echo $maths;?>"><br><br>
		
		<div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="Modify Data" class="B">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" name="search" value="Search" class="B">
		</div><br>
		<center><a href="print.php" target="_blank" class="A12"><font color="red">Print Registration Certificate</font></a></center>
	</dialog>
	</form>
</table>
</center>
</body>
</html>

<?php

     require('fpdf.php');
     if(isset($_POST['submit']))
     {
     	$conn = new mysqli("localhost","root","","student_registration");
     	if($conn->connect_error)
     	{
     		die ("Connection Failed".$conn->connect_error);
     	}
     	$sql = "SELECT name from personal_details1";
     	$result = $conn->query($sql);
     	if($result->num_rows>0)
     	{
     		while($row = $result->fetch_assoc())
     		{
              $font = "CenturyGothicBold.TTF";
     	        $image = imagecreatefrompng("certificate.png");
     	        $color = imagecolorallocate($image, 19, 21, 22);
     	        $name = $row['name'];
     	        imagettftext($image, 60, 0, 250, 830, $color, $font, $name);
     	        imagepng($image, "Certificates/".$name.".png");
                  $pdf = new fpdf('L','in',[11.7,8.27]);
                  $pdf->AddPage();
                  $pdf->Image("Certificates/".$name.".png",0,0,11.7,8.27);
                  $pdf->Output("Certificates/".$name.".pdf","F");
     	        imagedestroy($image);
     	        echo "<script>alert('Certificate Created')</script>";
                  echo "<script>window.open('index.php','_self')</script>";
     		}
     	}
     	else
     	{
     		echo "<script>alert('No Records Found !!!')</script>";
               echo "<script>window.open('index.php','_self')</script>";
     	}	
     	
     }

?>

<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
    function validation() {
      var a = document.getElementById('A1').value;
      if(a==""){
        document.getElementById('A2').innerHTML=alert("Please mention Student Name");
        document.getElementById('A2').innerHTML="**Please mention Student Name";
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
              padding-top: 70px; 
              margin: 10px;
          }
          dialog.D{
               font-size: 20px;
               font-weight: bold;
               
               position: top;
               background-image: url('img7.png');
               text-align: left;
               border-width: 5px;
               height: 300px;
               width: 500px;
          }
          input.A{
               width: 300px;
               height: 20px;
               border: inset;
               font-size: 23px;

          }
          input.B{
               text-align: center;
               font-size: 20px;
               }
          .A1{
               padding-top: 80px;
               padding-left: 90px;
               }
               #A2{
                color: red;
               }
  </style>   
</head>
<body background="kk.png">
<center>
     <h1 class="A">NATIONAL COLLEGE OF ENGINEERING</h1><br>
     <h3>Print Registration Certificate</h3>
     <form method="post" class="C" onsubmit="return validation()">
               <dialog open class="D">
  <div class="A1">Name Of Student<br><input type="text" name="name" class="A" id="A1" ><br><span id="A2"></span></div><br>
  <center><input type="submit" name="submit" value="PRINT" class="B"></center><br><br><br>
  <center><font color="yellow">If you want to update registration details,</font><a href="searchmodify.php" target="_blank" ><font color="yellow">click here.</font></a></center>
</form>
</dialog>
</center>
</body>
</html>





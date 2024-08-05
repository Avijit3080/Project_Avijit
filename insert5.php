<!DOCTYPE html>
<html>
<head>
     <title>Personal Details</title>
     <script type="text/javascript">
        function validation(){
          var a = document.getElementById('A1').value;
          var b = document.getElementById('B1').value;
          var c = document.getElementById('C1').value;
          var d = document.getElementById('D1').value;
          var e = document.getElementById('E1').value;
          var f = document.getElementById('F1').value;
          var g = document.getElementById('G1').value;
          var h = document.getElementById('H1').value;
          var i = document.getElementById('I1').value;
          var j = document.getElementById('J1').value;

          if(isNaN(document.myform.phone.value)){
            document.getElementById('C2').innerHTML=alert("Student phone Error Input !!!");
            document.getElementById('C2').innerHTML="**Student phone Error Input !!!";
          }
          if(isNaN(document.myform.gphone.value)){
            document.getElementById('G2').innerHTML=alert("Guardian phone Error Input !!!");
            document.getElementById('G2').innerHTML="**Guardian phone Error Input !!!";
          }

          if(isNaN(document.myform.idcard.value)){
            document.getElementById('H2').innerHTML=alert("Registration Number Error Input !!!");
            document.getElementById('H2').innerHTML="**Registration Number Error Input !!!";
          }
          if(a==""){
            document.getElementById('A2').innerHTML=alert("Please provide your Name");
            document.getElementById('A2').innerHTML="**Please provide your Name";
            return false;
          }
          if(b==""){
            document.getElementById('B2').innerHTML=alert("Please provide your Address");
            document.getElementById('B2').innerHTML="**Please provide your Address";
            return false;
          }
          if(c==""){
            document.getElementById('C2').innerHTML=alert("Please provide your Phone Number");
            document.getElementById('C2').innerHTML="**Please provide your Phone Number";
            return false;
          }
          if(d==""){
            document.getElementById('D2').innerHTML=alert("Please mention your Gender");
            document.getElementById('D2').innerHTML="**Please provide your Gender";
            return false;
          }
          if(e==""){
            document.getElementById('E2').innerHTML=alert("Please provide your Father's Name");
            document.getElementById('E2').innerHTML="**Please provide your Father's Name";
            return false;
          }
          if(f==""){
            document.getElementById('F2').innerHTML=alert("Please provide your Mother's Name");
            document.getElementById('F2').innerHTML="**Please provide your Mother's Name";
            return false;
          }
          if(g==""){
            document.getElementById('G2').innerHTML=alert("Please provide your Guardian Phone");
            document.getElementById('G2').innerHTML="**Please provide your Guardian Phone";
            return false;
          }
          if(h==""){
            document.getElementById('H2').innerHTML=alert("Please provide your H.S. Registration Number");
            document.getElementById('H2').innerHTML="**Please provide your H.S. Registration Number";
            return false;
          }
          if(i==""){
            document.getElementById('I2').innerHTML=alert("Please mention your Landmark");
            document.getElementById('I2').innerHTML="**Please provide your Landmark";
            return false;
          }
          if(j==""){
            document.getElementById('J2').innerHTML=alert("Please provide your Date Of Birth");
            document.getElementById('J2').innerHTML="**Please provide your Date Of Birth";
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
          }
          input.A{
               width: 500px;
               height: 20px;
               border: inset;
               font-size: 23px;

          }
          input.B{
               text-align: center;
               font-size: 20px;
          }
          h3{
            text-align: center;
            color: white;
            text-shadow: 10px 10px 10px black;
            font-family: arialblack;
            font-weight: bold;
          }
          body{
            margin: 10px;
          }
          .A2,.B2,.C2,.D2,.E2,.F2,.G2,.H2,.I2,.J2{
            color: red;
            font-weight: bold;
            font-style: Arial;
          }
     </style>
</head>
<body background="kk.png">
<h1 class="A">National College Of Engineering</h1>
<h3>Personal Details</h3>
<center>
<form class="C" name="myform" method="post" action="process5.php" onsubmit="return(validation())">
<dialog open class="D">
     Name<br><input type="text" name="name" class="A" id="A1" ><br><span id="A2" class="A2"></span><br><br>
     Address<br><input type="text" name="address" class="A" id="B1" ><br><span id="B2" class="B2"></span><br><br>
     Student's Phone<br><input type="text" name="phone" class="A" id="C1" ><br><span id="C2" class="C2"></span><br><br>
     <div id="D1">Gender&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;Male<input type="radio" name="gender"
        value="Male">Female<input type="radio" name="gender"
        value="Female">Others<input type="radio" name="gender"
        value="Others"></div><br><span id="D2" class="D2"></span><br><br>
    Father's Name<br><input type="text" name="fname" class="A" id="E1" ><br><span id="E2" class="E2"></span><br><br>
    Mother's Name<br><input type="text" name="mname" class="A" id="F1" ><br><span id="F2" class="F2"></span><br><br> 
    Guardian's Phone<br><input type="text" name="gphone" class="A" id="G1" ><br><span id="G2" class="G2"></span><br><br> 
    H.S. Registration Number<br><input type="text" name="idcard" class="A" maxlength="10" id="H1" class="H2" ><br><span id="H2"></span><br><br> 
    Landmark<br><input type="text" name="landmark" class="A" id="I1"><br><span id="I2" class="I2" ></span><br><br> 
    Date Of Birth<br><input type="date" name="dob" class="A" id="J1"><br><span id="J2" class="J2"></span><br><br> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" class="B">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="B">
</dialog>
</form>
</center>
</body>
</html>
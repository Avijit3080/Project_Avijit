<!DOCTYPE html>
<html>
<head>
     <title>Academic Details</title>
     <script type="text/javascript">
          function validation(){
               var m = document.getElementById('A100').value;
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
               var k = document.getElementById('K1').value;
               var l = document.getElementById('L1').value;

               if(isNaN(document.myform.idcard.value)){
                    document.getElementById('A200').innerHTML=alert("Registration Number Error Input");
                    document.getElementById('A200').innerHTML="**Registration Number Error Input";
                    return false;
               }
               if(isNaN(document.myform.year10.value)){
                    document.getElementById('A2').innerHTML=alert("10th Passing Year Error Input");
                    document.getElementById('A2').innerHTML="**10th Passing Year Error Input";
                    return false;
               }
               if(isNaN(document.myform.year12.value)){
                    document.getElementById('B2').innerHTML=alert("12th Passing Year Error Input");
                    document.getElementById('B2').innerHTML="**12th Passing Year Error Input";
                    return false;
               }
               if(isNaN(document.myform.percentage.value)){
                    document.getElementById('G2').innerHTML=alert("10th Percentage Error Input");
                    document.getElementById('G2').innerHTML="**10th Percentage Error Input";
                    return false;
               }
               if(m==""){
                    document.getElementById('A200').innerHTML=alert("Please mention Registration Number");
                    document.getElementById('A200').innerHTML="**Please mention Registration Number";
                    return false;
               }
               if(a==""){
                    document.getElementById('A2').innerHTML=alert("Please mention 10th passing year");
                    document.getElementById('A2').innerHTML="**Please mention 10th passing year";
                    return false;
               }
               if(b==""){
                    document.getElementById('B2').innerHTML=alert("Please mention 12th passing year");
                    document.getElementById('B2').innerHTML="**Please mention 12th passing year";
                    return false;
               }
               if(c==""){
                    document.getElementById('C2').innerHTML=alert("Please mention 10th School");
                    document.getElementById('C2').innerHTML="**Please mention 10th School";
                    return false;
               }
               if(d==""){
                    document.getElementById('D2').innerHTML=alert("Please mention 12th School");
                    document.getElementById('D2').innerHTML="**Please mention 12th School";
                    return false;
               }
               if(e==""){
                    document.getElementById('E2').innerHTML=alert("Please mention 10th Board");
                    document.getElementById('E2').innerHTML="**Please mention 10th Board";
                    return false;
               }
               if(f==""){
                    document.getElementById('F2').innerHTML=alert("Please mention 12th Board");
                    document.getElementById('F2').innerHTML="**Please mention 12th Board";
                    return false;
               }
               if(g==""){
                    document.getElementById('G2').innerHTML=alert("Please mention 10th Percentage");
                    document.getElementById('G2').innerHTML="**Please mention 10th Percentage";
                    return false;
               }
               if(g>1 && g<74 || g>100){
                    document.getElementById('G2').innerHTML=alert("Students need to have at least 75 percentage");
                    document.getElementById('G2').innerHTML="";
                    return false;
               }
               if(h==""){
                    document.getElementById('H2').innerHTML=alert("Please mention English Marks");
                    document.getElementById('H2').innerHTML="**";
                    return false;
               }
               if(h>1 && h<74 || h>100){
                    document.getElementById('H2').innerHTML=alert("Student must have 75 marks out of 100");
                    document.getElementById('H2').innerHTML="**";
                    return false;
               }
               if(i==""){
                    document.getElementById('I2').innerHTML=alert("Please mention Bengali Marks");
                    document.getElementById('I2').innerHTML="**";
                    return false;
               }
               if(i>1 && i<74 || i>100){
                    document.getElementById('I2').innerHTML=alert("Student must have 75 marks out of 100");
                    document.getElementById('I2').innerHTML="**";
                    return false;
               }
               if(j==""){
                    document.getElementById('J2').innerHTML=alert("Please mention Physics Marks");
                    document.getElementById('J2').innerHTML="**";
                    return false;
               }
               if(j>1 && j<74 || j>100){
                    document.getElementById('J2').innerHTML=alert("Student must have 75 marks out of 100");
                    document.getElementById('J2').innerHTML="**";
                    return false;
               }
               if(k==""){
                    document.getElementById('K2').innerHTML=alert("Please mention Chemistry Marks");
                    document.getElementById('K2').innerHTML="**";
                    return false;
               }
               if(k>1 && k<74 || k>100){
                    document.getElementById('K2').innerHTML=alert("Student must have 75 marks out of 100");
                    document.getElementById('K2').innerHTML="**";
                    return false;
               }
               if(l==""){
                    document.getElementById('L2').innerHTML=alert("Please mention Mathematics Marks");
                    document.getElementById('L2').innerHTML="**";
                    return false;
               }
               if(l>1 && l<74 || l>100){
                    document.getElementById('L2').innerHTML=alert("Student must have 75 marks out of 100");
                    document.getElementById('L2').innerHTML="**";
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
               width: 600px;
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
          .A1{
               width: 100px; height: 20px;
               font-size: 23px;

          }
          h3{
               text-align: center;
               color: white;
               text-shadow: 10px 10px 10px black;
               font-family: arialblack;
               font-weight: bold;
               
          }
          #A200,#A2,#B2,#C2,#D2,#E2,#F2,#G2,#H2,#I2,#J2,#K2,#L2{
               color: red;
          }
          .A12{
               cursor: pointer;
          }
     </style>
</head>
<body background="kk.png">
<h1 class="A">National College Of Engineering</h1>
<h3>Academic Details</h3>
<center>
<form class="C" name="myform" method="post" action="process4.php" onsubmit="return(validation())">
<dialog open class="D">
     
     H.S. Registration Number<br><input type="text" name="idcard" class="A" id="A100" maxlength="10"><br><span id="A200"></span><br><br>
     
     Year of Passing(10th)<br><input type="text" name="year10" class="A" id="A1" ><br><span id="A2"></span><br><br>
     
     Year of Passing(12th)<br><input type="text" name="year12" class="A" id="B1" ><br><span id="B2"></span><br><br>
     
     School(10th)<br><input type="text" name="school10" class="A" id="C1"  ><br><span id="C2"></span><br><br>
     
     School(12th)<br><input type="text" name="school12" class="A" id="D1" ><br><span id="D2"></span><br><br>
     
     Board(10th)<br><input type="text" name="board10" class="A" id="E1"><br><span id="E2"></span><br><br>
     
     Board(12th)<br><input type="text" name="board12" class="A" id="F1"><br><span id="F2"></span><br><br>
     
     Percentage(10th):*<br><input type="text" name="percentage" class="A" id="G1"><br><span id="G2"></span><br><br>
     
     Marks(12th)&nbsp;:<br><br>
     
     English<input type="text" name="eng" class="A1" id="H1" ><span id="H2"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Bengali<input type="text" name="beng" class="A1" id="I1"  ><span id="I2"></span><br><br>
     Physics<input type="text" name="phy" class="A1" id="J1" ><span id="J2"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     Chemistry<input type="text" name="chem" class="A1" id="K1" ><span id="K2"></span><br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mathematics<input type="text" name="maths" class="A1" id="L1" ><span id="L2"></span><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" class="B">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset" class="B"><br><br><br><br>
    <center><a href="print.php" target="_blank" class="A12"><font color="yellow">Print Registration Certificate</font></a></center><br><br><br>
</dialog>
</form>
</center>
</body>
</html>
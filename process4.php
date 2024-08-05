<?php
include 'database5.php';
if(isset($_POST['submit']))
{
    $idcard=$_POST['idcard'];
    $year10=$_POST['year10'];
    $year12=$_POST['year12'];
    $school10=$_POST['school10'];
    $school12=$_POST['school12'];
    $board10=$_POST['board10'];
    $board12=$_POST['board12'];
    $percentage=$_POST['percentage'];
    $phy=$_POST['phy'];
    $chem=$_POST['chem'];
    $maths=$_POST['maths'];
    $eng=$_POST['eng'];
    $beng=$_POST['beng'];

    $sql="insert into academic_details2(idcard,year10,year12,school10,school12,board10,board12,percentage,eng,beng,phy,chem,maths) values('$idcard','$year10','$year12','$school10','$school12',' $board10','$board12','$percentage','$phy','$chem','$maths','$eng','$beng')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Registration Form Submitted Successfully')</script>";
        echo "<script>window.open('academicdetails.php','_blank')</script>";
    }
    else
    {
        echo "error:" .mysqli_error($con);
    }
    mysqli_close($con);
}











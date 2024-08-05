<?php
include 'database5.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $gphone=$_POST['gphone'];
    $idcard=$_POST['idcard'];
    $landmark=$_POST['landmark'];
    $date=$_POST['dob'];

    $sql="insert into personal_details1(name,address,phone,gender,fname,mname,gphone,idcard,landmark,dob) values('$name','$address','$phone','$gender','$fname','$mname','$gphone','$idcard','$landmark','$date')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('New Records Inserted Successfully !!!')</script>";
        echo "<script>window.open('academicdetails.php','_blank')</script>";
    }
    else
    {
        echo "error:" .mysqli_error($con);
    }
    mysqli_close($con);
}











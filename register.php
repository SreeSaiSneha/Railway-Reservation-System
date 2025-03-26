<?php
$servername = "localhost";
$username = "root";
$password="";
$database="sneha";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("error".mysqli_error($con));
}
else
    {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $sql="insert into users(email,password,confirmpassword) values('$email','$password','$confirmpassword')";

    if(mysqli_query($con,$sql))
    {
        echo "<script>register successfully</script>";
        echo "<script>
            window.open('login.html','_self')</script>";
    }
    else
        echo "error".mysqli_error($con);
}
    mysqli_close($con);
?>
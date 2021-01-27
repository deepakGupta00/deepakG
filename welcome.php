
<?php

if(isset($_POST['send']))
{
    $UserName= $_POST['name'];
    $Email= $_POST['email'];
    $Subject =$_POST['subject'];
    $Msg = $_POST['msg'];


    if(empty($UserName) || empty($Email) ||empty($Subject) || empty($Msg))
    {
        header('location: welcome.php?error');
    }
    else
    {
        $to = "guptadeepak6575@gmail.com";
        
        if(mail($to,$Subject,$Msg,$Email))
        {
            header("location:welcome.php?success");
        }
    }


}

else{
    header("loation:index.php");
}


?>

<?php 


$msg="";


    if(isset($_GET['error']))
    {
        $msg="please fill in the blanks";
        echo '  '.$msg.'  ';
    }
    

    if(isset($_GET['success']))
    {
        $msg="Your message has been send";
        echo '  '.$msg.'  ';
    }


?>


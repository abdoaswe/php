<?php


$error="";
$errorname="";
$erremail="";
$errmessg="";


if(count($_POST)>0){

$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];

if(empty($name) || empty($email) || empty($message))
{
    $error="Error! some fieldes are empty";
}elseif(is_numeric($name))
{
    $errmessg="Error! Name must be character.";
}else{
    $message="Dear abdo".PHP_EOL;
    $message=$message."Name : $name".PHP_EOL;
    $message=$message."Email : $email".PHP_EOL;
    @mail("abdoahmed4434@gmail.com","form validation",$message);

    echo"Thank you for contacting Us<br/> <br/>";
    foreach($_POST as $key => $value ){
    
    echo "<strong> $key </strong>: $value </br>";
}

    die("<br/>thanks to sending data");
}



if(empty($name))
{       
    $errorname="Error! You didn't enter the Name.";
}elseif(strlen($name)>=100){
    $errorname="Error! Name is must be less than 100 character";

}

if(empty($email))
{
    $erremail="Error! You didn't enter the Email.";
}elseif(!(filter_var($email,FILTER_VALIDATE_EMAIL)))
{
    $erremail="Email is not valide";
}

if(empty($message))
{
    $errmessg="Error! You didn't enter the message.";
}elseif(strlen($message)>=255){
    $errmessg="Error! message is must be lesss than 255 charachter";

}

}


 
?>
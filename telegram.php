<?php
/// https://api.telegram.org/bot1998474909:AAH6xKQ0LkgoAveIqvmzJGaPL6YXK35hioc/getUpdates
$name = $_POST['user_name'];
$number = $_POST['user_phone'];
$email = $_POST['user_email'];
$address = (isset($_POST['user_address']) ? $_POST['user_address']: null);
$payment = (isset($_POST['payment']) ? $_POST['payment']: null);
$dostavka = (isset($_POST['dostavka']) ? $_POST['dostavka']: null);
$comment = $_POST['user_comment'];
$token = '1998474909:AAH6xKQ0LkgoAveIqvmzJGaPL6YXK35hioc';
$chat_id = '-583604934';





$arr = array(
    'Ism: ' => $name,
    'Telefon: ' => $number,
    'Email: ' => $email,
    'Address: ' => $address,
    'Tolov: ' => $payment,
    'Servis: ' => $dostavka,
    'Comment: ' => $comment 
);


foreach($arr as $key => $value):
$text .= $key . $value . "%0A";
endforeach;


$telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_emode=html&text={$text}","r");


if($telegram){
    header('Location:food.html');
}

else{
    echo 'Error';
}
?>
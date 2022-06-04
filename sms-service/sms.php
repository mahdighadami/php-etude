<?php
function readphones($filename){
    //TODO: read phones from the filename
    return explode("\n", file_get_contents($filename));
}

function send_sms($number, $text){
    //TODO: send sms
    $data = array(
        'receptor' => $number,
        'message' => $text
    );
    $api_key = '2424for424example3434';
    $url = 'https://example.come/' . $api_key . '.../';

    $curl_sess = curl_init();
    curl_setopt($curl_sess, CURLOPT_URL, $url);
    curl_setopt($curl_sess, CURLOPT_POST, 1);
    curl_setopt($curl_sess, CURLOPT_POSTFIELDS, $data);
}

$phones = readphones("phones.txt");
$text = 'test sms message';
//var_dump($phones);
$text = "Hello, World";
foreach($phones as $phone){
    //send_sms($phone, $text);
    echo $phone;?> <br> <?php ;
}

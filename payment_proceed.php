<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $phone = $_POST['phone'];
    $buy_name = $_POST['buy_name'];
}
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:Your_API_Key",
                  "X-Auth-Token:YOur Token"));
$payload = Array(
    'purpose' => $buy_name,
    'amount' => $amount,
    'phone' => $phone,
    'buyer_name' => $name,
    'redirect_url' => 'http://localhost/instamojo_payment_getway/success.php',
    'send_email' => true,
     'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => 'Ypur mail ID',
    'allow_repeated_payments' => false
); 
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
echo '<pre>';
$response = json_decode($response,true);
// print_r($response);
// die();
$pay_url = $response['payment_request']['longurl'];
  if($response['success']){
        
        header("Location:".$response['payment_request']['longurl']);

  }else{
        header("Location:".$response['payment_request']['webhook']);
  }
// print_r($pay_url);die();
// echo $response;

?>
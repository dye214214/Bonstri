<?php
///////////////////////////////////////////
///////CREATED BY ARUDJI HERMATYAR////////
//////www.facebook.com/bantalku567///////
/////https://github.com/arudji1211//////
///////////////////////////////////////

include 'tri_req.php';

$tri = new tri();
$imei = "868880043302499";
echo "Masukkan No Telepon : ";
$msisdn = trim(fgets(STDIN));
$otp = $tri->request_otp($msisdn,$imei);
echo $otp[1] . "\r\n";
echo "Masukkan OTP : ";
$otp = trim(fgets(STDIN));
$login = $tri->login($msisdn,$otp);
$login = json_decode($login,true);
$bearer = $login['access_token'];
$id = $tri->trans($bearer);
$id = json_decode($id,true);
$a = $id['data'][0]['rewardTransactionId'];
$b = $id['data'][1]['rewardTransactionId'];
$c = $id['data'][2]['rewardTransactionId'];
$d = $id['data'][3]['rewardTransactionId'];
$e = $id['data'][4]['rewardTransactionId'];
$f = $id['data'][5]['rewardTransactionId'];
$g = $id['data'][6]['rewardTransactionId'];
for($id1 = 1500; $id1 < 1600;$id1++)
{
  $ah = $tri->claim($bearer,$a,$id1);
  $bh = $tri->claim($bearer,$b,$id1);
  $ch = $tri->claim($bearer,$c,$id1);
  $dh = $tri->claim($bearer,$d,$id1);
  $eh = $tri->claim($bearer,$e,$id1);
  $fh = $tri->claim($bearer,$f,$id1);
  $gh = $tri->claim($bearer,$g,$id1);
  echo $ah."|".$bh."|".$ch."|".$dh."|".$eh."|".$fh."|".$gh."|\r\n";
  sleep(2);
}



?>

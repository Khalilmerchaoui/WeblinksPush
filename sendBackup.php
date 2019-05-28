<?php
function send_notification($token, $message)
{
    $url = "https://fcm.googleapis.com/fcm/send";
    $fields = array(
        'registration_ids' => $token,
        'data' => $message
    );
    $headers = array(
        'Authorization:key = AAAAPCCj8E4:APA91bHRFXT54XLjOCZOf4Z0AseK13r21lGE-lgpRhAaB7XpiyELCZFOSpVPU8IxP-OgAWw_BpK0KQeulQgi7dQKF9dpJdDXGRjIvP6MQsm792ZWEjN9bSM0IO66lKToo5JbFA1t_8RJ',
        'Content-Type: application/json'
    );
 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }
    curl_close($ch);
    return $result;
}
 
//$conn = mysqli_connect("localhost", "root", "", "fcm");
//$sql = "SELECT token FROM users";
//$result = mysqli_query($conn, $sql);
$token = array("dO_4UH_ftKU:APA91bGSXKoFI5lSLzE2ILVDKNLyCXoGZDtY7f37JTkyRbO3jayFpWe8nJuls007Xd78y0tZaOdP05UiCdSVzApIi6TiSJ_Ew8OHgS14qi5FXJfCplPyypNnAG35LobbSg5NvZRp1blI");
 
/*if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $token[] = //$row["token"];
    }
}
mysqli_close($conn);
*/$message = array('message' => $_POST['message'],
                   'title'   => $_POST['title']);
$msg_status = send_notification($token,$message);
echo $msg_status;
?>
<?php

if(isset($_POST['submit'])){
    $to = "dn47884@gmail.com"
    $from = $_POST['first_name'];
    $first_namec = $POST['first_name'];
    $second_name = $POST['second_name'];
    $subject = "Сообщение от " . $first_name . " " . $second_name;
    $message = %first_name . " " . $second_name . "отправил сообщение: \n" . $POST['message'];
    $header = "От: " . $from;

    mail($to, $subject,$message, $header);
    echo "Сообщение отправлено, спасибо вам " . $first_name . ", мы скоро свяжемся с вами.";
    echo "<br /><br /><a href=''>Вернуться на сайт</a>"
}

?>

<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="");}
window.setTimeOut("changeurl();", 3000);
<script/>
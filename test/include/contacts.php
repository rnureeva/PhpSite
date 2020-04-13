<?php
$error = false;
$success = false;
if (isset($_POST['send'])) {
   if (isset($_POST['email']) && ($_POST['message']))
   {
       $success = true;
   } else {
       $error = true;
   }
   $email = $_POST['email'];
   $message = $_POST['message'];
   $subject = "=?utf-8?B?".base64_encode("Новое сообщение с сайта")."?=";
   $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
   mail('rafis_3k@mail.ru',$subject,$message,$headers);
}
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php'); ?>
    <?php if ($error) {
        require_once ($_SERVER['DOCUMENT_ROOT'].'/include/error.php');
    } elseif ($success) {
        require_once ($_SERVER['DOCUMENT_ROOT'].'/include/success.php');
    }
    ?>
<div class="container mt-5" style="background-color: aliceblue; padding: 20px;">
    <h3>Контактная форма</h3>
    <form action="contacts.php" method="post">
        <input class="form-control" type="email" name="email" placeholder="Введите ваш Email" ><br>
        <textarea name="message" class="form-control" placeholder="Введите Ваше сообщение"></textarea><br>
        <input type="submit" name="send" class="btn btn-success" value="Отправить">
    </form>
</div>
<?php require ($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>

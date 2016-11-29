<?
if ($_POST['contact_f']) {
//    captcha_valid();
    email_valid();
    if (strlen($_POST['message'])<10 or strlen($_POST['message'])>250)
        message('количество символов не соответствует: от 10 до 250 символов');

    mail('admin@itaw.org',
        'Обращение с сайта HORSE',
        '<p>'.htmlspecialchars($_POST['message']).'</p>',
        'Content-type: text/html; charset=UTF-8
MIME-Version: 1.0
From: '.$_POST['email']);

    message('Сообщение отправлено');
}
?>
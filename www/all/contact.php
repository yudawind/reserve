<? top('Подтверждение') ?>

<h1>Обратная связь</h1>


<p><input type="email" value="<?=$_SESSION['email']?>" placeholder="Ваш электронный адрес" id="email"></p>
    <p><textarea placeholder="Сообщение" id="message"></textarea></p>
    <p><input type="text" placeholder="<?captcha_show()?>" id="captcha"></p>
<p><button onclick="post_query('mail', 'contact', 'email.message.captcha')">Отправить</button></p>



<? bottom() ?>
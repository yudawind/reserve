<?
top('Подтверждение') ?>

    <h1>Профиль</h1>

    <p>Привет <?echo $_SESSION['email']?></p>

    <p><input type="password" placeholder="Новый пароль" id="password"></p>
<p>Ваш IP: <?echo $_SERVER['REMOTE_ADDR']?></p>
    <p><input type="text" placeholder="Список IP" value="<?=$_SESSION['ip']?>" id="ip"></p>
    <p><input type="text" placeholder="Имя" value="<?=$_SESSION['name']?>" id="name"></p>
    <p><button onclick="post_query('aform', 'edit', 'password.ip.name')">Сохранить</button></p>



<? bottom() ?>
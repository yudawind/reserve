<? top('Регистрация') ?>

<h1>Регистрация</h1>

<p><input type="email" placeholder="E-mail" id="email"></p>
<p><input type="password" placeholder="Пароль" id="password"></p>
    <p><input type="text" placeholder="Имя" id="name"></p>
<!--<p><input type="text" placeholder="--><?//captcha_show()?><!--" id="captcha"></p>-->
<p><button onclick="post_query('gform', 'register', 'email.password.name')">Регистрация</button> </p>


<? bottom() ?>
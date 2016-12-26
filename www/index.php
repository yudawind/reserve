<?

if ( $_SERVER['REQUEST_URI'] == '/' ) $page = 'home';
else {

	$page = substr($_SERVER['REQUEST_URI'], 1);
    $URL_Parts = explode('/', trim($page, '/'));
    $page = array_shift($URL_Parts);
	if ( !preg_match('/^[A-z0-9]{3,15}$/', $page) ) not_found();
}

//подсоединяем настройки sql
include 'conf_sql.php';

if ( !$CONNECT ) exit('MySQL error');

session_start();


if ( file_exists('all/'.$page.'.php') ) include 'all/'.$page.'.php';

else if ( $_SESSION['id'] and file_exists('auth/'.$page.'.php') ) include 'auth/'.$page.'.php';

else if ( !$_SESSION['id'] and file_exists('auth/'.$page.'.php') ) header('location: /login');

else if ( !$_SESSION['id'] and file_exists('guest/'.$page.'.php') ) include 'guest/'.$page.'.php';

else not_found();




function message( $text ) {
	exit('{ "message" : "'.$text.'"}');
}



function go( $url ) {
	exit('{ "go" : "'.$url.'"}');
}



function random_str( $num = 30 ) {
	return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
}


function not_found() {
	exit('Страница 404 <a href="/">На Главную</a>');
//    header('location: /login');
//	location('/login');
}


function captcha_show() {

	$questions = array(
		1 => '2+9= ?',
		2 => '13-4= ?',
        3 => '2*2= ?',
		);

	$num = mt_rand(1, count($questions) );
	$_SESSION['captcha'] = $num;

	echo $questions[$num];

}

function captcha_valid() {

	$answers = array(
		1 => '11',
		2 => '9',
        3 => '4',
		);
$otvet = array_search($_POST['captcha'],$answers);
    $lowerotvet = strtolower($_POST['captcha']);
if ( $_SESSION['captcha'] != array_search( mb_strtolower($_POST['captcha']), $answers) )
	message('Ответ на вопрос указан неверно '.$_SESSION['captcha'].' '.$otvet.' '.$lowerotvet);
 
}

function email_valid() {
	if ( !filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL))
		message('E-mail указан неверно');
}

function password_valid() {
	if ( !preg_match('/^[A-z0-9]{1,32}$/', $_POST['password']) )
		message('Пароль указан неверно и может содеражть 1 - 32 символов A-z0-9');
	$_POST['password'] = md5($_POST['password']);
}

function top( $title,$dopmenu = '' ) {

    if ( $_SESSION['id'] && $_SESSION['group']==1) {
        $avmenu = '
<a href="/">Главная</a>
<a href="/profile">Профайл</a>'.$dopmenu.'
<a href="/register">Регистрация</a>
<hr><a href="/logout"><b>Выход</b></a>
<hr>
<div class="left">
        <a class="btn" href="/disko">Шутерс</a>
        <a class="btn" href="/bar22">Бар 22</a>
        <a class="btn" href="/karaoke">Лимончелло</a>
        <a class="btn" href="/terassa">Терасса</a>
    </div>
    <hr>
    <div class="inf">
    <span>Свободен</span>
    <span class="yellow">Резерв</span>
    <span class="red">Занят</span>
    <span class="green">Занят + Резерв</span>
</div>
';
    } elseif ($_SESSION['id'] && $_SESSION['group']!=1){
        $avmenu = '<a href="/">Главная</a>
<hr><a href="/logout"><b>Выход</b></a>
<hr>
<div class="left">
        <a class="btn" href="/disko">Шутерс</a>
        <a class="btn" href="/bar22">Бар 22</a>
        <a class="btn" href="/karaoke">Лимончелло</a>
        <a class="btn" href="/terassa">Терасса</a>
    </div>
    <hr>
    <div class="inf">
    <span>Свободен</span>
    <span class="yellow">Резерв</span>
    <span class="red">Занят</span>
    <span class="green">Занят + Резерв</span>
</div>
';
    } else $avmenu = '
<!--<a href="/register">Регистрация</a>-->
<hr>
<a href="/login"><b>Вход</b></a>';

echo '<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>'.$title.'</title>
<link rel="stylesheet" href="/tpl/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<!--<script src="/tpl/js/jquery.min.js" rel="script"></script> jq -->

</head>

<body>


<div class="wrapper">

<div class="menu">
'.$avmenu.'

</div>


<div class="content">
<div class="block">

';
}



function bottom() {
echo '
</div>
</div>
</div>
<script src="/tpl/js/script.js"></script>
</body>
</html>';
}






?>
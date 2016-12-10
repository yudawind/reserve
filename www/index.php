<?

if ( $_SERVER['REQUEST_URI'] == '/' ) $page = 'login';
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
	if ( !preg_match('/^[A-z0-9]{8,32}$/', $_POST['password']) )
		message('Пароль указан неверно и может содеражть 8 - 32 символов A-z0-9');
	$_POST['password'] = md5($_POST['password']);
}

function top( $title,$dopmenu = '' ) {

    if ( $_SESSION['id']) {
        $avmenu = '
<a href="/profile">Профайл</a>
<a href="/tables">Столики</a>'.$dopmenu.'
<hr><a href="/logout"><b>Выход</b></a>';
    } else $avmenu = '<a href="/login">Вход</a><a href="/register">Регистрация</a>';

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
<a href="/">Главная</a>
<a href="/contact">Обратная связь</a>
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
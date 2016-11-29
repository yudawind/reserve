<?

if ($_POST['edit_f']) {

    if ($_POST['password'] and md5($_POST['password']) != $_SESSION['password']) {
        password_valid();
        mysqli_query($CONNECT, "UPDATE `users` SET `password` = '$_POST[password]'");

    }
    if ($_POST['ip'] != $_SESSION['ip']) {
        if ($_POST['ip']) {
            $arr = explode(',',$_POST['ip']);
            if (count($arr) <= 0 or count($arr) > 5) message('Лимит 1 - 5 IP');
            foreach ($arr as $key => $value) {
                if (!filter_var($value, FILTER_VALIDATE_IP)) message('IP: '.$value.' - указан не верно');
            }
            $_SESSION['ip'] = $_POST['ip'];
        } else $_SESSION['ip'] = '';
        mysqli_query($CONNECT, "UPDATE `users` SET `ip` = '$_SESSION[ip]'");

    }


    message('Данные сохранены');
}

?>
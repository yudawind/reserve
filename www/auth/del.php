<?

if ($_POST['del_f']) {
    mysqli_query($CONNECT, "DELETE FROM `reserve` WHERE `id` = '$_POST[id]'");

    message('удалено'.$_POST['id']);
}

?>

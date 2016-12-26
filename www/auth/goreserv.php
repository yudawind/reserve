<?

if ($_POST['reserv_f']) {
    $res = mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$_POST[tabl]'");

    $rows = [];
    while ($row = mysqli_fetch_assoc($res))
    {
        $rows[] = $row;
        if ($row['time']==$_POST['time'] && $row['data']==$_POST['data']) message('Это время занято'.$row['time'].$_POST['time']);
    }

    mysqli_query($CONNECT, 'INSERT INTO `reserve` VALUES ("", "' . $_SESSION['name'] . '", "' . $_POST['zal'] . '", "' . $_POST['tabl'] . '", "' . $_POST['data'] . '", "' . $_POST['time'] . '", "' . $_POST['count'] . '", "' . $_POST['name'] . '", "' . $_POST['tel'] . '", "' . $_POST['depozit'] . '", "' . $_POST['email'] . '", "' . $_POST['text'] . '", "")');

    go($_POST['zal']);

} elseif ($_POST['edit_f']) {
    $res = mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$_POST[tabl]'");

    $rows = [];
    while ($row = mysqli_fetch_assoc($res))
    {
        $rows[] = $row;
        if ($row['time']==$_POST['time'] && $row['data']==$_POST['data']) message('Это время занято'.$row['time'].$_POST['time']);
    }

    mysqli_query($CONNECT, 'INSERT INTO `reserve` VALUES ("", "' . $_SESSION['name'] . '", "' . $_POST['zal'] . '", "' . $_POST['tabl'] . '", "' . $_POST['data'] . '", "' . $_POST['time'] . '", "' . $_POST['count'] . '", "' . $_POST['name'] . '", "' . $_POST['tel'] . '", "' . $_POST['depozit'] . '", "' . $_POST['email'] . '", "' . $_POST['text'] . '", "")');

    go($_POST['zal']);

}

?>

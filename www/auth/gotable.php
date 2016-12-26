<?

if ($_POST['zanyat_f']) {


    mysqli_query($CONNECT, 'INSERT INTO `tables` VALUES ("", "' . $_POST['tabl'] . '", "' . $_POST['data'] . '", "1")');

    go($_POST['zal'].'/'.$_POST['data']);

}
if ($_POST['svoboden_f']) {


    mysqli_query($CONNECT, "DELETE FROM `tables` WHERE `stol` = '$_POST[tabl]' AND  '$_POST[data]'");

    go($_POST['zal'].'/'.$_POST['data']);

}
?>

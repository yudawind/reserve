<?

    $res = mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$stol'");
//    $res = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$_POST[tabl]'"));

echo '<table>';
    $rows = [];
    while ($row = mysqli_fetch_assoc($res))
    {
        $rows[] = $row;
        echo '<tr>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['data'].'</td>';
        echo '<td>'.$row['time'].'</td>';
        echo '<td>'.$row['depozit'].'</td>';
        echo '<td>'.$row['tel'].'</td>';
        echo '<td>'.$row['text'].'</td>';


        echo '</tr>';
//        if ($row['time']==$_POST['time']) message('Это время занято'.$row['time'].$_POST['time']);
    }

echo '</table>';



?>

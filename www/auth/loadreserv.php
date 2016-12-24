<?

    $res = mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$stol' ORDER BY `data`");
//    $res = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$_POST[tabl]'"));
$trstyle = 'norm';
echo '<table>';
    $rows = [];
    while ($row = mysqli_fetch_assoc($res))
    {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        echo '<tr class="'.$trstyle.'">';
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

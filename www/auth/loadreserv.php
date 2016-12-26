<?


//$rows = [];
//
//while ($row = mysqli_fetch_assoc($res)) {
//    $rows[] = $row;
//}
//
//if ($rows[0]['stol'] == 4) {
//    $rows[0]['time'] = substr($rows[0]['time'], 0, 5);
//    if ($rows[0]['data'] < date('Y-m-d')) $trstyle = 'old';
//    elseif ($rows[0]['data'] == date('Y-m-d')) $trstyle = 'norm';
//    else $trstyle = 'new';
//    $ty += 6;
//    $scgtext .= '<text id="ts2" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $rows[0]['cond'] . '">';
//    $scgtext .= '<tspan class="name">' . $rows[0]['name'] . ' </tspan>';
//    $scgtext .= '<tspan>' . $rows[0]['time'] . '</tspan>';
//    $scgtext .= '</text>';
//}



$res = mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$stol' ORDER BY `data`");
//    $res = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$_POST[tabl]'"));
$trstyle = 'norm';
echo '<table>';
    $rows = [];
    $st=1;
    while ($row = mysqli_fetch_assoc($res))
    {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        echo '<tr id='.$st.' class="'.$trstyle.'">';
        echo '<td>'.$st.'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['data'].'</td>';
        echo '<td class="count'.$row['count'].'">'.$row['time'].'</td>';
        echo '<td>'.$row['depozit'].'</td>';
        echo '<td>'.$row['tel'].'</td>';
        echo '<td>'.$row['text'].'</td>';
        echo '</tr>';
        $rows[$st] = $row;
        $st++;
//        if ($row['time']==$_POST['time']) message('Это время занято'.$row['time'].$_POST['time']);
    }

echo '</table>';



?>

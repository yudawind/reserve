<?
$_SESSION['loader'] = 0;

$data = array_shift($URL_Parts);
if (!$data) $data = date('Y-m-d');
top('Столики');

$rezsql = "SELECT * FROM `reserve` WHERE `zal` = 'disko' AND `data` = '" . $data . "' ORDER BY `time`";

$res = mysqli_query($CONNECT, $rezsql);
$tx = 53;
$ty = 142;


while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 2) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts2" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 53;
$ty = 88;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 3) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts3" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 53;
$ty = 40;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 4) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts4" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 340;
$ty = 40;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 5) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts5" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 340;
$ty = 110;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 6) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts6" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 340;
$ty = 165;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 7) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts7" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 340;
$ty = 218;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 8) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts8" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 208;
$ty = 311;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 9) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts9" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 208;
$ty = 343;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 10) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts10" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 208;
$ty = 377;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 11) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts11" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 166;
$ty = 377;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 12) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts12" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 166;
$ty = 345;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 13) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts13" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$res = mysqli_query($CONNECT, $rezsql);
$tx = 166;
$ty = 312;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 14) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts14" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}

$tablecondsql = "SELECT * FROM `tables` WHERE `data` = '$data' ORDER BY `stol`";
$zan = mysqli_query($CONNECT, $tablecondsql);

while ($row = mysqli_fetch_assoc($zan)) {

    $scgtable .= '<p id="' . $row['stol'] . '">';
    $scgtable .= '<span id="' . $row['data'] . '">' . $row['data'] . '</span>';
    $scgtable .= '<span id="' . $row['cond'] . '">' . $row['cond'] . '</span>';
    $scgtable .= '</p>';

}

?>
    <div hidden id="hide">
        <? echo $scgtable ?>
    </div>
    <div class="fleft">
        <input value="<? echo $data ?>" type="date" id="data" name="data"/>
        <button onclick="godate()">ok</button>
    </div>
    <div class="fright">
        <div class="btn-group">
            <a class="btn active" href="/disko">Шутерс</a>
            <a class="btn" href="/bar22">Бар 22</a>
            <a class="btn" href="/karaoke">Лимончелло</a>
            <a class="btn" href="/terassa">Терасса</a>
        </div>
    </div>

    <div id="space">
        <?
        ?>
        <div class="plan">
            <svg version="1.1" id="disko" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px"
                 viewBox="0 0 456.5 448" style="enable-background:new 0 0 456.5 448;" xml:space="preserve">
        <polygon class="st0"
                 points="407.7,20.6 36.3,20.6 36.3,279.3 151.7,279.3 151.7,399.9 248,399.9 248,279.3 407.7,279.3 "></polygon>

                <path id="rz2" onclick="load_reserv('disko','2','<? echo $data ?>')" class="st0 st03" d="M117.3,151.3c0,12.3-7.7,22.3-17.3,22.3H58.6c-9.5,0-17.3-10-17.3-22.3l0,0c0-12.3,7.7-22.3,17.3-22.3H100
	C109.6,129,117.3,139,117.3,151.3L117.3,151.3z"></path>
                <path id="rz3" onclick="load_reserv('disko','3','<? echo $data ?>')" class="st0 st03" d="M117.3,97.2c0,12.3-7.7,22.3-17.3,22.3H58.6c-9.5,0-17.3-10-17.3-22.3l0,0C41.4,85,49.1,75,58.6,75H100
	C109.6,75,117.3,85,117.3,97.2L117.3,97.2z"></path>
                <path id="rz4" onclick="load_reserv('disko','4','<? echo $data ?>')" class="st0 st03" d="M117.3,48.4c0,12.3-7.7,22.3-17.3,22.3H58.6c-9.5,0-17.3-10-17.3-22.3l0,0c0-12.3,7.7-22.3,17.3-22.3H100
	C109.6,26.2,117.3,36.1,117.3,48.4L117.3,48.4z"></path>
                <ellipse id="rz5" onclick="load_reserv('disko','5','<? echo $data ?>')" class="st0 st03" cx="366" cy="56.3" rx="33.8"
                         ry="32"></ellipse>
                <path id="rz6" onclick="load_reserv('disko','6','<? echo $data ?>')" class="st0 st03" d="M404.6,119.3c0,11.7-6.9,21.1-15.5,21.1h-37.2c-8.6,0-15.5-9.5-15.5-21.1l0,0c0-11.7,6.9-21.1,15.5-21.1h37.2
	C397.7,98.2,404.6,107.7,404.6,119.3L404.6,119.3z"></path>
                <path id="rz7" onclick="load_reserv('disko','7','<? echo $data ?>')" class="st0 st03" d="M404.6,173.6c0,11.7-6.9,21.1-15.5,21.1h-37.2c-8.6,0-15.5-9.5-15.5-21.1l0,0c0-11.7,6.9-21.1,15.5-21.1h37.2
	C397.7,152.5,404.6,161.9,404.6,173.6L404.6,173.6z"></path>
                <path id="rz8" onclick="load_reserv('disko','8','<? echo $data ?>')" class="st0 st03" d="M404.6,231.3c0,11.7-6.9,21.1-15.5,21.1h-37.2c-8.6,0-15.5-9.5-15.5-21.1l0,0c0-11.7,6.9-21.1,15.5-21.1h37.2
	C397.7,210.2,404.6,219.7,404.6,231.3L404.6,231.3z"></path>


                <rect id="rz9" onclick="load_reserv('disko','9','<? echo $data ?>')" x="205.6" y="308.3" class="st0 st03" width="30.1"
                      height="22.3"></rect>
                <rect id="rz10" onclick="load_reserv('disko','10','<? echo $data ?>')" x="205.6" y="340.8" class="st0 st03" width="30.1"
                      height="22.3"></rect>
                <rect id="rz11" onclick="load_reserv('disko','11','<? echo $data ?>')" x="205.6" y="375.8" class="st0 st03" width="30.1"
                      height="22.3"></rect>
                <rect id="rz12" onclick="load_reserv('disko','12','<? echo $data ?>')" x="163" y="375.4" class="st0 st03" width="31.8"
                      height="22.3"></rect>
                <rect id="rz13" onclick="load_reserv('disko','13','<? echo $data ?>')" x="163" y="342.8" class="st0 st03" width="31.8"
                      height="22.3"></rect>
                <rect id="rz14" onclick="load_reserv('disko','14','<? echo $data ?>')" x="163" y="308.8" class="st0 st03" width="31.8"
                      height="22.3"></rect>


                <path class="st0" d="M296.6,114.8H138.1c-5.8,0-10.6,4.7-10.6,10.6v50.4c0,5.8,4.7,10.6,10.6,10.6h158.5c5.8,0,10.6-4.7,10.6-10.6
	v-50.4C307.2,119.6,302.4,114.8,296.6,114.8z M296.9,169.9c0,4.5-4.2,8.1-9.4,8.1H147.1c-5.2,0-9.4-3.6-9.4-8.1v-38.5
	c0-4.5,4.2-8.1,9.4-8.1h140.4c5.2,0,9.4,3.6,9.4,8.1V169.9z"></path>
                <rect x="163.3" y="20.6" class="st0" width="120" height="47"></rect>


                <text transform="matrix(1 0 0 1 206 49.5)" class="tx1">Сцена</text>
                <text transform="matrix(1 0 0 1 353.9167 37.6441)" class="tx1">стол №5</text>
                <text transform="matrix(1 0 0 1 62.1757 37.6441)" class="tx1">стол №4</text>
                <text transform="matrix(1 0 0 1 59.5089 86.3333)" class="tx1">стол №3</text>
                <text transform="matrix(1 0 0 1 62.1757 140.0674)" class="tx1">стол №2</text>
                <text transform="matrix(1 0 0 1 205.2981 306.0273)" class="tx1">стол №9</text>
                <text transform="matrix(1 0 0 1 203.6445 339.3608)" class="tx1">стол №10</text>
                <text transform="matrix(1 0 0 1 203.644 373.0275)" class="tx1">стол №11</text>
                <text transform="matrix(1 0 0 1 170.5837 372.604)" class="tx1">стол №12</text>
                <text transform="matrix(1 0 0 1 170.5839 339.937)" class="tx1">стол №13</text>
                <text transform="matrix(1 0 0 1 170.5838 306.2707)" class="tx1">стол №14</text>
                <text transform="matrix(1 0 0 1 359.1673 107.6983)" class="tx1">стол №6</text>
                <text transform="matrix(1 0 0 1 360.3089 160.4422)" class="tx1">стол №7</text>
                <text transform="matrix(1 0 0 1 361.2191 217.5186)" class="tx1">стол №8</text>
                <text transform="matrix(1 0 0 1 166.3335 153.6664)" class="tx1">центральный бар</text>
                <text transform="matrix(1 0 0 1 66.3335 296.9994)" class="tx1">офис бар</text>
                <polygon class="st1" points="413.8,9 407.7,9 36.3,9 24,9 24,21.3 24,304.9 24,311 24,317.1 140.2,317.1 140.2,411.6 146.7,411.6
	146.7,412.1 260.5,412.1 260.5,406 260.5,399.9 260.5,290.9 304.5,290.9 304.5,278.6 247.5,278.6 247.5,284.7 247.5,290.9
	247.5,399.9 153.2,399.9 153.2,317.1 153.2,308.3 153.2,304.9 36.3,304.9 36.3,21.3 407.7,21.3 407.7,278.6 363,278.6 363,290.9
	420,290.9 420,288.2 420,278.6 420,9 "></polygon>
                <rect x="304.5" y="269" class="ex0" width="58.5" height="26"></rect>
                <?
                echo $scgtext;
                ?>
            </svg>

        </div>
    </div>
<? bottom() ?>
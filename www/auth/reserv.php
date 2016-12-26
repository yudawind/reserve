<?
$zal = array_shift($URL_Parts);
$stol = array_shift($URL_Parts);
$data = array_shift($URL_Parts);
$load = 'disko';
$stol += 0;
if ($zal == 'bar22') $load = 'bar22';
else if ($zal == 'karaoke') $load = 'karaoke';
else if ($zal == 'terassa') $load = 'terassa';
$chas = date('H');
$minut = date('i');
$vremya = $chas.':00:00';
//echo $data;
//echo date('Y-m-dTH:i');

$tablecondsql = "SELECT * FROM `tables` WHERE `stol` = '$stol' AND `data` = '$data'";
$zan = mysqli_query($CONNECT, $tablecondsql);

while ($row = mysqli_fetch_assoc($zan))
{
    $stolzan = 'zanyat';
}

$vstav = '';
$res = mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$stol' ORDER BY `data`");
//    $res = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$_POST[tabl]'"));
$trstyle = 'norm';
$vstav .= '<table>';
$rows = [];
$st=1;
while ($row = mysqli_fetch_assoc($res))
{
    $row['time'] = substr($row['time'], 0, 5);
    if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
    elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
    else $trstyle = 'new';
    $vstav .= '<tr id="'.$st.'" class="'.$trstyle.'">';
    $vstav .= '<td>'.$st.'</td>';
    $vstav .= '<td hidden>'.$row['id'].'</td>';
    $vstav .= '<td hidden>'.$row['email'].'</td>';
    $vstav .= '<td>'.$row['name'].'</td>';
    $vstav .= '<td>'.$row['data'].'</td>';
    $vstav .= '<td class="count'.$row['count'].'">'.$row['time'].'</td>';
    $vstav .= '<td>'.$row['depozit'].'</td>';
    $vstav .= '<td>'.$row['tel'].'</td>';
    $vstav .= '<td>'.$row['text'].'</td>';
    $vstav .= '</tr>';
    $rows[$st] = $row;
    $st++;
//        if ($row['time']==$_POST['time']) message('Это время занято'.$row['time'].$_POST['time']);
}

$vstav .= '</table>';

?>
<div class="head_loc">
    <a class="btn" href="/<?=$load ?>">< НАЗАД</a>
<!--    &nbsp;<span id="loc">Зал. <b>--><?//=$zal?><!--</b></span>-->
<!--    &nbsp;<span id="stol">Стол <b>№--><?//=$stol?><!--</b></span>-->
</div>
<div class="rowflex">
    <div class="w70">
        <div class="des">Список резервов на <? echo $data ?></div>
        <div id="spis_rez" class="<? echo $stolzan ?>">
            <? echo $vstav ?>
        </div><label for="text">Примечания</label>
        <textarea id="text" name="text"></textarea>

        <button onclick="del_zak('id')">Отмена резерва</button>
        <button onclick="change_reserv()">Изменить резерв</button>
        <button>Пришел резерв</button>
        <button>Перенести резерва</button>
        <button onclick="post_query('gotable', 'zanyat', 'tabl.data.zal')">Пометить как занят</button>
        <button onclick="post_query('gotable', 'svoboden', 'tabl.data.zal')">Пометить как свободен</button>
<!--        <button>Резервировать</button>-->
    </div>
    <div class="w30">
<!--        <div class="h30"></div>-->
        <label hidden for="id">id</label><input hidden value="" type="number" id="id" name="id"/>
        <label hidden for="zal">Зал</label><input hidden disabled value="<? echo $zal ?>" type="text" id="zal" name="zal"/>
        <p><label for="tabl">Столик</label><input disabled value="<? echo $stol ?>" type="number" id="tabl" name="tabl"/></p>
        <p><label for="hostes">Кем принят заказ</label><input value="<? echo $_SESSION['name'] ?>" type="text" id="hostes" name="hostes"/></p>
        <p><label for="time">Время</label><input autofocus value="<? echo $vremya ?>" type="time" id="time" name="time"/></p>
        <p hidden><label for="cond">Состояние</label>
            <select name="cond" id="cond">
                <option value="0" selected>Резерв</option>
                <option value="1">Занят</option>
            </select>
        </p>
        <p><label for="count">Колличество</label><input value="1" type="number" id="count" name="count"/></p>
        <p><label for="name">Имя</label><input type="text" id="name" name="name" required/></p>
        <p><label for="tel">Телефон</label><input type="tel" id="tel" name="tel" required/></p>
        <p><label for="email">E-mail</label><input type="email" id="email" name="email" required/></p>
        <p><label for="depozit">Депозит</label><input type="text" id="depozit" name="depozit" required/></p>
        <button onclick="load_reserv('<? echo $zal ?>','<? echo $stol ?>')">Сброс</button>
            <button onclick="post_query('goreserv', 'reserv', 'hostes.zal.tabl.data.time.count.cond.name.tel.depozit.email.text')">Резервировать</button>


    </div>
</div>

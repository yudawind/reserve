<?
$id = array_shift($URL_Parts);

$vstav = '';
$res = mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `id` = '$id'");
//    $res = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT * FROM `reserve` WHERE `stol` = '$_POST[tabl]'"));
$trstyle = 'norm';
$vstav .= '<table>';
$rows = [];
$st=1;
$row = mysqli_fetch_assoc($res);

?>
<div class="head_loc">
    <a class="btn" href="/<?=$load ?>">< НАЗАД</a>
<!--    &nbsp;<span id="loc">Зал. <b>--><?//=$zal?><!--</b></span>-->
<!--    &nbsp;<span id="stol">Стол <b>№--><?//=$stol?><!--</b></span>-->
</div>
<div class="rowflex">
    <div>
<!--        <div class="h30"></div>-->
        <label hidden for="id">id</label><input hidden value="<? echo $row['id'] ?>" type="number" id="id" name="id"/>
        <p><label for="zal">Зал</label><input value="<? echo $row['zal'] ?>" type="text" id="zal" name="zal"/></p>
        <p><label for="tabl">Столик</label><input value="<? echo $row['stol'] ?>" type="number" id="tabl" name="tabl"/></p>
        <p><label for="hostes">Кем принят заказ</label><input value="<? echo $row['hostes'] ?>" type="text" id="hostes" name="hostes"/></p>
        <p><label for="tdata">Время</label><input autofocus value="<? echo $row['data'] ?>" type="date" id="tdata" name="tdata"/></p>
        <p><label for="time">Время</label><input autofocus value="<? echo $row['time'] ?>" type="time" id="time" name="time"/></p>
        <p><label for="count">Колличество</label><input value="<? echo $row['count'] ?>" type="number" id="count" name="count"/></p>
        <p><label for="name">Имя</label><input value="<? echo $row['name'] ?>" type="text" id="name" name="name" required/></p>
        <p><label for="tel">Телефон</label><input value="<? echo $row['tel'] ?>" type="tel" id="tel" name="tel" required/></p>
        <p><label for="email">E-mail</label><input value="<? echo $row['email'] ?>" type="email" id="email" name="email" required/></p>
        <p><label for="depozit">Депозит</label><input value="<? echo $row['depozit'] ?>" type="text" id="depozit" name="depozit" required/></p>
        <p><label for="text">Примечания</label><textarea id="text" name="text"><? echo $row['text'] ?></textarea></p>
        <button onclick="load_reserv('<? echo $zal ?>','<? echo $stol ?>')">Сброс</button>
            <button onclick="post_query('goreserv', 'edit', 'id.hostes.zal.tabl.tdata.time.count.name.tel.email.depozit.text')">Изменить</button>


    </div>
</div>

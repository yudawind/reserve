<?
$zal = array_shift($URL_Parts);
$stol = array_shift($URL_Parts);
$load = 'disko';
$stol += 0;
if ($zal == 'bar22') $load = 'bar22';
else if ($zal == 'karaoke') $load = 'karaoke';
else if ($zal == 'terassa') $load = 'terassa';
$chas = date('H');
$minut = date('i');
$vremya = $chas.':'.$minut.':00';
//echo $vremya;
//echo date('Y-m-dTH:i');
?>
<div class="head_loc">
    <button onclick="load_zal('<?=$load ?>')">< НАЗАД</button>
<!--    &nbsp;<span id="loc">Зал. <b>--><?//=$zal?><!--</b></span>-->
<!--    &nbsp;<span id="stol">Стол <b>№--><?//=$stol?><!--</b></span>-->
</div>
<div class="rowflex">
    <div class="w70">
        <div id="spis_rez">
            <?include 'loadreserv.php'?>
        </div>
        <button>Отмена резерва</button>
        <button>Изменить резерв</button>
        <button>Пришел резерв</button>
        <button>Перенести резерва</button>
        <button>Пометить как занят</button>
        <button>Пометить как свободен</button>
<!--        <button>Резервировать</button>-->
    </div>
    <div class="w30">
<!--        <div class="h30"></div>-->

            <p><label for="hostes">Админ</label><input value="<? echo $_SESSION['name'] ?>" type="text" id="hostes" name="hostes"/></p>
            <p><label for="zal">Зал</label><input value="<? echo $zal ?>" type="text" id="zal" name="zal"/></p>
            <p><label for="tabl">Столик</label><input value="<? echo $stol ?>" type="number" id="tabl" name="tabl"/></p>
            <p><label for="data">Дата</label><input value="<? echo date('Y-m-d')?>" type="date" id="data" name="data"/></p>
            <p><label for="time">Время</label><input value="<? echo $vremya ?>" type="time" id="time" name="time"/></p>
            <p><label for="count">Колличество</label><input value="1" type="number" id="count" name="count"/></p>
            <p><label for="name">Имя</label><input type="text" id="name" name="name" required/></p>
            <p><label for="tel">Телефон</label><input type="text" id="tel" name="tel" required/></p>
            <p><label for="depozit">Депозит</label><input type="text" id="depozit" name="depozit" required/></p>
            <p><label for="location">От куда поступил</label><input type="text" id="location" name="location" required/></p>
            <p><label for="text">Примечания</label><input type="text" id="text" name="text"/></p>
        <button onclick="load_reserv('<? echo $zal ?>','<? echo $stol ?>')">Сброс</button>
            <button onclick="post_query('goreserv', 'reserv', 'hostes.zal.tabl.data.time.count.name.tel.depozit.location.text')">Сохранить</button>


    </div>
</div>

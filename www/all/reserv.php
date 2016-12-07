<?
$zal = array_shift($URL_Parts);
$stol = array_shift($URL_Parts);
$load = 'disko';
if ($zal == 'bar22') $load = 'bar22';
echo date('Y-h-dTH:i');
?>
<div class="head_loc">
    <button onclick="load_<?=$load ?>()">НАЗАД</button>&nbsp;<span id="loc">Зал. <?=$zal?></span>&nbsp;<span id="stol">Стол №<?=$stol?></span>
</div>
<div class="rowflex">
    <div class="w70">
        <p>Список резервов:</p>
        <div id="spis_rez">
            Резервов нет
        </div>
        <button>Отмена резерва</button>
        <button>Изменить резерв</button>
        <button>Пришел резерв</button>
        <button>Перенести резерва</button>
        <button>Пометить стол как занят</button>
        <button>Пометить стол как свободен</button>
        <button>Резервировать</button>
    </div>
    <div class="w30">
        <div class="h30"></div>
        <label for="data">Дата</label><input value="<? echo date('Y-h-d')?>" type="date" id="data" name="data"/>
        <label for="time">Время</label><input value="<? echo date('H:i')?>" type="time" id="time" name="time"/>
        <label for="name">Имя</label><input type="text" id="name" name="name"/>
        <label for="tel">Телефон</label><input type="text" id="tel" name="tel"/>
        <label for="depozit">Депозит</label><input type="text" id="depozit" name="depozit"/>
        <label for="hostes">Кто принял</label><input type="text" id="hostes" name="hostes"/>
        <label for="location">От куда поступил</label><input type="text" id="location" name="location"/>
        <label for="text">Примечания</label><input type="text" id="text" name="text"/>
        <button>Сброс</button>
        <button>Сохранить</button>
    </div>
</div>

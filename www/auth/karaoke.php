<?
$_SESSION['loader'] = 0;

$data = array_shift($URL_Parts);
if (!$data) $data = date('Y-m-d');

$rezsql = "SELECT * FROM `reserve` WHERE `zal` = 'shooters' AND `data` = '" . $data . "' ORDER BY `time`";

$res = mysqli_query($CONNECT, $rezsql);
$tx = 53;
$ty = 142;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 41) {
        $row['time'] = substr($row['time'], 0, 5);
        if ($row['data'] < date('Y-m-d')) $trstyle = 'old';
        elseif ($row['data'] == date('Y-m-d')) $trstyle = 'norm';
        else $trstyle = 'new';
        $ty += 6;
        $scgtext .= '<text id="ts21" x="' . $tx . '" y="' . $ty . '" class="' . $trstyle . ' s' . $row['cond'] . '">';
        $scgtext .= '<tspan class="name">' . $row['name'] . ' </tspan>';
        $scgtext .= '<tspan>' . $row['time'] . '</tspan>';
        $scgtext .= '</text>';
    }
}


top('Лимончело') ?>

    <!--    <span>Залы: </span>-->
    <div class="fleft">
        <script>
            $(document).ready(function () {
            });
        </script>
        <label for="data"></label>
        <input value="<? echo $data ?>" type="date" id="data" name="data"/>
    </div>
    <div class="fright">
        <a class="btn" href="disko">Шутерс</a>
        <a class="btn" href="bar22">Бар 22</a>
        <a class="btn active" href="karaoke">Лимончелло</a>
        <a class="btn" href="terassa">Терасса</a>
    </div>

    <div id="space">

<div class="plan">
    <svg version="1.1" id="karaoke" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 944.5 705.1" style="enable-background:new 0 0 944.5 705.1;" xml:space="preserve">
        <rect x="85.3" y="307.5" class="st0" width="66.7" height="64.4"></rect>
        <rect x="85.3" y="225.8" class="st0" width="66.7" height="64.4"></rect>
        <rect x="85.3" y="145.8" class="st0" width="66.7" height="64.4"></rect>
        <rect x="85.3" y="68.7" class="st0" width="66.7" height="64.4"></rect>
        <rect x="193.7" y="68.7" class="st0" width="66.7" height="64.4"></rect>
        <rect x="280.3" y="68.7" class="st0" width="66.7" height="64.4"></rect>
        <rect x="361.2" y="68.7" class="st0" width="66.7" height="64.4"></rect>
        <rect x="725" y="68.7" class="st0" width="66.7" height="64.4"></rect>
        <rect x="796.3" y="173" class="st0" width="66.7" height="64.4"></rect>
        <rect x="796.3" y="271.8" class="st0" width="66.7" height="64.4"></rect>
        <rect x="648.2" y="68.7" class="st0" width="66.7" height="64.4"></rect>
        <rect x="570.7" y="68.7" class="st0" width="66.7" height="64.4"></rect>
        <rect x="725.3" y="356.9" class="st0" width="66.7" height="64.4"></rect>
        <rect x="648.5" y="356.9" class="st0" width="66.7" height="64.4"></rect>
        <rect x="571" y="356.9" class="st0" width="66.7" height="64.4"></rect>
        <rect x="357.5" y="364.5" class="st0" width="66.7" height="64.4"></rect>
        <rect x="280.7" y="364.5" class="st0" width="66.7" height="64.4"></rect>
        <rect x="203.2" y="364.5" class="st0" width="66.7" height="64.4"></rect>
        <rect x="464.8" y="67.7" class="st0" width="66.7" height="64.4"></rect>
        <rect x="46.2" y="42.1" class="st1" width="20" height="613.8"></rect>
        <rect x="883.7" y="42.1" class="st1" width="20" height="613.8"></rect>
        <rect x="46.2" y="32.5" class="st1" width="857.5" height="21.7"></rect>
        <rect x="46.2" y="634.2" class="st1" width="554.2" height="21.7"></rect>
        <rect x="714.5" y="634.2" class="st1" width="189.2" height="21.7"></rect>
        <rect x="749.5" y="454.2" class="st0" width="134.2" height="180.1"></rect>
        <rect x="66.2" y="404.5" class="st0" width="90" height="229.7"></rect>
        <rect x="374.5" y="540" class="st0" width="212.5" height="94.2"></rect>
        <text transform="matrix(1 0 0 1 90 330)" class="tx1">41</text>
        <text transform="matrix(1 0 0 1 90 249)" class="tx1">42</text>
        <text transform="matrix(1 0 0 1 90 169)" class="tx1">43</text>
        <text transform="matrix(1 0 0 1 90 91)" class="tx1">44</text>
        <text transform="matrix(1 0 0 1 198 88)" class="tx1">45</text>
        <text transform="matrix(1 0 0 1 285 88)" class="tx1">46</text>
        <text transform="matrix(1 0 0 1 366 88)" class="tx1">47</text>
        <text transform="matrix(1 0 0 1 730 88)" class="tx1">51</text>
        <text transform="matrix(1 0 0 1 801 192)" class="tx1">52</text>
        <text transform="matrix(1 0 0 1 801 291)" class="tx1">53</text>
        <text transform="matrix(1 0 0 1 653 88)" class="tx1">50</text>
        <text transform="matrix(1 0 0 1 575 88)" class="tx1">49</text>
        <text transform="matrix(1 0 0 1 730 376)" class="tx1">54</text>
        <text transform="matrix(1 0 0 1 653 376)" class="tx1">55</text>
        <text transform="matrix(1 0 0 1 576 376)" class="tx1">56</text>
        <text transform="matrix(1 0 0 1 362 384)" class="tx1">57</text>
        <text transform="matrix(1 0 0 1 285 384)" class="tx1">58</text>
        <text transform="matrix(1 0 0 1 208 384)" class="tx1">59</text>
        <text transform="matrix(1 0 0 1 469 90)" class="tx1">48</text>
        <text transform="matrix(1 0 0 1 433 595)" class="tx1">музыка</text>
        <text transform="matrix(4.030000e-003 -1 1 4.030000e-003 118.677 565.5085)" class="tx1">суши-бар</text>
        <text transform="matrix(4.030000e-003 -1 1 4.030000e-003 829.677 565.2117)" class="tx1">бар</text>
</svg>
</div>
<? bottom() ?>
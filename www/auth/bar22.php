<?
$_SESSION['loader'] = 0;

$data = array_shift($URL_Parts);
if (!$data) $data = date('Y-m-d');

$rezsql = "SELECT * FROM `reserve` WHERE `zal` = 'shooters' AND `data` = '" . $data . "' ORDER BY `time`";

$res = mysqli_query($CONNECT, $rezsql);
$tx = 53;
$ty = 142;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 21) {
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


top('Бар 22') ?>

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
    <a class="btn active" href="bar22">Бар 22</a>
    <a class="btn" href="karaoke">Лимончелло</a>
    <a class="btn" href="terassa">Терасса</a>
</div>

<div id="space">

<div class="plan">
    <svg version="1.1" id="bar22" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 738.7 841.9" style="enable-background:new 0 0 738.7 841.9;" xml:space="preserve">
        <rect x="453" y="659" class="st0" width="30" height="94"></rect>
        <rect x="523.2" y="401.5" class="st0" width="51.7" height="49.9"></rect>
        <rect x="522.8" y="344.9" class="st0" width="51.7" height="49.9"></rect>
        <rect x="112.8" y="42.7" class="st0" width="52.5" height="70"></rect>
        <rect x="112.8" y="147" class="st0" width="52.5" height="608.8"></rect>
        <rect x="293.9" y="326.2" class="st1" width="52" height="45"></rect>
        <rect x="622.5" y="426.5" class="st1" width="42" height="36.3"></rect>
        <path class="st1" d="M705.3,299.5h-10.8H507.8V24.3h-7.5h-16.7H20.3v9.2v9.2v709.8v13.3v10.8h463.3h10h14.2v-63.2h208.3v-6.7v-11.7
	V299.5H705.3z M694.5,695.2H507.8v-37.5h-24.2v37.5v18.3v39H37.8V42.7h445.8v290.8V356v86.9h24.2V322h186.7V695.2z"></path>
        <rect x="438.7" y="44.3" class="st0" width="45" height="143"></rect>
        <rect x="633.4" y="343.8" class="st0" width="50.1" height="50.8"></rect>
        <rect x="579.4" y="343.8" class="st0" width="50.1" height="50.8"></rect>
        <rect x="633.4" y="558.6" class="st0" width="50.1" height="50.8"></rect>
        <rect x="633.4" y="629.4" class="st0" width="50.1" height="50.8"></rect>
        <rect x="523.9" y="629.7" class="st0" width="50.1" height="50.8"></rect>
        <rect x="523.9" y="572.2" class="st0" width="50.1" height="50.8"></rect>
        <rect x="633.4" y="479" class="st0" width="50.1" height="50.8"></rect>
        <rect x="214.5" y="675.2" class="st0" width="238.3" height="77.3"></rect>
        <rect x="473.7" y="187.3" class="ex0" width="54.2" height="76.2"></rect>
        <rect x="250.3" y="16" class="ex0" width="139.2" height="40.8"></rect>
        <rect x="523.9" y="479" class="st0" width="50.1" height="50.8"></rect>
        <text transform="matrix(1 0 0 1 294.0826 720.842)" class="tx1">сцена</text>
        <text transform="matrix(7.730000e-003 -1 1 7.730000e-003 145 529)" class="tx1">барная стойка</text>
        <text transform="matrix(7.730000e-003 -1 1 7.730000e-003 466 173)" class="tx1">барная стойка</text>
        <text transform="matrix(7.730000e-003 -1 1 7.730000e-003 472 740)" class="tx1">пианино</text>
        <text transform="matrix(1 0 0 1 538 434)" class="tx1">21</text>
        <text transform="matrix(1 0 0 1 537 378)" class="tx1">22</text>
        <text transform="matrix(1 0 0 1 593 377)" class="tx1">23</text>
        <text transform="matrix(1 0 0 1 647 374)" class="tx1">24</text>
        <text transform="matrix(1 0 0 1 650 509)" class="tx1">25</text>
        <text transform="matrix(1 0 0 1 541 509)" class="tx1">26</text>
        <text transform="matrix(1 0 0 1 647 591)" class="tx1">27</text>
        <text transform="matrix(1 0 0 1 647 659)" class="tx1">28</text>
        <text transform="matrix(1 0 0 1 538 659)" class="tx1">29</text>
        <text transform="matrix(1 0 0 1 538 602)" class="tx1">30</text>
    </svg>
</div>
<? bottom() ?>
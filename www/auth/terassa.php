<?
$_SESSION['loader'] = 0;

$data = array_shift($URL_Parts);
if (!$data) $data = date('Y-m-d');

$rezsql = "SELECT * FROM `reserve` WHERE `zal` = 'shooters' AND `data` = '" . $data . "' ORDER BY `time`";

$res = mysqli_query($CONNECT, $rezsql);
$tx = 53;
$ty = 142;
while ($row = mysqli_fetch_assoc($res)) {
    if ($row['stol'] == 31) {
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


top('Терасса') ?>

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
        <a class="btn" href="karaoke">Лимончелло</a>
        <a class="btn active" href="terassa">Терасса</a>
    </div>

    <div id="space">

<div class="plan">
    <svg version="1.1" id="terassa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 595.3 429" style="enable-background:new 0 0 595.3 429;" xml:space="preserve">
        <polygon class="st1" points="463,46 463,46 85.5,46 67.5,46 67.5,62.4 67.5,228.9 67.5,245.9 67.5,382.9 67.5,399.4 85.5,399.4
	535,399.4 550.5,399.4 550.5,382.9 550.5,211 535,210.4 535,210.4 266.5,210.4 266.5,225.9 535,225.9 535,382.9 85.5,382.9
	85.5,245.9 227.5,245.9 227.5,237.4 227.5,228.9 227.5,206.9 213.5,206.9 213.5,228.9 85.5,228.9 85.5,62.4 463,62.4 463,118.4
	478.5,118.4 478.5,62.4 478.5,46 478.5,46 "></polygon>
        <rect x="227.5" y="233" class="st2" width="40.5" height="12.6"></rect>
        <rect x="227.5" y="220" class="st2" width="40.5" height="12.6"></rect>
        <rect x="227.5" y="208" class="st2" width="40.5" height="12.6"></rect>
        <rect x="280.5" y="63" class="st0" width="41.5" height="54.5"></rect>
        <rect x="346" y="63" class="st0" width="41.5" height="54.5"></rect>
        <rect x="411.5" y="63" class="st0" width="41.5" height="54.5"></rect>
        <rect x="410.5" y="156" class="st0" width="41.5" height="54.2"></rect>
        <rect x="347.5" y="155.7" class="st0" width="41.5" height="54.5"></rect>
        <rect x="280.5" y="156" class="st0" width="41.5" height="54.2"></rect>
        <rect x="286" y="234.2" class="st0" width="31.5" height="33.6"></rect>
        <rect x="101.9" y="251.4" class="st0" width="30.5" height="32.5"></rect>
        <rect x="147.8" y="251.4" class="st0" width="30.5" height="32.5"></rect>
        <rect x="191.4" y="251.4" class="st0" width="30.5" height="32.5"></rect>
        <rect x="355.5" y="234.2" class="st0" width="31.5" height="33.6"></rect>
        <rect x="420.3" y="234.2" class="st0" width="31.5" height="33.6"></rect>
        <rect x="486.5" y="234.2" class="st0" width="31.5" height="33.6"></rect>
        <rect x="457.4" y="324.9" class="st0" width="52.3" height="58.3"></rect>
        <rect x="368.5" y="324.9" class="st0" width="52.3" height="58.3"></rect>
        <rect x="278.5" y="324.9" class="st0" width="52.3" height="58.3"></rect>
        <rect x="188" y="325.2" class="st0" width="52.3" height="58.3"></rect>
        <rect x="101.9" y="324.9" class="st0" width="52.3" height="58.3"></rect>
        <rect x="143.1" y="78.8" class="st0" width="44.5" height="128.5"></rect>
        <rect x="462.8" y="155.3" class="st1" width="15.2" height="66.2"></rect>
        <text transform="matrix(-2.407977e-002 -0.8229 0.9998 -1.982000e-002 175.0281 165.0049)" class="tx1">БАР</text>
        <text transform="matrix(1 0 0 1 151 265)" class="tx1">72</text>
        <text transform="matrix(1 0 0 1 194 265)" class="tx1">73</text>
        <text transform="matrix(1 0 0 1 103 337)" class="tx1">70</text>
        <text transform="matrix(1 0 0 1 286 75)" class="tx1">31</text>
        <text transform="matrix(1 0 0 1 290 246)" class="tx1">62</text>
        <text transform="matrix(1 0 0 1 105 265)" class="tx1">71</text>
        <text transform="matrix(1 0 0 1 356 246)" class="tx1">63</text>
        <text transform="matrix(1 0 0 1 422 246)" class="tx1">64</text>
        <text transform="matrix(1 0 0 1 489 246)" class="tx1">65</text>
        <text transform="matrix(1 0 0 1 462 337)" class="tx1">66</text>
        <text transform="matrix(1 0 0 1 371 337)" class="tx1">67</text>
        <text transform="matrix(1 0 0 1 283 337)" class="tx1">68</text>
        <text transform="matrix(1 0 0 1 189 337)" class="tx1">69</text>
        <text transform="matrix(1 0 0 1 351 74)" class="tx1">32</text>
        <text transform="matrix(1 0 0 1 415 75)" class="tx1">33</text>
        <text transform="matrix(1 0 0 1 415 168)" class="tx1">34</text>
        <text transform="matrix(1 0 0 1 352 167)" class="tx1">35</text>
        <text transform="matrix(1 0 0 1 286 167)" class="tx1">36</text>
</svg>
</div>
<? bottom() ?>
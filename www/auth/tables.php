<?
$_SESSION['loader'] = 0;

top('Столики') ?>

    <span>Столики: </span>

    <button onclick="load_zal('disko')">Дискотека</button>
    <button onclick="load_zal('bar22')">Bar-22</button>
    <button onclick="load_zal('karaoke')">Караоке</button>
    <button onclick="load_zal('terassa')">Терасса</button>
<div id="space">
    <script>
        $(document).ready(function () {
            load_zal('disko');
        });
    </script>
</div>
<? bottom() ?>
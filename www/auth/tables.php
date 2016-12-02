<?
$_SESSION['loader'] = 0;

top('Столики') ?>

    <span>Столики: </span>


<button onclick="load_disko()">Дискотека</button> <button onclick="load_bar22()">Bar-22</button>
<div id="space">
    <script>
        $(document).ready(function () {
            load_disko()
        })
    </script>
</div>
<? bottom() ?>
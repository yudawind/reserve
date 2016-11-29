<?
$_SESSION['loader'] = 0;

top('История') ?>

    <h1>История</h1>

    <p>Привет <?echo $_SESSION['email']?></p>

    <script>
        function load_history() {
            $.get('/loader', function (data) {
                console.log(data);
                if (data == 'empty')
                    $('#space').text('История пуста');
                else if (data != 'end')
                    $('#space').append(data);
            })
        }
        $(document).ready(function () {
            load_history()
        })
    </script>
<button onclick="load_history()">Загрузить</button>
<div id="space"></div>
<? bottom() ?>
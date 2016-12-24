// zal='zal';
// stol='stol';

function load_reserv(zal,stol) {

    $.get('/reserv/'+zal+'/'+stol, function (data) {
        console.log('/reserv/'+zal+'/'+stol);
        if (data == 'empty')
            $('#space').text('История пуста');
        else if (data != 'end')
            $('#space').html(data);
    });
    // $('#space').html(result);
}
function load_zal(zal, date) {
    if (date) {
        $.get('/'+zal+'/'+date, function (data) {
            // console.log(data);
            if (data == 'empty')
                $('#space').text('Такого зала нет');
            else if (data != 'end')
                $('#space').html(data);
        });
    } else {
        $.get('/'+zal, function (data) {
            // console.log(data);
            if (data == 'empty')
                $('#space').text('Такого зала нет');
            else if (data != 'end')
                $('#space').html(data);
        });
    }

    // $('#space').html(result);
}
function post_query(url, name, data) {

    var str = '';

    $.each(data.split('.'), function (k, v) {
        str += '&' + v + '=' + $('#' + v).val();
    });
    console.log(str);
    $.ajax(
        {
            url: '/' + url,
            type: 'POST',
            data: name + '_f=1' + str,
            cache: false,
            success: function (result) {
                console.log(result);
                obj = jQuery.parseJSON(result);

                if (obj.go) go(obj.go);
                else alert(obj.message);


            }
        }
    );
}function post_add(url, name, data) {

    var str = '';

    $.each(data.split('.'), function (k, v) {
        str += '&' + v + '=' + $('#' + v).val();
    });
    console.log(str);
    $.ajax(
        {
            url: '/' + url,
            type: 'POST',
            data: name + '_f=1' + str,
            cache: false,
            success: function (result) {
                console.log('добавлен');
                $('#'+name).html(result);
            }
        }
    );
}
function post_order(url, name, data) {

    var str = '';

    console.log(data);

    $.each(data.split('.'), function (k, v) {
        str += '&' + v + '=' + $('#' + v).val();
    });
    console.log(str);
    $.ajax(
        {
            url: '/' + url,
            type: 'POST',
            data: name + '_f=1' + str,
            cache: false,
            success: function (result) {
                console.log('сортировка по'+data);
                $('#'+name).html(result);


            }
        }
    );
}
function post_stable(url, name, data) {

    var str = '';

    $.each(data.split('.'), function (k, v) {
        str += '&' + v + '=' + $('#' + v).val();
    });
    // console.log(str);
    $.ajax(
        {
            url: '/' + url,
            type: 'POST',
            data: name + '_f=1' + str,
            cache: false,
            success: function (result) {
                obj = jQuery.parseJSON(result);
                console.log(obj);
                console.log(obj[1]['id']);

                var items = [];
                for (i=0;i<obj.length;i++) { // формируем результаты
                    val = obj[i];
                    console.log(val);
                    val['speed'] = (val['speed']/10).toFixed(1);
                    val['accel'] = (val['accel']/10).toFixed(1);
                    val['turn'] = (val['turn']/10).toFixed(1);
                    val['brake'] = (val['brake']/10).toFixed(1);
                    genstrok = '<div class="odlosh"><a href="/edithorse/'+val['id']+'">'+
                        "<span class='img'><img src='/tpl/img/"+val['breed']+".png'> </span>"+
                        "<span class='sex'><img width='14' src='/tpl/img/sex0"+val['sex']+".png'></span>"+
                        "<p class='center'><b>&laquo;"+val['horsname']+"&raquo;</b><br>"+
                        "<span class='fleft'>#<span >"+val['id']+"</span></span>"+
                        "<span class='fright'>порода "+val['breed']+"</span></p>"+
                        "<div class='param'><table><tr><td>здоровье<br>"+val['health']+
                        "</td><td>энергия<br>"+val['power']+
                        "</td></tr><tr><td>скорость<br>"+val['speed']+
                        "</td><td>поворот<br>"+val['turn']+
                        "</td></tr><tr><td>ускорение<br>"+val['accel']+
                        "</td><td>торможение<br>"+val['brake']+
                        "</td></tr></table></div>"+'</a></div>';
                    items.push(genstrok);
                }
                spisok = $('<div />', {'id': 'moikoni', html: items.join('')});
                $('#'+name).html(spisok); // вставляем на страницу
                // $('#'+name).html(result);
            }
        }
    );
}
function go(url) {
    window.location.href = '/' + url;
}
function pokras () {
    for (k=1;k<74;k++) {
        c=$('#ts'+k);
        console.log(c);
        if (c) {
            b=c.attr('class');
            $('#rz'+k).addClass(b);
        }
    }
}
function godate() {
    date = $('#data').val();
    if ($('#disko')) pzal='disko/'+date;
    else if ($('#bar22')) pzal='bar22/'+date;
    else if ($('#karaoke')) pzal='karaoke/'+date;
    else pzal='terassa/'+date;
    go(pzal);
}

$(document).ready(function() {

    // $('#data').change(function(event) {
    //     date = $('#data').val();
    //     if ($('#disko')) load_zal('disko',date);
    //     else if ($('#bar22')) load_zal('bar22',date);
    //     else if ($('#karaoke')) load_zal('karaoke',date);
    //     else load_zal('terassa',date);
    //     pokras ();
    // });

    $('#data').change(function(event) {
        date = $('#data').val();
        if ($('#disko')) pzal='disko/'+date;
        else if ($('#bar22')) pzal='bar22/'+date;
        else if ($('#karaoke')) pzal='karaoke/'+date;
        else pzal='terassa/'+date;
        $('#data').keypress(
            function(event) {
                if(event.keyCode==13){
                    go(pzal);
                }
            }
        );
        // go(pzal);
        // pokras ();
    });

    $(document).keypress(function(event) {
        if(event.keyCode==13){
            $(event.target).parent().next().find('label').focus();
            event.preventDefault();
        }
    });

    pokras ();

});


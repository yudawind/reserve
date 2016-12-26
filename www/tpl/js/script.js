// zal='zal';
// stol='stol';

function load_reserv(zal,stol, data) {
    $.get('/reserv/'+zal+'/'+stol+'/'+data, function (data) {
        // console.log('/reserv/'+zal+'/'+stol+'/'+data);
        if (data == 'empty')
            $('#space').text('Резервов нет');
        else if (data != 'end')
            $('#space').html(data);
    });
}
function change_reserv() {
    iden = $('#id').val();
    console.log(iden);
    $.get('/cangereserv/'+iden, function (data) {
        console.log('/cangereserv/'+iden);
        if (data == 'empty')
            $('#space').text('Такого резерва нет');
        else if (data != 'end')
            $('#space').html(data);
    });
}
function load_zal(zal, stol) {
    if (stol) {
        $.get('/'+zal+'/'+stol, function (stol) {
            if (stol == 'empty')
                $('#space').text('Такого зала нет');
            else if (stol != 'end')
                $('#space').html(stol);
        });
    } else {
        $.get('/'+zal, function (stol) {
            if (stol == 'empty')
                $('#space').text('Такого зала нет');
            else if (stol != 'end')
                $('#space').html(stol);
        });
    }
}
function go(url) {
    window.location.href = '/' + url;
}
function del_zak(id) {
    var str = '';
    $.each(id.split('.'), function (k, v) {
        str += '&' + v + '=' + $('#' + v).val();
    });
    $.ajax(
        {
            url: '/del',
            type: 'POST',
            data: 'del_f=1' + str,
            cache: false,
            success: function (result) {
                console.log(result);
                obj = jQuery.parseJSON(result);
                location.reload()
            }
        }
    );
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
}
function pokras () {
    for (k=1;k<74;k++) {
        c=$('#ts'+k);
        if (c) {
            b=c.attr('class');
            $('#rz'+k).addClass(b);
        }
    }
    u=$('#hide p');
    for (b=0;b<u.length;b++) {
        if (u[b]) {
            $('#rz'+u[b].id).addClass('zanyat');
            // console.log(u[b].id);
            // console.log($('#rz'+u[b].id).attr('class'));
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
    });
    $(document).on('mouseup',function (e) {
        // console.log(e.target.tagName);
        tdTag = $('tr');
        // console.log(tdTag[0]);
        for (i=0;i<tdTag.length;i++){
            tdTag[i].classList.remove('active');
        }
        if (e.target.tagName=='TD') {
            g = e.target.parentNode;
            k = g.id;
            // console.log(k);
            g.classList.add('active');
            cn = g.childNodes;
            cnid = cn[1].innerHTML;
            cnmail = cn[2].innerHTML;
            console.log(cn[0].innerHTML);
            console.log('id '+cn[1].innerHTML);
            console.log('mail '+cn[2].innerHTML);
            console.log('name '+cn[3].innerHTML);
            console.log('data '+cn[4].innerHTML);
            console.log('time '+cn[5].innerHTML);
            console.log('depozit '+cn[6].innerHTML);
            console.log('tel '+cn[7].innerHTML);
            console.log('text '+cn[8].innerHTML);
            console.log(cnid);
            console.log($('#id'));
            $('#id').val(cnid);
            console.log($('#id').val());
        }
    });

    $(document).keypress(function(event) {
        if(event.keyCode==13){
            $(event.target).parent().next().find('label').focus();
            event.preventDefault();
        }
    });

    pokras ();

});


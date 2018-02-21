$(document).ready(function () {
    
    $('a[href="#tab1"]').on('click', function () {
        $('#tab2').removeClass('active');
        $('#tab1').addClass('active');
        $('a[href="#tab2"]').parent('li').removeClass('active');
        $(this).parent('li').addClass('active');
    });

    $('a[href="#tab2"]').on('click', function () {
        $('#tab1').removeClass('active');
        $('#tab2').addClass('active');
        $('a[href="#tab1"]').parent('li').removeClass('active');
        $(this).parent('li').addClass('active');
        if ($('#myfirstchart').children().length === 0) {
            new Morris.Line({
                element: 'myfirstchart',
                data: json,
                xkey: 'year',
                ykeys: ['value'],
                labels: ['返答件数']
            });
        }

    });
});

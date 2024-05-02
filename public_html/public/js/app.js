
var screen_width = $(window).width();
var screen_height = $(window).height();

$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.sidenav').css('z-index', '99');
     
    $(".close").click(function() {
        $(".alert").hide();
    });
    
});


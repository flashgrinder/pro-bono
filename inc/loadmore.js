jQuery(function($){
    $(window).scroll(function(){
        var bottomOffset = 2000,  // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты
            button = $( '#loadmore' ),
            paged = button.data( 'paged' ),
            maxPages = button.data( 'max_pages' );

        if( $(document).scrollTop() > ($(document).height() - bottomOffset) && !$('body').hasClass('loading')){
            $.ajax({
                type : 'POST',
                url : misha.ajax_url,
                data : {
                    paged : paged,
                    action : 'loadmore'
                },
                beforeSend: function( xhr){
                    $('body').addClass('loading');
                },
                success:function(data){
                    if( data ) {
                        paged++;
                        $('#loadmore').before(data);
                        $('body').removeClass('loading');
                    }
                }
            });
        }
    });
});
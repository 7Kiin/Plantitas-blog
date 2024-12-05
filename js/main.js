/* Filtro del menú del encabezado */

$(document).on('click', '.blog-filter li', function(){
    $(this).addClass('blog-filter-active').siblings().removeClass('blog-filter-active');
});


$(document).ready(function(){
    if ($('.blog-box').length){
        $('.list').click(function(){
            const value = $(this).attr('data-filter');
            if (value === 'all'){
                $('.blog-box').show('1000');
            } else {
                $('.blog-box').not('.' + value).hide('1000');
                $('.blog-box').filter('.' + value).show('1000');
            }
        })
    }
})

/* Encabezado fijo */

$(window).scroll(function(){
    if ($(document).scrollTop() > 80){
        $('nav').addClass('fix-nav');
    } else {
        $('nav').removeClass('fix-nav');
    }
});

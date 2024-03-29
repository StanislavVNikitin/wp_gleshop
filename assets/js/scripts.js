
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()



window.addEventListener('scroll', function () {
    document.getElementById('header-nav').classList.toggle('headernav-scroll', window.scrollY > 135);
})

jQuery(document).ready( function($){

    $(window).scroll(function (){
        if($(this).scrollTop() > 300 ){
            $('#top').fadeIn();
        }else{
            $('#top').fadeOut();
        }
    });

    $('#top').click(function (){
        $('html,body').animate({scrollTop:0},500);
        return false;
    });


    $(".owl-carousel-full").owlCarousel({
            margin: 20,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        }
    );

    $('body').on('adding_to_cart', function (e, btn, data){
        btn.closest('.product-card').find('.ajax-loader').fadeIn();
    });

    $('body').on('added_to_cart', function (e,response_fragments, response_cart_hash,btn ){
        btn.closest('.product-card').find('.ajax-loader').fadeOut();

    });

});

Fancybox.bind("[data-fancybox]", {
    // Your custom options
});
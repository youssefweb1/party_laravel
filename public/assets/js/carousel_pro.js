   
    $(document).ready(function(){
    var $carousel = $("#productCarousel");
    var itemCount = $carousel.children('.item').length;

    var owl = $carousel.owlCarousel({
        loop: itemCount > 1 , // تفعيل التكرار فقط إذا كان عدد العناصر أكبر من 4
        margin: 10,
        nav: false,
        dots: false, // إخفاء النقاط
        responsive:{
            0:{
                items: Math.min(2, itemCount) // عرض عنصرين كحد أقصى أو العدد الموجود إذا كان أقل
            },
            600:{
                items: Math.min(3, itemCount) // عرض 3 عناصر كحد أقصى أو العدد الموجود إذا كان أقل
            },
            1000:{
                items: Math.min(4, itemCount) // عرض 4 عناصر كحد أقصى أو العدد الموجود إذا كان أقل
            }
        }
    });

    $("#nextButton").click(function(){
        owl.trigger('next.owl.carousel');
    });
    $("#prevButton").click(function(){
        owl.trigger('prev.owl.carousel');
    });

  
});
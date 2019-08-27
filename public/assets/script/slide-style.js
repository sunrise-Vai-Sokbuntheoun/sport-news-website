$(document).ready(function () {
    var slide = $('.slide-box');
    var slIndex = 0;

    slide.hide();
    slide.eq(slIndex).show();
    interval();

    $('.btn-next').click(function () {
        slide.eq(slIndex).hide();
        slIndex++;
        if (slIndex == slide.length) {
            slIndex = 0;
        }
        slide.eq(slIndex).show();
    });
    $('.btn-prev').click(function () {
        slide.eq(slIndex).hide();
        if (slIndex == 0) {
            slIndex = slide.length;
        }
        slIndex--;
        slide.eq(slIndex).show();
    });

    var myVar;

    function interval() {
        myVar = setInterval(autoSlide, 3000);
    }

    function autoSlide() {
        slide.eq(slIndex).hide();
        slIndex++;
        if (slIndex == slide.length) {
            slIndex = 0;
        }
        slide.eq(slIndex).show();
    }

    $('.slide-full-width').mouseover(function () {
        clearInterval(myVar);
    });

    $('.slide-full-width').mouseleave(function () {
        interval();
    });
});

$(document).ready(function () {
    $(".button-collapse").sideNav();

    //PARALLAX
    $(window).stellar();

    //NICE SCROLL
    $("html").niceScroll({
        cursorcolor: "rgba(30,30,30,.5)"
        , zindex: 999
        , scrollspeed: 100
        , mousescrollstep: 50
        , cursorborder: "0px solid #fff"
    });

    //FADE IN
    $(window).scroll(function () {
        $('.hideme').each(function (i) {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if (bottom_of_window > bottom_of_object) {
                $(this).animate({
                    'opacity': '1'
                }, 600);
            }
        });
    });

    //SMOOTH SCROLL ON NAVIGATION CLICK
    $('nav a').click(function () {
        var $href = $(this).attr('href');
        $('body').stop().animate({
            scrollTop: $($href).offset().top
        }, 1000);
        return false;
    });

    //BACK TO TOP
    $('#toTop a').click(function () {
        $('body').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    //SKILLS
    $("#java").hover(function () {
        $("#bar_java").animate({
            height: "40%"
        }, 1000);
        $('.desc_java').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#android").hover(function () {
        $("#bar_android").animate({
            height: "35%"
        }, 1000);
        $('.desc_android').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#php").hover(function () {
        $("#bar_php").animate({
            height: "75%"
        }, 1000);
        $('.desc_php').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#htmlcss").hover(function () {
        $("#bar_htmlcss").animate({
            height: "80%"
        }, 1000);
        $('.desc_htmlcss').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#jsjquery").hover(function () {
        $("#bar_jsjquery").animate({
            height: "50%"
        }, 1000);
        $('.desc_jsjquery').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#cssframeworks").hover(function () {
        $("#bar_cssframeworks").animate({
            height: "55%"
        }, 1000);
        $('.desc_cssframeworks').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#sql").hover(function () {
        $("#bar_sql").animate({
            height: "60%"
        }, 1000);
        $('.desc_sql').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#git").hover(function () {
        $("#bar_git").animate({
            height: "35%"
        }, 1000);
        $('.desc_git').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#networking").hover(function () {
        $("#bar_networking").animate({
            height: "50%"
        }, 1000);
        $('.desc_networking').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#aips").hover(function () {
        $("#bar_aips").animate({
            height: "50%"
        }, 1000);
        $('.desc_aips').animate({
            'opacity': '1'
        }, 1500);
    });

    $("#experienced-btn").click(function () {
        $("#experienced").css("display", "inherit");
        $("#familiar").css("display", "none");
        $("#interested").css("display", "none");
    });

    $("#familiar-btn").click(function () {
        $("#experienced").css("display", "none");
        $("#familiar").css("display", "inherit");
        $("#interested").css("display", "none");
    });

    $("#interested-btn").click(function () {
        $("#experienced").css("display", "none");
        $("#familiar").css("display", "none");
        $("#interested").css("display", "inherit");
    });
    
    $("#all-btn").click(function () {
        $("#experienced").css("display", "none");
        $("#familiar").css("display", "none");
        $("#interested").css("display", "none");
    });

    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.skill-item'
    });
    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        }, // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };
    // bind filter button click
    $('.filters-button-group').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({
            filter: filterValue
        });
    });
    // change is-checked class on buttons
    $('.button-group').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });

     //TOAST ON CLICK
    $('#gmail').click(function() {
        var $toastContent = $('<span id="toast">asd.artsandiego@gmail.com</span>');
        Materialize.toast($toastContent, 5000);
    });

    $('#mobile').click(function() {
        var $toastContent = $('<span id="toast">Email me for my mobile number</span>');
        Materialize.toast($toastContent, 5000);
    });

    $('.gmail').click(function() {
        var $toastContent = $('<span id="toast">asd.artsandiego@gmail.com</span>');
        Materialize.toast($toastContent, 5000);
    });

    $('.mobile').click(function() {
        var $toastContent = $('<span id="toast">Email me for my mobile number</span>');
        Materialize.toast($toastContent, 5000);
    });

    $('.resume').click(function() {
        var $toastContent = $('<span id="toast">Email me for my Resume</span>');
        Materialize.toast($toastContent, 5000);
    });

    //PARALLAX
    $('.parallax').parallax();

    //COLLAPSIBLE
    var collapsible = [{
        selector: '.collapsible',
        offset: 0,
        callback: function() {
            Materialize.showStaggeredList(".collapsible");
            $('.collapsible').animate({
                'opacity': '1'
            }, 1000);
        }
    }];
    Materialize.scrollFire(collapsible);

    //SKILLS
    var $toastContent = $('<span id="toast">Hover on an icon to show the level of proficiency.</span>');
    var skills = [{
        selector: '#skills',
        offset: 500,
        callback: function() {
            Materialize.toast($toastContent, 5000);
        }
    }];

    Materialize.scrollFire(skills);

    //TOOLTIP
    $('.tooltipped').tooltip({
        delay: 50
    });

});

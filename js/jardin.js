
$(function () {
//    alert("jquery ok");
    $(".button-collapse").sideNav();

    $('.carousel').carousel({dist: 0});
    window.setInterval(function () {
        $('.carousel').carousel('next');
    }, 1500);
    $('.slider').slider('start');
    $('#presentation').slider({full_width: true, height: 150});


// $('#qui2').click( $('#whoami .slider').slider({full_width: true}) );

    $('#qui2').click(function () {
//        alert('qui2  Slider........');
//        $('#gerant').slider({full_width: true});
        $('#modal1').openModal();

    });

//    $('.modal-trigger').leanModal();
});
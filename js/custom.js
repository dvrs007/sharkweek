(function(){

	$('.vine-title h2').hover(function () {
        $(this).html('Vine');
    }, function () {
        $(this).html('<i class="fa fa-vine"></i>');
    });

    $('.twitter-title h2').hover(function () {
        $(this).html('Twitter').fadeIn();
    }, function () {
        $(this).html('<i class="fa fa-twitter"></i>');
    });

    $('.insta-title h2').hover(function () {
        $(this).html('Instagram');
    }, function () {
        $(this).html('<i class="fa fa-instagram"></i>');
    });

}());
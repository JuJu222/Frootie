function LoopForever() {
    $('h1').animate({'opacity': 0}, 1000, function () {
        $(this).html('Daily Picked <br>Just For You!<br>');
    }).animate({'opacity': 1}, 1000)
        .delay(2000);

    $('h1').animate({'opacity': 0}, 1000, function () {
        $(this).html('The Best Fruits <br>In Town!<br>');
    }).animate({'opacity': 1}, 1000)
        .delay(2000);

    $('h1').animate({'opacity': 0}, 1000, function () {
        $(this).html('Try Out Our New <br>Fresh Fruits!');
    }).animate({'opacity': 1}, 1000)
        .delay(2000);
}

var interval = self.setInterval(function(){LoopForever()},2000);
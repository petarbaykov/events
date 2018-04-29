var end = new Date('07/18/2018 10:1 AM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        $('.days span').html(days);
        $('.hours span').html(hours);
        $('.minutes span').html(minutes);
        $('.seconds span').html(seconds);
      /*  document.getElementById('countdown').innerHTML = days + 'days ';
        document.getElementById('countdown').innerHTML += hours + 'hrs ';
        document.getElementById('countdown').innerHTML += minutes + 'mins ';
        document.getElementById('countdown').innerHTML += seconds + 'secs';*/
    }

    timer = setInterval(showRemaining, 1000);

    $(document).ready(function(){
      $("nav li a").click(function() {
          $(this).preventDefault;
          $('html, body').animate({
              scrollTop: $("."+$(this).attr('id')).offset().top - 250
          }, 2000);
          $(this).parent().addClass('active').siblings().removeClass( 'active' );
      });
      $(window).bind('scroll', function() {
          activeMenu();
      });
    });
function activeMenu(){
  var currentTop = $(window).scrollTop();
  var elems = $('.scrollspy');

  elems.each(function(index){

    var elemTop 	= $(this).offset().top - 250;
    var elemBottom 	= elemTop + $(this).height();
    if(currentTop >= elemTop && currentTop <= elemBottom){
      console.log('asd')
      var id 	= this.classList;
      console.log(id);
      var navElem = $('nav li a#' + id[0]+ '');
  navElem.parent().addClass('active').siblings().removeClass( 'active' );
    }
  })
}

$( document ).ready(function() {
  // Handler for .ready() called.
  $("#magic_line").animate({width: $('#content_bar').offset().left}, 'normal');
  $("#magic_line").animate({width: 0, left: $('.icon_holder').offset().left + $('#content_bar').offset().left}, 'normal');
  setTimeout(function(){
  		$('#magic_line').animate({width: $('.active a').width() + 20, left: $('.active a').offset().left + 40});
	}, 800);

  // $('.menu_tab').click(function() {
  // 	$('.menu_tab').removeClass('active');	
  // 	$(this).addClass('active');

  // 	setTimeout(function(){
  //   		$('#magic_line').animate({width: $('.active').width() + 20, left: $('.active').offset().left + 40});
  // 	}, 100);

  //   // console.log($(this).text());
  //   if ($(this).text() === "Blog")
  //     $("#container").empty().load('index.php/application/getblog');
  //   else
  //     $("#container").empty().load('index.php/application/gethome');
  // });

  // console.log();
});
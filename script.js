var height = $('#header').height();
alert($('#header').height());
$(window).scroll(function(){
// alert($(this).scrollTop());
if($(this).scrollTop() > height)
{
  alet('fixed');
$('.navbar').addClass('fixed');

}
else

 {
   alert('not fixed');
  $('.navbar').removeClass('fixed');
}

}
)

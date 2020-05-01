$('.myImg').click(function(){
  var src=$(this).attr('src');
  var dataname=$(this).data('title');

  $('.modal').modal('show');
  $('.popup-img').attr('src',src);
  $('.img_title').html(dataname);
});
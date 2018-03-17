$(function(){
  var header = document.getElementById('header');
  var headroom = new Headroom(header);
  headroom.init();

  $( "#btn-menu" ).click(function() {
    $("#menuNav").toggle();
    //$("#menuNav").css("display","block","none");
  });
});

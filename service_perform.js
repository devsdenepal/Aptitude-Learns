$(document).ready(function(){
  $("#notify").click(function(){
    $("#notify_panel").slideDown("slow");
   

  });
  $("#notify_panel").click(function(){
    $("#notify_panel").slideUp("slow");
  });
  $("#menu").click(function(){
    $(".sidenav").slideDown("slow");
  });
  $("#live").click(function(){
 
   let live = window.open("https://studio.youtube.com/channel/"+ cid +"/livestreaming","MsgWindow", "width=780,height=420");
    
   live.name="learns";
  });
});

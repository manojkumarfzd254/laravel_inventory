  window.addEventListener('load', 
  function() { 

      // start menu cog
  $("#cog").click(function(){
    var baction = $(this).attr("lbaction");
    if(screen.width >= 769){
      if(baction == "full"){
        $(this).attr("lbaction","small");
        $(".sidebar-dynamic").css({width: '55px'});
        $(".contentbar").css({width: 'calc(100% - 55px)'});
        $(".sidebar-title").removeClass('d-none');
        $(".responsive").addClass('d-none');
      }
      else{
        $(this).attr("lbaction","full");
         $(".sidebar-dynamic").css({width: '260px'});
        $(".contentbar").css({width: 'calc(100% - 260px)'});
         $(".sidebar-title").addClass('d-none');
        $(".responsive").removeClass('d-none');
      }
  }
  else{
      if(baction == "full"){
       $(this).attr("lbaction","small");
        $(".sidebar-dynamic").css({width: '0px'});
        $(".contentbar").css({width: 'calc(100% - 0px)'});
      }
      else{
         $(this).attr("lbaction","full");
         $(".sidebar-dynamic").css({width: '260px'});
        $(".contentbar").css({width: 'calc(100% - 260px)'});
      }
  }
  });

// end menu cog
    // start full screen code
  const fullscreen = document.getElementById("fullscreen");
  fullscreen.onclick = function(){
    var elem = document.documentElement;
    var baction = $(this).attr("lbaction");
    if(baction == "full"){
      this.setAttribute("lbaction","small");
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) { /* Safari */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
      elem.msRequestFullscreen();
    }
  }
  else{
      this.setAttribute("lbaction","full");
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.webkitExitFullscreen) { /* Safari */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE11 */
      document.msExitFullscreen();
    }
  }
  }
  // end full screen ===========================
  }, false);


  $(document).ready(function(){ 
    $("#sidebar-menu li").click(function(){
     $(this).parent().children('li').next('div').slideUp(500);
      $("#sidebar-menu li[aria-expanded=true]").attr("aria-expanded", "false");
      var tag = $(this).next("div");
      if(tag.length != 0) {
        if($(this).next("div").css("display") == "none"){
          $(this).next('div').slideDown(500);
          $(this).attr("aria-expanded","true");
        }
        else{
          $(this).next('div').slideUp(500);
          $(this).attr("aria-expanded","false");
        }
      }
      else{
        $(this).attr("aria-expanded", "true");
      }
    });

});


  

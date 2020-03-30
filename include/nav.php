
<script type="text/javascript">
$(function(){
  $(window).scroll(function(){
    var winTop = $(window).scrollTop();
    if(winTop >= 30){
      $("body").addClass("sticky-header");
    }else{
      $("body").removeClass("sticky-header");
    }//if-else
  });//win func.
});//ready func.
</script>


<header>
    <h1>AlloSimplon</h1>
    <nav>
      <a href="">Home</a>
      <a href="">About</a>
      <a href="">Gallery</a>
      <a href="">Contact</a>
    </nav>
</header>
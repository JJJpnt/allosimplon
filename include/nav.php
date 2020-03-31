
<script type="text/javascript">
$(function(){
    var lastScrollTop = 0;
    $(window).scroll(function(){
        st = $(this).scrollTop();
        console.log(st);
        if((st <= 40)||(st < lastScrollTop)){
            // console.log("<40 or up");
            $("body").removeClass("sticky-header");
        }else{
            // console.log(">40 or down");
            $("body").addClass("sticky-header");
        }
        if(st >= 250){
            $("header").addClass("nav-opaque");
        }else{
            $("header").removeClass("nav-opaque");
        }

        lastScrollTop = st;
    });
});
</script>

<?php include("connect_modal.php"); ?>

<header>
    <div class="row">
        
        <div><a class="ml-5 align-middle" href="" data-toggle="modal" data-target="#connectModal">Se Connecter</a></div>
        <h1 class="col-6 mx-auto">AlloSimplon</h1>
        <div><a class="mr-5 align-middle" href="" data-toggle="modal" data-target="#connectModal">Se Connecter</a></div>
    </div>
    <nav>
      <a href="">Home</a>
      <a href="">About</a>
      <a href="">Gallery</a>
      <a href="">Contact</a>
    </nav>
</header>

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
    <div class="d-flex align-items-center justify-content-between">
        <div class="nav-side ml-3">
            <div class="input-group input-group-sm form-group">
                <input type="password" class="form-control" placeholder="password">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
        <!-- <div>
            <form action="">
                <input type="text" placeholder="Rechercher..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div> -->
        <h1 class=""><span class="color-danger">A</span>llo<span class="color-danger">S</span>implon</h1>
        <div class="nav-sides mr-3"><a class="align-middle" href="" data-toggle="modal" data-target="#connectModal">Se Connecter</a></div>
    </div>
    <nav>
        <a href="">Home</a>
        <a href="">About</a>
        <a href="">Gallery</a>
        <a href="">Contact</a>
    </nav>
</header>
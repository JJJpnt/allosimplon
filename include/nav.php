
<script type="text/javascript">
$(function(){
    var lastScrollTop = 0;
    $(window).scroll(function(){
        st = $(this).scrollTop();
        // console.log(st);
        if((st <= 40)||(st < lastScrollTop)){
            // console.log("<40 or up");
            // $("body").removeClass("sticky-header");
            $("header").css("marginTop", 0 );
        }else{
            // console.log(">40 or down");
            $("header").css( "marginTop", ($("#header-top").height()*-1) );
            // $("body").addClass("sticky-header");
        }
        if(st >= 250){
            $("header").addClass("nav-opaque");
        }else{
            $("header").removeClass("nav-opaque");
        }

        lastScrollTop = st;
    });

    $(".filtersButton").click(function () {

        // $header = $(this);
        // //getting the next element
        // $content = $header.next();
        // //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
        // $content.slideToggle(500, function () {
            //execute this after slideToggle is done
            //change text of header based on visibility of content div
            // $header.text(function () {
            //     //change text based on condition
            //     return $content.is(":visible") ? "Collapse" : "Expand";
            // });
        // });

        $("#filtersCollapse" ).toggleClass("filtersExpanded");

    });

});




</script>



<?php include("consts.php"); ?>

<?php include("connect_modal.php"); ?>

    <header>
        <div id="header-top" class="d-flex align-items-center justify-content-between">
            <div class="nav-search ml-3">
                <div class="input-group input-group-sm form-group">
                    <input type="search" class="form-control" placeholder="Rechercher">
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
            <!-- <div class="nav-sides mr-3 align-middle"><a class="text-right" href="" data-toggle="modal" data-target="#connectModal">Se Connecter&nbsp;&nbsp;<i class="fas fa-sign-in-alt" style="vertical-align: -0.065rem;"></i></a></div> -->
            <?php
                // if( isset($_SESSION['id_user']) and isset($_SESSION['user_pseudo']) ) {
                if( isset($_SESSION['user_pseudo']) ) {
                    echo '<div class="nav-user mr-3 align-middle"><div>Connecté en tant que : '.$_SESSION['user_firstname'].'&nbsp;'.$_SESSION['user_lastname'].'<a class="text-right" href="userpanel.php">Mon compte</a><br><a class="text-right" href="include/user_logout.php">Se déconnecter&nbsp;&nbsp;<i class="fas fa-sign-out-alt" style="vertical-align: -0.065rem;"></i></a></div></div>';
                }else{
                    echo '<div class="nav-user mr-3 align-middle"><a class="text-right" href="" data-toggle="modal" data-target="#connectModal">Se Connecter&nbsp;&nbsp;<i class="fas fa-sign-in-alt" style="vertical-align: -0.065rem;"></i></a></div>';
                }
            ?>
            
            
            
            
        </div>
        <nav>
            <a href="">Home</a>
            <a class=".filtersButton" href="#filtersCollapse" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtersCollapse">Filtres</a>
            <a href="" data-toggle="modal" data-target="#filmModal">Film</a>
            <a href="">Contact</a>
            <a href=""><?php //echo $_SESSION['user_pseudo'];?></a>

            
        </nav>
        <div class="collapse filters" id="filtersCollapse">
            <!-- <div class="card card-body"> -->
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            <!-- </div> -->
        </div>
    </header>

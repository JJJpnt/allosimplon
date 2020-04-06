<?php 

// <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
//   <div><h3>1</h3></div>
//   <div><h3>2</h3></div>
//   <div><h3>3</h3></div>
//   <div><h3>4</h3></div>
//   <div><h3>5</h3></div>
//   <div><h3>6</h3></div>
// </div>
?>

<div class="slick-container">
    <div class="slick-slider<?php echo $slider_set ?>">

    <?php

    for($i=0;$i<15;$i++)
    {
    echo '<div class="film-card d-flex align-items-end">
            <div class=" bg-dark-trans p-1 w-100 text-left">
                <h5 class="card-text">Film Titre</h5>
                <p class="card-text">1h35 - USA</p>
            </div>
        </div>';
    }
    
    ?>

    </div>
</div>

<?php
if(!isset($slick_loaded)){
echo '<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>';
$slick_loaded=true;
}
?>
<!-- <script type="text/javascript" src="slick\slick\slick.min.js"></script> -->
    <script type="text/javascript">

$('.slick-slider<?php echo $slider_set ?>').slick({
    centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
</script>
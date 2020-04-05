<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    
    <!-- Fontawesome -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/brands.css" rel="stylesheet" type="text/css">

    <title>AlloSimplon - VOD</title>

    <!-- Slick -->
    <!-- <link rel="stylesheet" type="text/css" href="vendorslick/slick.css"/> -->
    <!-- Add the new slick-theme.css if you want the default styling -->
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Revolution Slider -->
    <?php include('include/topslider_headincludes.php'); ?>
    
</head>

<body>
    <?php include('include/connect_db.php'); ?>
    <?php include('include/nav.php'); ?>
    <?php include('include/topslider.php'); ?>
    <?php include('include/film_modal.php'); ?>

    <?php include('include/film_slider.php'); ?>

    
    <div class="placeholder mt-5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit, magna et condimentum viverra, sem arcu viverra elit, eget posuere tellus risus sit amet sem. Donec eleifend ullamcorper ultrices. Nunc feugiat, odio sit amet vestibulum laoreet, lorem ipsum lobortis dolor, id lobortis quam ligula eu risus. Etiam ullamcorper ultrices odio, feugiat cursus lacus. Proin porta urna neque, porta convallis lorem sagittis eget. Nunc tempor magna a dignissim tincidunt. In id massa nec mi egestas fringilla vitae eget magna. Sed posuere ultrices enim, ac egestas ipsum. Donec porta pulvinar nibh nec ullamcorper. Ut in dignissim nisi, hendrerit scelerisque augue.
        
        Sed dignissim vulputate tempor. Duis nec metus nec metus egestas tincidunt. Etiam suscipit bibendum elit eu bibendum. Donec mauris tortor, venenatis ac posuere id, ultrices id eros. Proin nisi nunc, molestie vitae pretium lobortis, pellentesque in est. Praesent fringilla neque odio, at feugiat ante aliquet id. Nulla justo elit, sagittis vitae risus sed, placerat eleifend odio. Etiam maximus ac urna vel commodo. Ut faucibus venenatis bibendum. Pellentesque consectetur, nunc sit amet porttitor mattis, augue diam laoreet arcu, et ullamcorper velit ante in sapien. Maecenas feugiat sem ut nisi sodales, a tempus purus ornare. Ut venenatis ex eu tempor ultricies.
        
        Nam auctor scelerisque dui eu tincidunt. Aliquam eget laoreet tortor, ac consectetur sem. In hac habitasse platea dictumst. Proin id enim sit amet risus auctor tincidunt a eu augue. Aliquam eget nisi libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eu fringilla eros, in elementum enim. Phasellus nulla tellus, molestie id finibus sed, venenatis sed enim. Duis finibus, magna eget malesuada congue, augue est egestas velit, sed suscipit nisi turpis id ante. Sed elementum bibendum ligula a commodo. Maecenas iaculis sem eu tellus interdum elementum. Proin volutpat lacinia accumsan. Proin malesuada velit orci, quis convallis est ultrices ut.
        
        Sed ex odio, fermentum a metus sit amet, venenatis sollicitudin mauris. Nulla facilisi. Ut mattis purus non auctor aliquet. Pellentesque non diam tristique, aliquam lectus egestas, varius tortor. Suspendisse nec nunc ut justo bibendum molestie. Proin fermentum, quam vitae blandit mattis, libero tellus egestas ligula, non tristique enim enim eget risus. Sed interdum enim at sagittis elementum. Donec vitae feugiat arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut sit amet arcu auctor, vestibulum elit eu, elementum arcu. Morbi dignissim tincidunt luctus. Nulla sem arcu, gravida a nibh nec, commodo finibus diam. Nulla eget nisl in lorem gravida semper vitae pellentesque lorem. In laoreet est orci, vitae lobortis justo eleifend nec.
        
        Mauris a nunc a magna consequat vulputate vel et nibh. Nullam vehicula volutpat finibus. Fusce vel sagittis lorem. Duis a semper nisi, id aliquet enim. Etiam vitae pharetra leo. Phasellus vel ultricies mi. Nam nec pellentesque erat, nec pellentesque ex.

        Curabitur dolor nulla, interdum et placerat nec, imperdiet ut quam. Curabitur ornare tellus enim, vitae aliquam quam pulvinar vitae. Etiam arcu erat, posuere vitae elementum vitae, condimentum et ligula. Curabitur ornare ultricies mauris, id porttitor augue aliquet sit amet. Aenean aliquet metus eget orci cursus maximus. Suspendisse et placerat libero. Etiam diam lectus, sollicitudin vitae imperdiet sed, ultricies a dolor. Etiam suscipit congue ex at varius. Integer mauris magna, aliquet faucibus ex id, bibendum dictum odio.
        
        Mauris placerat eros eget mauris viverra porttitor. Quisque vel dolor sapien. Vivamus non felis placerat, pellentesque nisi at, pharetra mi. Integer eu egestas eros. Nam id fermentum ligula. Donec at lectus id tortor congue eleifend. Fusce eget lectus molestie, placerat quam vestibulum, ultricies eros. Vestibulum felis purus, aliquam et orci quis, laoreet consequat leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In auctor lacinia congue. Donec orci felis, aliquet sed tristique nec, aliquam nec nibh. Nam tristique mollis est, ac eleifend tortor feugiat non.
        
        Curabitur at fringilla mi, sit amet lobortis mauris. Nam in tincidunt velit. Cras quam nulla, ornare at sollicitudin in, pretium sit amet erat. Nam vel dui vitae nisl feugiat sollicitudin. Suspendisse facilisis posuere pellentesque. Integer nulla nisl, varius in turpis at, blandit dignissim lorem. Maecenas purus tortor, suscipit in felis eu, viverra consequat ex. Aenean vestibulum, leo et posuere volutpat, lectus augue rutrum tellus, sit amet ultricies tellus leo vitae felis. Cras vitae vestibulum dolor.
        
        Curabitur tincidunt tincidunt libero, eget pellentesque sem interdum eu. Integer nec metus et velit tristique imperdiet. Morbi tincidunt lacus gravida varius rhoncus. Praesent leo sem, sodales eu tellus sit amet, vulputate egestas lacus. Cras quis pulvinar nulla. Vivamus vehicula erat sapien, in aliquet nisi euismod vel. Phasellus pellentesque in orci a tempus. Donec ullamcorper mattis turpis, a volutpat dolor mollis ac.
        
        Nulla faucibus sollicitudin lacinia. Maecenas imperdiet pharetra nisi, ut commodo magna. Phasellus faucibus massa odio, quis euismod enim mattis ultricies. Fusce vehicula ut felis iaculis ultrices. Fusce sagittis leo interdum libero vulputate, at efficitur enim pulvinar. Vestibulum aliquet aliquam consequat. Nullam ac semper libero, in mollis velit. Etiam at diam efficitur, porta felis non, semper eros. Suspendisse eu orci id sem suscipit pellentesque sagittis vitae arcu. Duis tempor non leo at scelerisque. In laoreet finibus risus, vel accumsan nisi eleifend in.        
    </div>
    
    <?php include('include/footer.php'); ?>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Slick -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->

  </body>
</html>
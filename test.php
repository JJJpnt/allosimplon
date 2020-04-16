<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">




$(function(){

    function film_is_genre(idFilm, idGenre) {

        var dat = $.post('include/film_is_genre.php', {id_film: idFilm, id_genre: idGenre}, function (data) 
        {
            // alert('données:'+JSON.stringify(data));
            // console.log('données:'+JSON.stringify(data));
            // console.log('row 1 :'+JSON.stringify(data[1]));
        }
        );
        return dat;
    }
    
    var dat = film_is_genre(1,1);
    alert(dat);

});



</script>

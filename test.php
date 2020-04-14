<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">

$(function(){

        $.post('include/film_is_genre.php', {id_film: 1, id_genre: 1}, function (data) 
        {
            alert("blah");
            console.log('données:'+JSON.stringify(data));
            // console.log('row 1 :'+JSON.stringify(data[1]));
        }
        );
});



</script>

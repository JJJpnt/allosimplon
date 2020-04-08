<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">

$(function(){

        $.getJSON('include/get_genres.php', function (data) 
        {
            console.log('données:'+JSON.stringify(data));
            console.log('row 1 :'+JSON.stringify(data[1]));
        }
        );
});



</script>

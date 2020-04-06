<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">

$(function(){

    // $.getJSON('include/get_genres.php', , function(data) {
    // $.getJSON('include/get_genres.php', { get_param: 'value' }, function(data) {
        // $.each(data, function(index, element) {
        //     $('.filter-list').append($('<span>', {
        //         text: element.name
        //     }));
        
        $.getJSON('include/get_genre.php', function (data) 
        {
            console.log('données:'+data);
        }
        );
        // });
// });

});

</script>

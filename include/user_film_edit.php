

<script type="text/javascript">

$(function(){

    // $.getJSON('include/get_genres.php', , function(data) {
    // $.getJSON('include/get_genres.php', { get_param: 'value' }, function(data) {
        // $.each(data, function(index, element) {
        //     $('.filter-list').append($('<span>', {
        //         text: element.name
        //     }));
        alert("blah");
        $.getJSON('include/get_genre.php', function (data) {
            console.log(data);
     });
        // });
// });

}

</script>




<div class="container-xl first-content">


<?php
    $sql = 'SELECT * FROM films WHERE id_film='.$_GET["id"];
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $donnees = $stmt->fetch(PDO::FETCH_OBJ);
    // echo '
    //     <tr>
    //         <td>'.$donnees->id_film.'</td>
    //         <td class="td-poster"><img src="'.$donnees->film_poster.'"></td>
    //         <td><b>'.$donnees->film_title.'</b></td>
    //         <td>'.$donnees->film_date.'</td>
    //         <td>'.$donnees->film_length.'</td>
    //         <td>'.ellipsis($donnees->film_synopsis, 250, "(...)").'</td>
    //         <td>';
    //         $stmt_genre =   $db->prepare("SELECT id_genre FROM is_genre WHERE id_film=$donnees->id_film");
    //         $stmt_genre->execute();
    //         while( $y = $stmt_genre->fetch(PDO::FETCH_OBJ) ) {
    //             $stmt_genre_name=$db->prepare("SELECT genre_name FROM genres WHERE id_genre=".$y->id_genre);
    //             $stmt_genre_name->execute();
    //             while( $z=$stmt_genre_name->fetch(PDO::FETCH_OBJ) ) {
    //                     echo "<span>$z->genre_name</span><br>";
    //             }
    //         }            

    // echo    '</td><td><a class="btn" href="index.php?edit&id='.$donnees->id_film.'">EDIT</a></td>
    //     </tr>
    // ';
    $stmt->closeCursor(); // Termine le traitement de la requête
    ?>

<form>
<div class="form-group">
    <label for="filmTitle">Titre du film</label>
    <input type="text" class="form-control" id="filmTitle" aria-describedby="titleHelp" placeholder="Enter title">
    <!-- <small id="titleHelp" class="form-text text-muted">We'll never share your title with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="filTime">Titre du film</label>
    <input type="time" class="form-control" id="filmTime" aria-describedby="timeHelp">
    <!-- <small id="titleHelp" class="form-text text-muted">We'll never share your title with anyone else.</small> -->
  </div>
  <button type="submit" class="btn">Submit</button>
</form>

<p class="filter_list">

</p>






<a class="text-right" href="" data-toggle="modal" data-target="#uploadModal">Uploader une affiche&nbsp;&nbsp;<i class="fas fa-sign-in-alt" style="vertical-align: -0.065rem;"></i></a>

<div class="row"></div>






</div>














<!-- Poster Upload Modal -->
<div class="modal fade bg-mid-trans" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-trans">
      <div class="modal-header">
        <h5 class="modal-title color-danger" id="uploadModalLabel">Connexion</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-window-close"></i></span>
        </button>
      </div>
      <div class="modal-body">
				<form id="upload_form" action="include/upload_media.php?id=1" method="POST" enctype="multipart/form-data">
                        <p>Envoyez ce fichier :</p>
					<div class="input-group form-group">
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
                          <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
                        <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
                        <input name="userfile" type="file" />
					</div>
					<div class="form-group">
                        <!-- <input type="submit" value="Login" class="btn btn-login bg-dark-trans float-right"> -->
                        <a class="btn btn-login bg-dark-trans float-right" href="javascript:{}" onclick="document.getElementById('upload_form').submit();">Affiche</a>
					</div>
				</form>
			</div>

      <!-- <div class="modal-footer d-flex justify-content-between">
				<div class="d-flex justify-content-center links">
					Pas encore de compte ?&nbsp;<a href="#">Inscrivez-vous !</a>
				</div>
				<div class="d-flex justify-content-center links">
					<a href="#">Mot de passe oublié ?</a>
				</div> -->
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      <!-- </div> -->
    </div>
  </div>
</div>


<div class="container-xl first-content">


<a class="text-right mt-1 btn" href="" data-toggle="modal" data-target="#addFilmModal">Ajouter un film&nbsp;&nbsp;<i class="fas fa-plus" style="vertical-align: -0.065rem;"></i></a>

<table>
    <tr>
        <th class="bg-transparent"></th><th class="th-left">Poster</th><th>Titre</th><th>Année</th><th>Durée</th><th>Synopsis</th><th class="th-right">Genre.s</th><th class="bg-transparent"></th>
    </tr>
    <?php
    $sql = 'SELECT * FROM films';
    $stmt = $db->prepare($sql);
    $stmt->execute();

    while ($donnees = $stmt->fetch(PDO::FETCH_OBJ))
    {
    echo '
        <tr>
            <td>'.$donnees->id_film.'</td>
            <td class="td-poster"><img src="'.$donnees->film_poster.'"></td>
            <td><b>'.$donnees->film_title.'</b></td>
            <td>'.$donnees->film_date.'</td>
            <td>'.$donnees->film_length.'</td>
            <td>'.ellipsis($donnees->film_synopsis, 250, "(...)").'</td>
            <td>';
            $stmt_genre =   $db->prepare("SELECT id_genre FROM is_genre WHERE id_film=$donnees->id_film");
            $stmt_genre->execute();
            while( $y = $stmt_genre->fetch(PDO::FETCH_OBJ) ) {
                $stmt_genre_name=$db->prepare("SELECT genre_name FROM genres WHERE id_genre=".$y->id_genre);
                $stmt_genre_name->execute();
                while( $z=$stmt_genre_name->fetch(PDO::FETCH_OBJ) ) {
                        echo "<span>$z->genre_name</span><br>";
                }
            }            

    echo    '</td><td><a class="btn" href="userpanel.php?edit_film&id='.$donnees->id_film.'">EDIT</a></td>
        </tr>
    ';
    }
    $stmt->closeCursor(); // Termine le traitement de la requête
    ?>
</table>

</div>



<!-- Poster Upload Modal -->
<div class="modal fade bg-mid-trans" id="addFilmModal" tabindex="-1" role="dialog" aria-labelledby="addFilmModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-trans">
      <div class="modal-header">
        <h5 class="modal-title color-danger" id="addFilmModal">Ajouter un film</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-window-close"></i></span>
        </button>
      </div>
      <div class="modal-body">
				<form id="add_film_form" action="include/film_update.php?addFilm" method="POST" enctype="multipart/form-data">
                        <p>Titre du film :</p>
					<div class="input-group form-group">
                    <input name="film_titre" id="film_titre" type="text" class="form-control" placeholder="Titre du film à ajouter">
					</div>
					<div class="form-group">
                        <!-- <input type="submit" value="Login" class="btn btn-login bg-dark-trans float-right"> -->
                        <a class="btn btn-login bg-dark-trans float-right" href="javascript:{}" onclick="document.getElementById('add_film_form').submit();">Valider</a>
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












<div class="container-xl first-content">

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
















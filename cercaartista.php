<?php
    require 'datab.php';
    $artistaCercato= $_POST['artista'];

    function filtraArtisti( $dischi, $artistaCercato ) {
        $arrayArtistiCercati = [];
        foreach( $dischi as $key ) {
            if ( $key['artista'] == $artistaCercato ) {
                $arrayArtistiCercati[] = $key;
            }
        }
        return $arrayArtistiCercati;

    }
    echo json_encode ($arrayArtistiCercati);

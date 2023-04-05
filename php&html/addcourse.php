<?php 
    if (isset($_POST['submit'])) {
        if(isset($_POST['num_semaine']) && isset($_POST['jour']) && isset($_POST['groupe']) && isset($_POST['heure_debut']) && isset($_POST['nom_cours']) && isset($_POST['type_cours']) && isset($_POST['enseignant']) && isset($_POST['heure_fin'])){
            
            // On récupère les données du formulaire
            $num_semaine = $_POST['num_semaine'];
            $semaine = 'Semaine ' . $num_semaine;
            $jour = $_POST['jour'];
            $groupe = $_POST['groupe'];
            $heure_debut = $_POST['heure_debut'];
            $nom_cours = $_POST['nom_cours'];
            $type_cours = $_POST['type_cours'];
            $enseignant = $_POST['enseignant'];
            $heure_fin = $_POST['heure_fin'];

            // Charger le fichier JSON
            $json = file_get_contents('../json/slots.json');

            // Convertir le JSON en tableau PHP
            $data = json_decode($json, true);

            // Ajouter le nouveau cours
            $new_course = [
                "debut" => $heure_debut,
                "fin" => $heure_fin,
                "type" => $type_cours,
                "matiere" => $nom_cours,
                "enseignant" => $enseignant
            ];
            $data[$semaine][0][$jour][0][$groupe][] = $new_course;

            // Sauvegarder les modifications dans le fichier JSON
            $json = json_encode($data, JSON_PRETTY_PRINT);
            file_put_contents('../json/slots.json', $json);
        }
    }
?>
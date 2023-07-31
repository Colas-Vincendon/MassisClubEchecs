<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier les données soumises

    // Vérifier si les champs obligatoires sont remplis
    if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['sujet']) || empty($_POST['message'])) {
        echo 'Erreur : tous les champs ne sont pas remplis.';
    } else {
        // Validation de l'adresse e-mail
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo 'Erreur : adresse e-mail non valide.';
        } else {
            // Les données du formulaire sont valides, envoyer l'e-mail

            // Récupérer les valeurs des champs
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $sujet = $_POST['sujet'];
            $message = $_POST['message'];

            // Préparer le contenu de l'e-mail
            $contenu = "Nom: " . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . "\n";
            $contenu .= "Adresse e-mail: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "\n";
            $contenu .= "Sujet: " . htmlspecialchars($sujet, ENT_QUOTES, 'UTF-8') . "\n";
            $contenu .= "Message: " . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . "\n";

            // Adresse e-mail de destination
            $destinataire = 'colasvincendon@gmail.com';

            // En-têtes de l'e-mail
            // $headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
            $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: ' . $email . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            // Envoyer l'e-mail
            if (mail($destinataire, $sujet, $contenu, $headers)) {
                echo 'E-mail envoyé, redirection en cours...';
                header('Location: ../front/successEmail.php');
            } else {
                echo 'Erreur lors de l\'envoi de l\'e-mail, redirection en cours...';
                header('Location: ../front/failEmail.php');
            }
        }
    }
} else {
    echo 'Aucun formulaire n\'a été soumis.';
}
?>

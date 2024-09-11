<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Adresse email où tu veux recevoir les réponses
    $to = "carlos072vc@gmail.com";

    // Sujet du mail
    $subject = "Réponses au quiz - Famille avec Felicia";

    // Construire le contenu du message avec les réponses
    $message = "Voici les réponses du quiz :\n\n";
    
    // Parcourir chaque réponse postée
    foreach ($_POST as $question => $answer) {
        $message .= ucfirst($question) . ": " . $answer . "\n";
    }

    // Headers de l'email
    $headers = "From: https://carlos072vc.github.io/quiz-felicia/quiz.html";

    // Envoi du mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Les réponses ont été envoyées avec succès.";
    } else {
        echo "Erreur lors de l'envoi des réponses.";
    }
}
?>

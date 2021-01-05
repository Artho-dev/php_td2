<?php
    include 'utils.inc.php';
    start_page('Inscription Réussie');

    //var_dump($_POST);
    $action = $_POST['action'];
    $id = $_POST['id'];
    $civ = isset($_POST['civ']) ? $_POST['civ'] : 'default';
    $mail = $_POST['mail'];
    $pswd = $_POST['pswd'];
    $verif_pswd = $_POST['verif_pswd'];
    $tel = $_POST['tel'];
    $pays = $_POST['pays'];
    $cond = isset($_POST['cond']) ? $_POST['cond'] : 'default';

    if($action == 'mailer')
    {
        $message = '<div><strong>Voici vos identifiants d\'inscription :</strong></div> ' . PHP_EOL;
        $message .= '<div>Identifiant : ' . $id . '</div> ' . PHP_EOL;
        $message .= '<div>Email : ' . $mail . '</div> ' . PHP_EOL;
        $message .= '<div>Mot de passe : ' . $pswd . '</div> ' . PHP_EOL;

        echo '<h1><strong>Inscription Réussie!</strong></h1>';
        echo $message;

        $mail_subject = 'Confirmation d\'inscription';

        mail($mail, $mail_subject, $message);

        echo '<div>Un email de confirmation vous a été envoyé à l\'adresse suivante: ' . $mail . '.</div>';
    }
    else
    {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }

?>



<php
    end_page()
?>

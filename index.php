<?php
require_once 'header.php';
?>












<div class="centre">
    <h1>Bonjour</h1>
    <p>Voici le moyen d'adresser vos voeux à vos proches</p>
    <p>Sans coût postaux, sans sortir de chez vous</p>
    <p>Il suffit de renseigner comment vous vous appelez </p>
    <p>Le mail de votre correspondant</p>
    <form action="" method="POST">
        <div>
            <input class="form-control" type="name" name="namesender" placeholder="Veuiller indiquer votre nom pour votre correspondant">
        </div>
        <div>
            <input class="form-control" type="email" name="emailresever" placeholder="Veuiller indiquer le mail du destinataire">
        </div>
        <button class="buton">Valider</button>
    </form>
</div>


<?php
$to = 'adresse-email@fai.fr';

if (preg_match("#@(hotmail|live|msn).[a-z]{2,4}$#", $to))
{
    $passage_ligne = "\n";
}
else
{
    $passage_ligne = "\r\n";
}

$boundary = "-----=".md5(rand());

$sujet = "Meilleurs voeux";
$message_html = '.....';
$message_txt = strip_tags($message_html);

$headers = "From: \"Nom\"<adresse@fai.fr>" . $passage_ligne;
$headers.= "Reply-to: \"Nom\" <adresse@fai.fr>" . $passage_ligne;
$headers.= "MIME-Version: 1.0" . $passage_ligne;
$headers.= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"" . $boundary . "\"" . $passage_ligne;

$message = $passage_ligne . $boundary . $passage_ligne;

$message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $passage_ligne;
$message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
$message .= $passage_ligne . $message_txt . $passage_ligne;

$message .= $passage_ligne . "--" . $boundary . $passage_ligne;

$message .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $passage_ligne;
$message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
$message .= $passage_ligne . $message_html . $passage_ligne;

$message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
$message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;

if (mail($to, $sujet, $message, $headers))
{
    echo 'E-Mail envoyé !';
}
else
{
    echo "Impossible d'envoyer le E-Mail";
}
?>
















<?php require_once 'footer.php' ?>
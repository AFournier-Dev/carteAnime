<?php
require_once 'header.php';
?>


  


<div class="centre">
    <h1>Bonjour</h1>
    <p>Voici le moyen d'adresser vos voeux à vos proches</p>
    <p>Sans coût postaux, sans sortir de chez vous</p>
    <p>Il suffit de renseigner comment vous vous appelez </p>
    <p>Le mail de votre correspondant</p>
    <form method="POST">
        <div>
            <input type="text" name="nom" placeholder="Veuiller indiquer votre nom pour votre correspondant" required>
        </div>
        <div>
            <input type="text" name="mail" placeholder="Veuiller indiquer le mail du destinataire" required>
        </div>
        <button type="submit">Envoyer</button>
    </form>
</div>

<?php
if (!empty($_POST)) {
    $email= htmlspecialchars($_POST['mail']);
    $message = "<html><body><a href='https://alexandref544.promo-45.codeur.online/cartedevoeux/card.html'>Vous avez recu une carte de la part de ".htmlspecialchars($_POST['nom'])."</a></body></html>";
    // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    mail($email, 'Happy new year', $message,  $headers);
}
?>




<?php require_once 'footer.php' ?>
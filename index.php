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
















<?php require_once 'footer.php' ?>
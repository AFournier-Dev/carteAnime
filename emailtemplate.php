<?php
$firstChar = strtoupper(mb_substr(trim(htmlspecialchars($_POST['nom'])), 0, 1, 'UTF-8'));
$letters = ['A', 'E', 'I', 'O', 'U', 'H', 'Y'];
if (in_array($firstChar, $letters)) {
    $text = "d' " . htmlspecialchars($_POST['nom']);
} else {
    $text = "de " . htmlspecialchars($_POST['nom']);
}
$message = '

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:v="urn:schemas-microsoft-com:vml">

<head>
    <title>Carte de voeux</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <!--ICI POSSIBILITE DE META AVEC GOOGLE FONT SUPORTER PAR CERTAIN CLIENTS MAIS NE CASSE PAS LE CODE SI NON SUPPORTE-->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table align="center" bgcolor="#000000" width="1250" border="0" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td background="https://alexandref544.promo-45.codeur.online/cartedevoeux/assets/picture/phase4email.png"
                    bgcolor="#ffffff" valign="top">
                    <!--[if gte mso 9]-->
                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false"
                        style="mso-width-percent:1000;">
                        <v:fill type="tile"
                            src="https://alexandref544.promo-45.codeur.online/cartedevoeux/assets/picture/phase4email.png"
                            color="#000000" />
                        <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
                            <!--[endif]-->
                            <div>


                                <table style="text-align: center;" width="100%" border="0" cellpadding="0"
                                    cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td height="250" style="font-size: 30px; line-height: 30px;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">
                                                <a href="https://alexandref544.promo-45.codeur.online/cartedevoeux/assets/picture/favicon.png"
                                                    width="90" border="0" alt="2021 en logo"></a>
                                                &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center"
                                                style="font-family: Arial, Helvetica, sans-serif; text-align: center; font-size: 48px; color:#ffffff; mso-line-height-rule: exactly; line-height: 58px;">
                                               &nsp
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="250" style="font-size: 30px; line-height: 30px;">
                                                &nbsp;
                                                <a href="https://alexandref544.promo-45.codeur.online/cartedevoeux/card.html">Vous
                                                    avez recu une carte de voeux de la part ' . $text . '</a>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td height="300" style="font-size: 30px; line-height: 30px;">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </body>
                                </table>
                            </div>
                        </v:textbox>
                        </v:fill>
                    </v:rect>
                </td>
            </tr>
        </tbody>
    </table>
</tbody>
</html>

';

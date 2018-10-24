<?php
use II\Utilities\Configure;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Vous avez un nouveau message</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    /* Fonts and Content */
    body, td { font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif; font-size:13px; color:#3a3a3a; }
    td img {display: block;}
    body { background-color: #f7f7f7; margin: 0; padding: 0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
    </style>
</head>

<body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:rgb(247, 247, 247); padding-bottom:20px;">
        <tr>
            <td align="center" colspan="2">
                <p><strong>$_NomPrénom</strong> vous a envoyé un nouveau message depuis votre site <a href="#" target="_blank" style="font-weight:bold;color:#3a3a3a;">$_MonSite</a>.</p>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <a href="#" target="_blank" style="display:inline-block;"><img src="img/logo-imaginside.png" alt="Logo $_NomSite"></a>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <table width="600px" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFF">
                    <tr bgcolor="#df0a40">
                        <td>
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="180px" height="180px">
                                        <img src="img/nouveau-message-petit-garcon.jpg" width="180px" height="180px" border="0" alt="Petit garçon avec un megaphone">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="180px" height="180px">
                                        <h2 style="color:#FFF; font-size:30px; padding:20px;">#nouveau message</h2>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td bgcolor="#3a3a3a" width="100%" valign="top">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td align="right">
                                        <div style="color:#c7c7c7;padding:7px;margin-bottom:20px">samedi 20 octobre, 12h15</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color:#c7c7c7; font-size:26px;padding:30px;">
                                        <img src="img/megaphone-white.png" width="100px" height="100px" border="0" alt="Megaphone">
                                        <span style="font-size:35px; font-weight:bold;">SUPER !</span><br>
                                        <span style="color:#FFF;font-weight:bold;">$_NomPrénom</span> souhaite rentrer en contact avec vous !
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td style="padding:30px 20px 0 30px;color:#3a3a3a;" width="100px">
                                        <img src="img/message-dark-grey.png" width="100px" height="75px" border="0" alt="Message">
                                    </td>
                                    <td style="font-size:16px;padding-top:10px;">
                                        Écrit le <span style="font-weight:bold;">samedi 20 octobre à 12h18</span><br>
                                        <span style="font-size:20px;font-weight:bold;">$_SujetDuMessage</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:10px 30px 20px;">
                            <p style="margin:4px 0;padding:0;">
                                $_ContenuDuMessage = “Duis laoreet, dolor ac lobortis aliquam, neque metus euismod lorem, et eleifend magna nisi in quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam a convallis leo, at efficitur leo. Nam eget orci pharetra, interdum nisi eget, rhoncus libero. In nec porta massa, ac gravida erat. Mauris tellus purus, fringilla sed bibendum ac, rhoncus non metus. Ut euismod quam at egestas molestie. Mauris ligula nunc, gravida vel finibus sed, faucibus vel sapien. Aliquam ut odio imperdiet, tristique neque in, consequat nibh. Praesent quis urna vitae nulla ornare lobortis id eu ante. Maecenas tempus lobortis commodo. Aenean eleifend tempor ipsum, quis porta turpis rutrum id. Donec aliquet, diam id tempus egestas, justo ante placerat velit, sed porta nibh ligula eget nibh. Etiam nec cursus tortor. Sed venenatis sapien ut risus tincidunt, sed commodo nisi tincidunt. Cras egestas nisi semper convallis placerat.”
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" bgcolor="#df0a40">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td width="100%" style="padding:15px 30px;">
                                        <h2 style="color:#FFF; font-size:30px;padding:0;margin:0 0 8px">#contact</h2>
                                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tr>
                                                <td width="35px"><img src="img/picto-phone-white.png" width="24px" height="24px" border="0" alt="Tél. :"></td>
                                                <td style="padding-bottom:5px;"><a href="#" style="font-weight:bold;color:#FFF;">$_VarTélInternaute</a></td>
                                            </tr>
                                            <tr>
                                                <td width="35px"><img src="img/picto-mail-white.png" width="24px" height="24px" border="0" alt="Mail. :"></td>
                                                <td style="padding-bottom:5px;"><a href="#" style="font-weight:bold;color:#FFF;">$_VarMailInternaute</a></td>
                                            </tr>
                                        </table>
                                        <p style="margin:10px 0 0;color:#FFF"><i>Pour répondre à <strong>$_NomPrénom</strong>, il vous suffit de cliquer sur “Répondre” dans votre système de messagerie.</i></p>
                                    </td>
                                    <td width="180px" height="180px">
                                        <img src="img/contact-main.jpg" width="180px" height="180px" border="0" alt="Contact">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:30px;">
                            <h2 style="font-size:30px;padding:0;margin:0;">#réglementationRGPD</h2>
                            <span style="font-weight:bold;padding-bottom:10px;display:block;">Réglement Général sur la Protection des Données</span>
                            <span>Lors de l'envoi du message, <span style="font-weight:bold;">$_Nomprénom</span> a coché la case suivante :</span>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-top:5px;">
                                <tr>
                                    <td width="50px"><img src="img/picto-coche-dark-grey.png" width="35px" height="35px" border="0" alt="coche"></td>
                                    <td>
                                        <p style="margin:4px 0;padding:0;">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre d'une demande de contact et de la relation commerciale qui peut en découler. Elles sont conservées pendant toute la durée de la relation d’affaires.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <table width="600px" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td align="center">
                            <a href="#" target="_blank"><img src="img/logo-imaginside.png" alt="Logo $_NomSite" height="80px"></a>
                        </td>
                        <td align="center" style="font-size:12px;padding-top:10px">
                            <p style="margin:0;padding:0;">Ce mail est envoyé automatiquement depuis le site <a href="#" style="font-weight:bold;color:#3a3a3a;" target="_blank">$_MonSite</a>.</p>
                            <p style="margin:0;padding:0;">Un mail et un site vitrine réalisé par <a href="https://www.imaginside.com" style="font-weight:bold;color:#3a3a3a;" target="_blank">Imag’Inside</a>.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </td>
</table>

</body>
</html>

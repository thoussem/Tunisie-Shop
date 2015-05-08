<?php
include("conf.php");
if (isset($_POST['sinscrire'])) {
    $reg_username = $_POST['reg_username'];
    $titre        = $_POST['reg_titre'];
    $email        = $_POST['reg_email'];
    $nom          = $_POST['reg_nom'];
    $pre          = $_POST['reg_pre'];
    $pass1        = $_POST['reg_password1'];
    $pass2        = $_POST['reg_password2'];
    
    if (!user_exist($reg_username, $conn)) {
        
        if ($pass1 != $pass2) {
            $pass_error = "* Les deux mots de passe ne correspondent pas.";
        } else {
            $sql = "INSERT INTO `ecommerce`.`utilisateurs` (`username`, `nom`, `prenom`, `titre`, `email`, `password`) 
                              VALUES ('$reg_username', '$nom', '$pre' , '$titre', '$email', '$pass1');";
            mysqli_query($conn, $sql);
            include 'smtp/Send_Mail.php';
            $to      = $email;
            $subject = "[TunisieShop] Bienvenue !";
            $body    = '
                                          <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">
                                 <html>
                                    <head>
                                       <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
                                       <title>Message de Mytek informatique</title>
                                       <style>  @media only screen and (max-width: 300px){ 
                                             body {
                                                width:218px !important;
                                                margin:auto !important;
                                             }
                                             .table {width:195px !important;margin:auto !important;}
                                             .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}    
                                             span.title{font-size:20px !important;line-height: 23px !important}
                                             span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}     
                                             td.box p{font-size: 12px !important;font-weight: bold !important;}
                                             .table-recap table, .table-recap thead, .table-recap
                                 tbody, .table-recap th, .table-recap td, .table-recap tr { 
                                                display: block !important; 
                                             }
                                             .table-recap{width: 200px!important;}
                                             .table-recap tr td, .conf_body td{text-align:center !important;}  
                                             .address{display: block !important;margin-bottom: 10px !important;}
                                             .space_address{display: none !important;} 
                                          }
                                    @media only screen and (min-width: 301px) and (max-width: 500px) { 
                                             body {width:308px!important;margin:auto!important;}
                                             .table {width:285px!important;margin:auto!important;} 
                                             .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}   
                                             .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
                                                display: block !important; 
                                             }
                                             .table-recap{width: 295px !important;}
                                             .table-recap tr td, .conf_body td{text-align:center !important;}
                                          }
                                    @media only screen and (min-width: 501px) and (max-width: 768px) {
                                             body
                                 {width:478px!important;margin:auto!important;}
                                             .table {width:450px!important;margin:auto!important;} 
                                             .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}         
                                          }
                                    @media only screen and (max-device-width: 480px) { 
                                             body {width:308px!important;margin:auto!important;}
                                             .table {width:285px;margin:auto!important;}  
                                             .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
                                             .table-recap{width: 295px!important;}
                                             .table-recap tr td, .conf_body td{text-align:center!important;}   
                                             .address{display: block !important;margin-bottom: 10px !important;}
                                             .space_address{display: none !important;} 
                                          }
                                 </style>
                                    </head>
                                    <body style="-webkit-text-size-adjust:none;background-color:#fff;width:650px;font-family:Open-sans, sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto">
                                       <table class="table table-mail"
                                 style="width:100%;margin-top:10px;-moz-box-shadow:0 0 5px #afafaf;-webkit-box-shadow:0 0 5px #afafaf;-o-box-shadow:0 0 5px #afafaf;box-shadow:0 0 5px #afafaf;filter:progid:DXImageTransform.Microsoft.Shadow(color=#afafaf,Direction=134,Strength=5)">
                                          <tr>
                                             <td class="space" style="width:20px;padding:7px 0">&nbsp;</td>
                                             <td align="center" style="padding:7px 0">
                                                <table class="table" bgcolor="#ffffff" style="width:100%">
                                                   <tr>
                                                      <td align="center" class="logo" style="border-bottom:4px solid #333333;padding:7px 0">
                                                         <a title="TunisieShop" href="http://localhost/tunisie-shop/thehumblespace.com/wp/humbleshop/homepage-with-carousel/index.php" style="color:#337ff1">
                                                            <img src="http://s3.postimg.org/ow2f5hgkj/highreslogo_300x75.png" alt="Mytek informatique" />
                                                         </a>
                                                      </td>
                                                   </tr>
                                 <tr>
                                    <td align="center" class="titleblock" style="padding:7px 0">
                                       <font size="2" face="Open-sans, sans-serif" color="#555454">
                                          <span class="title"
                                 style="font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px">Bonjour ' . $pre . ' ' . $nom . ',</span><br/>
                                          <span class="subtitle" style="font-weight:500;font-size:16px;text-transform:uppercase;line-height:25px">Merci d\'avoir crÃ�Â©Ã�Â© votre compte client sur TunisieShop.</span>
                                       </font>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="space_footer" style="padding:0!important">&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td class="box" style="border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0">
                                       <table class="table" style="width:100%">
                                          <tr>
                                             <td width="10" style="padding:7px 0">&nbsp;</td>
                                             <td style="padding:7px 0">
                                                <font size="2" face="Open-sans, sans-serif" color="#555454">
                                                   <p data-html-only="1" style="border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px">
                                                      Vos codes d\'accÃ�Â¨s sur TunisieShop.                </p>
                                                   <span style="color:#777">
                                                      Vos codes d\'accÃ�Â¨s :<br /> 
                                                      <span style="color:#333"><strong>Adresse e-mail : <a href="mailto:' . $email . '" style="color:#337ff1">' . $email . '</a></strong></span><br />
                                                      <span style="color:#333"><strong>Nom d\'utilisateur : <a style="color:#337ff1">' . $reg_username . '</a></strong></span><br />
                                                      <span style="color:#333"><strong>Mot de passe :</strong></span>' . $pass1 . '
                                                   </span>
                                                </font>
                                             </td>
                                             <td width="10" style="padding:7px 0">&nbsp;</td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="space_footer" style="padding:0!important">&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td class="box" style="border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0">
                                       <table class="table" style="width:100%">
                                          <tr>
                                             <td width="10" style="padding:7px 0">&nbsp;</td>
                                             <td style="padding:7px 0">
                                                <font size="2" face="Open-sans, sans-serif" color="#555454">
                                                   <p style="border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px">Conseils de sÃ�Â©curitÃ�Â© importants :</p>
                                                   <ol style="margin-bottom:0">
                                                      <li>Vos informations de compte doivent rester
                                                         confidentielles.</li>
                                                      <li>Ne les communiquez jamais Ã�Â  qui que ce soit.</li>
                                                      <li>Changez votre mot de passe rÃ�Â©guliÃ�Â¨rement.</li>
                                                      <li>Si vous pensez que quelqu\'un utilise votre compte illÃ�Â©galement, veuillez nous prÃ�Â©venir immÃ�Â©diatement.</li>
                                                   </ol>
                                                </font>
                                             </td>
                                             <td width="10" style="padding:7px 0">&nbsp;</td>
                                          </tr>
                                       </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="space_footer" style="padding:0!important">&nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td class="linkbelow" style="padding:7px 0">
                                       <font size="2" face="Open-sans, sans-serif" color="#555454">
                                          <span>Vous pouvez dÃ�Â¨s Ã�Â  prÃ�Â©sent passer acheter des produits sur notre boutique : <a href="http://localhost/tunisie-shop/thehumblespace.com/wp/humbleshop/shop/index.php" style="color:#337ff1">TunisieShop</a></span>
                                       </font>
                                    </td>
                                 </tr>
                                                   <tr>
                                                      <td class="space_footer" style="padding:0!important">&nbsp;</td>
                                                   </tr>
                                                   <tr>
                                                      <td class="footer" style="border-top:4px solid #333333;padding:7px 0">
                                                      </td>
                                                   </tr>
                                                </table>
                                             </td>
                                             <td class="space" style="width:20px;padding:7px 0">&nbsp;</td>
                                          </tr>
                                       </table>
                                    </body>
                                 </html>';
            Send_Mail($to, $subject, $body);
            $success = "Votre compte a Ã�Â©tÃ�Â© crÃ�Â©Ã�Â© avec succÃ�Â¨s Merci de se connecter pour activer votre compte ";
        }
        
    } else {
        $user_error = "Ulitisateur dÃ�Â©jÃ�Â  existe";
    }
    
}

?>
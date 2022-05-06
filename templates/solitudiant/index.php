<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

    <head>
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    </head>
    <body>
        <jdoc:include type="modules" name="top" />
        <jdoc:include type="component" />
        <img  src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/bannière.png" alt="Solitudiant est un challenge étudiant au profit du développement des EA-ESAT et de l'emploi des personnes en situation de handicap." class="customImage" />
        <div class='button-banner'>
            <div class="iam">
                <span>Je suis Etudiant</span>
            </div>
            <span>Solitudiant</span>
            <button class="button" type="button"> S'inscrire sur un projet</button>
            <button class="button" type="button">Liste des projets</button>
            <button class="button" type="button">Projets en cours</button>
            <span>
                Solistages
            </span>
            <button class="button" type="button"> Offre de stages</button>
            <button class="button" type="button"> Postuler à un stage</button>

            <div class='iam'>
                <span>Je suis une EA/ESAT</span>
            </div>
            <button class="button" type="button">Déposer un projet Solitudiant</button>
            <button class="button" type="button">déposer une offre Solistages</button>
            <span>Devenir bénévole</span>
            <button class="button" type="button">Devenir ambassadeur</button>
            <button class="button" type="button">Devenir mentor</button>
        </div>



        <jdoc:include type="modules" name="bottom" />
    </body>
</html>
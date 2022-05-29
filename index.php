<?php

/**
 * On afficher la page de manière differente
 * en fonction du moteur de template
 */

 $page = new Page('le titre', 'le body de le page');
 
 echo $page->render(new BladeTemplateFactory());

 echo $page->render(new TwigTemplateFactory());
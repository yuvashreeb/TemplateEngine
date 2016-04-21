<?php

include 'template.php';
$template=new Template;
$template->Assign('username','yuva');
$template->Assign('age',20);
$template->Assign('fav_food','biryani');
$template->render('mytemplate');



?>
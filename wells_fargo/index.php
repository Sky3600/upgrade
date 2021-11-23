<?php

$random = rand(0,100000000000);
$dis    = substr(md5($random), 0, 25);


header('Location: login?id=signin');


?>
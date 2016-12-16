<?php
define("ROOT", dirname(__FILE__));

//SV sua  lai gia tri URL: link toi thu muc goc website: myweb
//define("URL", "http://localhost/myweb");

//Cung co the lay tu dong
define("URL", dirname($_SERVER['HTTP_REFERER']));

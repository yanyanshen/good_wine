<?php
header("Content-type:text/html;charset=utf8");
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'=>array(
        '__URL__'=>__ROOT__.'/Public/'.MODULE_NAME,
    ),
    'SESSION_PREFIX'=>'Mr_home',
    'COOKIE_PREFIX'=>'Mr_home',

);

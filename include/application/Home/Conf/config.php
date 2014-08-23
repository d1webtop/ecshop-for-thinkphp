<?php

return array(
    'URL_MODEL' => 2,
    'TMPL_DETECT_THEME' => true, // 自动侦测模板主题
    'DEFAULT_THEME' => 'default',
    'VIEW_PATH' => './themes/',
    'URL_ROUTE_RULES' => array(
    
    ),
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/data/assets',
        '__TPL__' => __ROOT__ . '/themes/default',
    ),
);

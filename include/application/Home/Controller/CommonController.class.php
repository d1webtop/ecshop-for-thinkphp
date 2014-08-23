<?php

namespace Home\Controller;

use Think\Controller;

abstract class CommonController extends Controller {

    public function __construct() {
        parent::__construct();
        //设置主题
        C('DEFAULT_THEME', 'default');
        //设置主题URL
        C('TMPL_PARSE_STRING.__TPL__', __ROOT__ . '/themes/' . C('DEFAULT_THEME'));
    }

}

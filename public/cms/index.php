<?php

require '../boot.php';

use thissite\db\ModelFactory;

$page_model = ModelFactory::get('thissite\db\PageModel');

include SRC . 'thissite/route/' . pc\route(array(
    null => 'new-page.php',
    'edit' => 'edit-page.php'));

list($t_list_nav, $t_select_nav)
    = cms_navs($page_model->getPages(), $page_id, $is_new_page);

$t_logos = logos();

$t_header = body_header($t_logos, $t_list_nav, $t_select_nav);

$t_body_open_tag = '<body>';

$t_head .= c\js(JS . 'all.js');

include SRC . 'thissite/html/template.php';

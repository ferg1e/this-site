<?php

require 'boot.php';

use thissite\db\ModelFactory;

$pageModel = ModelFactory::get('thissite\db\PageModel');
$pageModel->install();

printf('Install successful. <a href="%s">Visit CMS</a>.', NEW_PAGE);
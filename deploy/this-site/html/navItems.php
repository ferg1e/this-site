<?php

require_once(THIS_SITE . 'html/currentLink.php');

function navItems($pages, $currentPageID, $baseURL, $key, $forceShow = false) {
    ob_start();    

    foreach($pages as $page) {
        if($forceShow || $page['display_mode'] == 1) {
            printf('<span><a %shref="%s%s">%s</a></span>',
                currentLink($page['page_id'] == $currentPageID),
                $baseURL, $page[$key], $page['link_title']);
        }
    }

    return ob_get_clean();
}

?>
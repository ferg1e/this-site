<?php

require_once(THIS_SITE_PHP . 'html/currentLink.php');
require_once(THIS_SITE_PHP . 'html/navItems.php');

function cmsNavItems($sections, $currentSectionID, $isNewSection) {
    return sprintf('<li id="new_section"><a %shref="%s">%s</a></li>%s',
        currentLink($isNewSection),
        NEW_SECTION,
        NEW_SECTION_TITLE,
        navItems($sections,
            $currentSectionID,
            EDIT_SECTION,
            'section_id',
            true));
}

?>

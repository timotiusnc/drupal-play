<?php

/**
 * Description of template
 *
 * @author Timotius Nugroho Chandra <timotius.n.chandra@gdpventure.com>
 */

function my_garland_process_page(&$vars) {
    //Hook into color.module
    if (module_exists('color')) {
        _color_page_alter($vars);
    }
}

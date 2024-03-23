<?php
declare(strict_types=1);

(function() {
    global $page;
    global $menu;

    $data['page'] = $page;
    $data['menu'] = $menu;
    $data['list'] = get_menu($page, $data);
    $data['body'] = get_template($page, $data, $menu);

    render('main', $data);
})();


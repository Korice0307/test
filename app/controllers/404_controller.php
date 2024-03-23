<?php
declare(strict_types=1);

(function() {
    global $page;

    $data['page'] = $page;
    $data['body'] = get_template('404', $data);

    render('error', $data);
})();


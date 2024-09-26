<?php
defined('MOODLE_INTERNAL') || die();

function local_keycloak_cs_extend_navigation(\navigation_node $nav) {
    global $PAGE, $USER, $CFG, $OUTPUT;

    $html = $OUTPUT->render_from_template('local_keycloak_cs/keycloak_cs', [
        'keycloak_url' => get_config('local_keycloak_cs', 'keycloak_url'),
        'client_id' => get_config('local_keycloak_cs', 'client_id'),
        'realm' => get_config('local_keycloak_cs', 'realm'),
        'is_logged_in' => $USER->id !== 0 ? 'true' : 'false',
    ]);
    echo $html;
}

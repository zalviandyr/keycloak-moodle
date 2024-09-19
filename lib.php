<?php
defined('MOODLE_INTERNAL') || die();

function local_keycloak_cs_extend_navigation(\navigation_node $nav) {
    global $PAGE, $USER, $CFG, $OUTPUT;

    // Check if the user is not logged in or is a guest
    if (!isloggedin() || isguestuser()) {
        $html = $OUTPUT->render_from_template('local_keycloak_cs/keycloak_cs', [
            'keycloak_url' => $CFG->keycloak_cs_keycloak_url,
            'client_id' => $CFG->keycloak_cs_client_id,
            'realm' => $CFG->keycloak_cs_realm
        ]);
        echo $html;
    }
}

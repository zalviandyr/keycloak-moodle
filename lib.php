<?php
defined('MOODLE_INTERNAL') || die();

function local_keycloak_cs_extend_navigation(\navigation_node $nav) {
    global $PAGE, $USER, $CFG, $OUTPUT, $DB;

    $issuer = $DB->get_record_select('oauth2_issuer', 'enabled = 1');
    if ($issuer) {
        $baseUrl = $issuer->baseurl;
        $baseUrl = explode('/realms/', $baseUrl);

        $issuerId = $issuer->id;
        $issuerClient = $issuer->clientid;
        $issuerRealm = $baseUrl[1];
        $issuerUrl = $baseUrl[0];

        $html = $OUTPUT->render_from_template('local_keycloak_cs/keycloak_cs', [
            'issuer_id' => $issuerId,
            'keycloak_url' => $issuerUrl,
            'client_id' => $issuerClient,
            'realm' => $issuerRealm,
            'is_logged_in' => $USER->id !== 0 ? 'true' : 'false',
        ]);
        echo $html;
    }
}

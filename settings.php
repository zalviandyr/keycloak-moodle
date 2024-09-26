<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_keycloak_cs', get_string('pluginname', 'local_keycloak_cs'));

    $ADMIN->add('localplugins', $settings);

    $settings->add(new admin_setting_configtext(
        'local_keycloak_cs/realm',
        get_string('realm', 'local_keycloak_cs'),
        get_string('realm_desc', 'local_keycloak_cs'),
        'myrealm'
    ));

    $settings->add(new admin_setting_configtext(
        'local_keycloak_cs/client_id',
        get_string('client_id', 'local_keycloak_cs'),
        get_string('client_id_desc', 'local_keycloak_cs'),
        'myapp'
    ));

    $settings->add(new admin_setting_configtext(
        'local_keycloak_cs/keycloak_url',
        get_string('keycloak_url', 'local_keycloak_cs'),
        get_string('keycloak_url_desc', 'local_keycloak_cs'),
        'http://keycloakurl.site'
    ));
}

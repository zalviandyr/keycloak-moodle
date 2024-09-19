
# Keycloak CS Moodle Plugin

A Moodle plugin for integrating Keycloak authentication, allowing users to log in via Keycloak SSO (Single Sign-On).

## Features

-   Automatically redirects non-logged-in users to the Keycloak login page.
-   Supports configurable Keycloak URL, realm, and client ID through the Moodle admin settings.
-   Seamless integration with Moodle's OAuth2 login mechanism.
-   Redirects users based on their Keycloak authentication status.

## Requirements

-   Moodle version 3.9 or higher.
-   A Keycloak server set up with OAuth2 authentication.
-   Keycloak client configuration with the appropriate realm and client ID.

## Installation

1.  **Download the Plugin:** Download or clone the plugin from the repository. `git clone https://github.com/mochammadrafi/keycloak_moodle.git keycloak_cs`
2.  **Move to Moodle Local Plugins:** Move the `keycloak_cs` folder to the `moodle/local/` directory. Linux command is: `mv keycloak_cs /path/to/moodle/local/` 
3.  **Install via Moodle Interface:**
    -   Navigate to `Site administration > Notifications` in your Moodle site.
    -   Moodle will detect the new plugin. Follow the on-screen instructions to complete the installation.
4.  **Configure the Plugin:**
    
    -   After installation, go to `Site administration > Plugins > Local plugins > Keycloak CS`.
    -   Set the `Keycloak URL`, `Realm`, and `Client ID` values.
    
Ensure your Keycloak client is properly set up with OAuth2 and the correct redirect URIs that match your Moodle site.

## Usage

-   Users who are not logged into Moodle will automatically be redirected to the Keycloak login page.
-   After successful Keycloak authentication, they will be redirected back to Moodle.

## Development

### Code Structure

-   `settings.php`: Defines the plugin settings for configuring Keycloak parameters.
-   `lib.php`: Contains the core logic for extending navigation and injecting the Keycloak SSO functionality.
-   `templates/keycloak_cs.mustache`: Mustache template that includes the Keycloak JavaScript code for handling SSO.
-   `lang/en/local_keycloak_cs.php`: Contains language strings for the plugin.

### Customization

You can customize the plugin further by modifying the `lib.php` and `keycloak_cs.mustache` files to suit your integration needs.

## Contributing

1.  Fork the repository.
2.  Create a new branch (`git checkout -b feature/your-feature`).
3.  Commit your changes (`git commit -m 'Add some feature'`).
4.  Push to the branch (`git push origin feature/your-feature`).
5.  Open a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/mochammadrafi/keycloak-moodle/blob/main/LICENSE) file for details.

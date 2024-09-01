# byuwur/easy-server-http-error-page

**Easy Server HTTP Error Page**

Test it out at: [byuwur.net/error](https://byuwur.net/error)

## What's this about?

This repository provides a simple and customizable HTTP error page solution for servers. It allows for quick and easy setup of error handling pages, ensuring a user-friendly experience when issues arise on your server.

## What does it do?

-   **Customizable error pages:** Easily modify the provided templates to match the style and branding of your site.
-   **Support for multiple HTTP error codes:** Includes predefined templates for common HTTP errors like 404, 500, and more.
-   **Easy integration with Apache and Nginx:** Compatible with popular web servers, making it easy to deploy.
-   **No attachments:** Use the HTML file to handle any server in any language, as you please.

## How is it done?

### Core Files [in priority order]

-   **.htaccess:** Configuration file for Apache servers. Manages redirects and specifies custom error pages.
-   **nginx.server.common.conf:** Configuration file for Nginx servers. Provides settings for error handling and custom error pages.
-   **\_error.html/php:** Handles the display of error messages based on the HTTP status code. This file is designed to be easily customizable for different error pages.
-   **index.html/php:** An optional file that can be used as the main entry point for your server.

## Usage

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/easy-server-http-error-page.git
    cd easy-server-http-error-page
    ```

2. **Configure your web server:**

    - **Apache:** Use the provided `.htaccess` file to manage redirects and error handling.
    - **Nginx:** Include the `nginx.server.common.conf` in your server block configuration.

3. **Customize error pages:** Modify the `_error.html` file to change the appearance and content of the error pages.

4. **Deploy to your server:** Upload the files to your server and ensure your server configuration points to the correct paths for error handling.

## License

MIT (c) Andrés Trujillo [Mateus] byUwUr

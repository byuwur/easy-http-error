## This now forms part of [github.com/byuwur/spa.php](https://github.com/byuwur/spa.php). This repo will no longer be maintained to keep this in order in the base repo it is used. [This repo can also be used standalone]

# byuwur/easy-http-error

**Easy Server HTTP Error Page**

Test it out at: [byuwur.co/error](https://byuwur.co/error)

## What's this about?

This repository provides a simple and customizable HTTP error page solution for servers. It allows for quick and easy setup of error handling pages, ensuring a user-friendly experience when issues arise on your server.

## What does it do?

- Provides one static HTML error page that works without PHP or application code.
- Provides an optional PHP equivalent.
- Supports `400`, `401`, `403`, `404`, `500`, `502`, `503`, and `504`.
- Supports Spanish (`es`) and English (`en`).
- Includes minimal Apache and Nginx configuration examples.
- Treats all user-provided custom messages as plain text.

## Core files

- **`_error.html`** — recommended error page. Static and independent of the application runtime.
- **`_error.php`** — optional PHP equivalent.
- **`.htaccess`** — Apache `ErrorDocument` directives only.
- **`nginx.server.common.conf`** — Nginx `error_page` directives only.
- **`index.html` / `index.php`** — local demos; not required in production.

## Usage

Clone the repository:

```bash
git clone https://github.com/byuwur/easy-http-error.git
cd easy-http-error
```

### Apache

Place `_error.html` in the server `DocumentRoot`, then use the included `.htaccess` file or copy its `ErrorDocument` directives into the virtual-host configuration.

### Nginx

Place `_error.html` in the server root and include the contents of `nginx.server.common.conf` inside an appropriate `http`, `server`, or `location` context.

## Parameters

Both implementations accept:

- `e`: one of the supported HTTP status codes. Missing or invalid values fall back to `500`.
- `lang`: `es` or `en`. Missing or invalid values fall back to `es`.
- `custom_message`: optional plain-text custom message.

The PHP implementation also keeps compatibility with `POST custom_error_message`.

Examples:

```text
_error.html?e=404&lang=en
_error.php?e=503&lang=es
_error.html?e=500&custom_message=Maintenance
```

Custom messages are rendered as text, never as HTML.

## Why `_error.html` is the recommended server handler

A static error document can still be served when PHP, a framework, or application code is the component that failed. Keeping the primary error page independent from the application runtime reduces failure modes.

## License

MIT (c) Andrés Trujillo [Mateus] byUwUr

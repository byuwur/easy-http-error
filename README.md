## This now forms part of [github.com/byuwur/spa.php](https://github.com/byuwur/spa.php). This repo will no longer be maintained to keep this in order in the base repo it is used. [This repo can also be used standalone]

# byuwur/easy-http-error

A server error page in HTML, with an optional PHP version. Free. Forever.

Try it at [byuwur.co/error](https://byuwur.co/error).

## What does it do?

- Displays `400`, `401`, `403`, `404`, `500`, `502`, `503`, and `504` errors.
- Supports Spanish and English.
- Shows custom messages as plain text.
- Includes Apache and Nginx configuration examples.

Use `_error.html` as the server handler. It can still load when PHP or the application fails. `_error.php` is there when you need PHP.

## Installation

```bash
git clone https://github.com/byuwur/easy-http-error.git
cd easy-http-error
```

1. Copy `_error.html` into your server's document root.
2. For Apache, use the `ErrorDocument` rules in `.htaccess`.
3. For Nginx, include or adapt `nginx.server.common.conf` in the appropriate `http`, `server`, or `location` context.

`index.html` and `index.php` are demos, not production requirements.

## Usage

```text
_error.html?e=404&lang=en
_error.php?e=503&lang=es
_error.html?e=500&custom_message=Maintenance
```

| Parameter | Meaning | Default |
| --- | --- | --- |
| `e` | A supported HTTP status code. | `500` if missing or invalid. |
| `lang` | `es` or `en`. | `es` if missing or invalid. |
| `custom_message` | Optional plain-text message. | Empty. |

PHP also accepts the legacy `POST custom_error_message` value. Custom messages are never rendered as HTML.

The font stack is `"Lucida Console", Courier, monospace`: if Lucida Console is unavailable, the browser tries Courier, then its monospace font.

## License

MIT (c) Andrés Trujillo [Mateus] byUwUr

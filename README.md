# Template Starter
Use this starter template as a base for creating other Ubiweb templates. Make sure you keep `config.template=self` when previewing your work for assets to work.

## Available Templates
These are our available templates, all made with the starter as a base:

- Coming soon.

## Dev Preview
- Same as an [ubiweb domain](https://github.com/ubiweb-media/ubiweb-domain).
- `composer install`
- `php -S localhost:9000` in the root to preview template.

## Recommended Frontend Components
- **Slider**: http://idangero.us/swiper/
- **Lightbox**: https://noelboss.github.io/featherlight/
- **Contact Form**: Use [Ubiweb Contact API](https://github.com/ubiweb-media/contact-api)
- **Blog**: Use the Ubiweb\Site::WP() class to connect a WordPress blog.
  - Setup a WordPress.com blog for the domain. 
  - In `config.yml` set `wp_domain=wp-account-domain`
  - Now you can pull posts with `$site->wp->posts`
  - Some routes will automatically be set up for to handle the blog portion.

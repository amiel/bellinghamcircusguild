# Vernacular

## What the heck?

Developing themes with WordPress can be frustrating; WordPress often makes it difficult to write clean, readable code.

Vernacular aims to provide a consistent, clear, object-oriented interface on top of WordPress to make creating WordPress themes more productive and more fun. It covers common tasks like custom post queries, cropping images, registered custom post types and taxonomies, and creating custom widgets.

### Are you sure that's a good idea? Is more abstraction really the answer?

Not entirely, and maybe.

## Getting Started

To start with Vernacular, just [download](https://github.com/nathancarnes/vernacular/archive/master.zip), unzip to your theme's directory, and include this line in your `functions.php`:

```php
require_once('vernacular/bootstrap.php');
```

## Documentation

Documentation is still a work in progress, but take a look at our [wiki](https://github.com/nathancarnes/vernacular/wiki/_pages) for the latest/greatest.

## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

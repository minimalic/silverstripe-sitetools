# Silverstripe SiteTools

Silverstripe Extension for Settings and Pages with custom configuration fields for usage in own templates.

New options for Pages:
- `ShowInFooter` (Bool)

New options for SiteConfig:
- `FooterCopyright` (Varchar)
- `FooterDisclaimer` (HTMLText)


## Requirements

* Silverstripe 4 or Silverstripe 5


## Installation

```sh
composer require minimalic/silverstripe-sitetools
```

Refresh DB (shell website root):
`vendor/bin/sake dev/build "flush=all"`

Or use base URL with:
`/dev/build?flush=all`


## Configuration: CMS

Use the Settings area for global footer content or Page settings for the `ShowInFooter` option.


## Configuration: Templates

In your footer template use `$SiteConfig.FooterCopyright` or `$SiteConfig.FooterDisclaimer`:

```html
<div class="row">
    &copy; $Now.Year $SiteConfig.FooterCopyright
</div>
<div class="row text-black-50">
    $SiteConfig.FooterDisclaimer
</div>
```

For custom lists/navs of pages with `ShowInFooter` enabled use `<% loop $FooterMenu %>` in Footer templates.


## License

See [License](LICENSE.md)

Copyright (c) 2024, minimalic.com - Sebastian Finke
All rights reserved.


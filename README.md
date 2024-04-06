# Silverstripe SiteTools

Extension for Silverstripe's "siteconfig" for custom settings/fields.


## Requirements

* Silverstripe 4 or Silverstripe 5


## Installation

```sh
composer require minimalic/silverstripe-sitetools
```

Refresh DB (shell website root):

`vendor/bin/sake dev/build "flush=all"`


## Configuration: CMS

Inside CMS use the settings area (tab "Footer").


## Configuration: Templates

In your footer template use `$SiteConfig.FooterCopyright` or `$SiteConfig.FooterDisclaimer`.
Example:

```html
<div class="row">
    &copy; $Now.Year $SiteConfig.FooterCopyright
</div>
<div class="row text-black-50">
    $SiteConfig.FooterDisclaimer
</div>
```


## License

See [License](LICENSE.md)

Copyright (c) 2024, minimalic.com - Sebastian Finke
All rights reserved.


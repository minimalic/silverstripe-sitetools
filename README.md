# SilverStripe SiteTools

Extension for Silverstripe's "siteconfig" for custom settings/fields.


## Requirements

* Silverstripe 4 or Silverstripe 5


## Installation

```sh
composer require minimalic/silverstripe-sitetools
```

Refresh DB (shell website root):

vendor/bin/sake dev/build "flush=all"


## Configuration: CMS

Inside CMS use the settings area (tab "Footer").


## Configuration: Templates

In your footer templates use:

```html
$SiteConfig.FooterCopyright
$SiteConfig.FooterDisclaimer
```


## License

See [License](license.md)

Copyright (c) 2024, minimalic.com - Sebastian Finke
All rights reserved.


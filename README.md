# base.module.options.provider.separator

<table>
<tr>
<td>
<a href="https://github.com/Liventin/base.module">Bitrix Base Module</a>
</td>
</tr>
</table>

install | update

```
"require": {
    "liventin/base.module.options.provider.separator": "dev-main"
}
"repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:liventin/base.module.options.provider.separator"
    }
]
```
redirect (optional)
```
"extra": {
  "service-redirect": {
    "liventin/base.module.options.provider.separator": "module.name",
  }
}
```

Php Storm Live Template

```
<?php

namespace ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Options;

use ${MODULE_PROVIDER_CAMMAL_CASE}\\${MODULE_CODE_CAMMAL_CASE}\Service\Options\Option;

class SeparatorSample implements Option
{

    public static function getId(): string
    {
        return 'sample_separator';
    }

    public static function getName(): string
    {
        return 'Пример разделителя';
    }

    public static function getType(): string
    {
        return 'separator';
    }

    public static function getTabId(): string
    {
        return TabMain::getId();
    }

    public static function getSort(): int
    {
        return 50;
    }

    public static function getParams(): array
    {
        return [];
    }
}
```
# FormAPI

Simple API for creating forms for MCPE clients (PocketMine only)

## Including in other plugins

### As a plugin
This library can be loaded as a plugin phar. You can use the [`depend`](https://doc.pmmp.io/en/rtfd/developer-reference/plugin-manifest.html#depend) key in `plugin.yml` to require its presence.

### As a virion
This library supports being included as a [virion](https://github.com/poggit/support/blob/master/virion.md).

If you use [Poggit](https://poggit.pmmp.io) to build your plugin, you can add it to your `.poggit.yml` like so:

```yml
projects:
  YourPlugin:
    libs:
      - src: jojoe77777/FormAPI/libFormAPI
        version: ^2.1.1
```

## Add Features
### HEADER
![HEADER](https://i.ibb.co/834GHpV/IMG-20250824-232401.jpg)
<br>
For Developers:
```php
$form->addHeader(string $text);
```

### TOOLTIP
![TOOLTIP](https://i.ibb.co/3nQhkV0/IMG-20250824-232426.jpg)
<br>
For Developers:
```php
$form->addToggle("input", "", "", "this is tooltip");
$form->addDropDown("select", ["1", "2", "3"], 0, "this is tooltip dropdown");
.....
```

### DIVIDER
![DIVIDER](https://i.ibb.co/n8wKXgys/IMG-20250824-232552.jpg)
<br>
For Developers:
```php
$form->addDivider();
```

### SET CUSTOM SUBMIT BUTTON
![Set Custom Submit Button](https://i.ibb.co/JjhNXk2g/IMG-20250824-232446.jpg)
<br>
For Developers:
```php
$form->setSubmitButton(string $text);
```

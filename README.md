# Kirby Cookie Consent plugin

![GitHub release (with filter)](https://img.shields.io/github/v/release/Pixel-Open/kirby-cookie-consent?style=for-the-badge)

[![Dependency](https://img.shields.io/badge/kirby-3.6-cca000.svg?style=for-the-badge)](https://getkirby.com/)

A plugin for [Kirby CMS](http://getkirby.com) to handle cookie consent for the GDPR

## Commercial Usage

This plugin is free

## Installation

### Download

[Download the files](https://github.com/Pixel-Open/kirby-cookie-consent/releases) and place them inside `site/plugins/kirby-cookie-consent`.

### Composer

```
composer require pixelopen/kirby-cookie-consent
```

### Git Submodule

You can add the plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/Pixel-Open/kirby-cookie-consent.git site/plugins/kirby-cookie-consent
    $ git submodule update --init --recursive
    $ git commit -am "Add Kirby Cookie Consent plugin"

Run these commands to update the plugin:

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

### Initialization

Run your website.
Add the tabs `tabs/cookie-consent` to your `site.yml` blueprint.
You should see a new tab named Cookie Consent in the homepage of the panel.
From this page you can edit the settings of the cookie consent module.

Add the snippet `cookie-consent` to your header snippet to activate the plugin in the frontend.

The plugin functionnalities work well with Kirby 3 and 4.
The plugin only handle 5 services for the moment.
If you want to add more service, add the specific by yourself in the file `snippets/cookie-services.php`.
All available services and their script can be found on [the official tarteaucitron website](https://tarteaucitron.io/en/install/)

## Options

You can fix a parameter to a specific value by adding it in the config : `pixelopen.kirby-cookie-consent.[parameterName]`
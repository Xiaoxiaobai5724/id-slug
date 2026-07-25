# ID Slug

[![MIT license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/Xiaoxiaobai5724/id-slug/blob/2.x/LICENSE.md) [![Latest Stable Version](https://img.shields.io/packagist/v/Xiaoxiaobai5724/id-slug.svg)](https://packagist.org/packages/xxb5724/id-slug) [![Total Downloads](https://img.shields.io/packagist/dt/Xiaoxiaobai5724/id-slug.svg)](https://packagist.org/packages/xxb5724/id-slug)

---

A [Flarum](https://flarum.org) extension. Use `id` as the `slug` in the discussion URL.

- AS-IS:
  - http://exmaple.com/d/123-hello-world
  - http://exmaple.com/d/123-hello-world/3

- TO-BE:
  - http://exmaple.com/d/123
  - http://exmaple.com/d/123/3

### Installation
```sh
composer require xxb5724/id-slug
```

> **Migrating from pipecraft/flarum-ext-id-slug**
This extension was transferred to XXB and was previously published as `pipecraft/flarum-ext-id-slug`. The XXB line begins at **2.0.0**, continuing the version history (the previous package reached 1.1.0).
For forum admins, migration is a one-line change — swap the package, keep your settings and stored SEO data:
```sh
composer remove pipecraft/flarum-ext-id-slug
composer require xxb5724/id-slug
php flarum cache:clear
```

### Updating
```sh
composer update xxb5724/id-slug
```

### How to Use
1. Install extension
2. Enable **ID Slug** extension
3. Basics > Slug Driver(Discussion) > Select **id** slug driver

### Notice

- If you are using the sitemap(fof/sitemap) extension, you need to upgrade to v1.0.1 or above. （[Use Slug Driver system properly](https://github.com/FriendsOfFlarum/sitemap/issues/30)）

# Infobip

An infobip API wrapper.
<br />
[![Total Downloads][ico-downloads]][link-downloads]
[![Latest Version on Packagist][ico-version]][link-packagist]


## Install

Via Composer

``` bash
$ composer require accessafya/infobip
```

## Usage

``` php
// Initial with authentication
$infobip = new AccessAfya\Infobip(
  $username,
  $password,
  $senderId,
  $baseUrl
);

```

### SMS

Sending  SMS
```php
$response = $infobip->sms->send(
  "text_message",
  "phone_number"
  "scheduled_time" // Optional
);
```

### Email

Sending  Email

```php
// Coming soon
$response = $infobip->email->send();
```

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email [author]() instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/accessafya/infobip
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/accessafya/infobip
[link-author]: https://github.com/resper45
[link-contributors]: ../../contributors

# Infobip

An infobip API wrapper.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

## Install

Via Composer

``` bash
$ composer require accessafya/infobip
```

## Usage

``` php

// SMS
$sms = new AccessAfya\Infobip\SMS(
  $username,
  $password,
  $senderId,
  $baseUrl
);

// Returns GuzzleHttp Response object
$response = $sms->send(
  "text_message",
  "phone_number"
  "scheduled_time" // Optional
);

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

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors

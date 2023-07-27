# Tr String

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-string" rel="nofollow">
    <img src="https://img.shields.io/packagist/v/netkod-bilisim/tr-string" alt="Latest Stable Version">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string" rel="nofollow">
    <img src="https://img.shields.io/packagist/dt/netkod-bilisim/tr-string" alt="Total Downloads">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string" rel="nofollow">
    <img src="https://poser.pugx.org/netkod-bilisim/tr-string/dependents.svg" alt="Dependents">
</a>

<a href="https://packagist.org/packages/netkod-bilisim/tr-string" rel="nofollow">
    <img src="https://img.shields.io/packagist/l/netkod-bilisim/tr-string" alt="License">
</a>
</div>

<div style="text-align: center">
<a href="https://packagist.org/packages/netkod-bilisim/tr-string" rel="nofollow">
    <img src="http://poser.pugx.org/netkod-bilisim/tr-string/require/php" alt="License">
</a>
<a href="https://scrutinizer-ci.com/g/netkod-bilisim/tr-string/badges/quality-score.png?b=master" rel="nofollow">
    <img src="https://scrutinizer-ci.com/g/netkod-bilisim/tr-string/badges/quality-score.png?b=master" alt="License">
</a>

<a href="https://github.styleci.io/repos/671509392?branch=master" rel="nofollow">
<svg xmlns="http://www.w3.org/2000/svg" width="103" height="20">
<g shape-rendering="crispEdges">
<path fill="#555" d="M0 0h53v20H0z" />
<path fill="#4c1" d="M53 0h50v20H53z" />
</g>
<g fill="#fff" text-anchor="middle" font-family="DejaVu Sans,Verdana,Geneva,sans-serif" font-size="11">
<text x="27.5" y="14">StyleCI</text>
<text x="77" y="14">passed</text>
</g>
</svg>
</a>

</div>

## <img src="public/assets/images/presentation.png" width="25" height="25"> Introduction

It provides functions to help with the problem of converting Turkish text to uppercase and lowercase in PHP.

## <img src="public/assets/images/requirement.png" width="25" height="25"> Requirements

- PHP >= 7.4
- PHP mbstring extension

## <img src="public/assets/images/inbox.png" width="25" height="25"> Install

```bash
composer require netkod-bilisim/tr-string
```

## <img src="public/assets/images/web-coding.png" width="25" height="25"> Usage

```php
include "./vendor/autoload.php";

# Make a string uppercase
dd( tr_strtoupper('Pijamalı hasta yağız şoföre çabucak güvendi.') );
# Result: PİJAMALI HASTA YAĞIZ ŞOFÖRE ÇABUCAK GÜVENDİ.

# Make a string lowercase
dd( tr_strtolower('PİJAMALI HASTA YAĞIZ ŞOFÖRE ÇABUCAK GÜVENDİ.') );
# Result: pijamalı hasta yağız şoföre çabucak güvendi.

# Make a string's first character uppercase
dd( tr_uppercase_first('pijamalı hasta yağız şoföre çabucak güvendi.') );
# Result: Pijamalı hasta yağız şoföre çabucak güvendi.

# Make a string's first character lowercase
dd( tr_lowercase_first('Pijamalı hasta yağız şoföre çabucak güvendi.') );
# Result: pijamalı hasta yağız şoföre çabucak güvendi.

# Uppercase the first character of each word in a string
dd( tr_ucwords('Pijamalı hasta yağız şoföre çabucak güvendi.') );
# Result: Pijamalı Hasta Yağız Şoföre Çabucak Güvendi.
```

## <img src="public/assets/images/licensing.png" width="25" height="25"> License

This package is open source software licensed under
the [MIT License](https://opensource.org/license/mit/).

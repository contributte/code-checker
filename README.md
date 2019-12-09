# Ninjify Checker

[nette/code-checker](https://github.com/nette/code-checker) optimized for co-operation with [our coding standard](https://github.com/ninjify/coding-standard)

[![Build Status](https://img.shields.io/travis/ninjify/checker.svg?style=flat-square)](https://travis-ci.org/ninjify/checker)
[![Code coverage](https://img.shields.io/coveralls/ninjify/checker.svg?style=flat-square)](https://coveralls.io/r/ninjify/checker)
[![Licence](https://img.shields.io/packagist/l/ninjify/checker.svg?style=flat-square)](https://packagist.org/packages/ninjify/checker)
[![Downloads this Month](https://img.shields.io/packagist/dm/ninjify/checker.svg?style=flat-square)](https://packagist.org/packages/ninjify/checker)
[![Downloads total](https://img.shields.io/packagist/dt/ninjify/checker.svg?style=flat-square)](https://packagist.org/packages/ninjify/checker)
[![Latest stable](https://img.shields.io/packagist/v/ninjify/checker.svg?style=flat-square)](https://packagist.org/packages/ninjify/checker)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

## Discussion / Help

[![Join the chat](https://img.shields.io/gitter/room/nettrine/nettrine.svg?style=flat-square)](https://gitter.im/nettrine/nettrine)

## Documentation

Install package

```bash
composer require --dev ninjify/checker
```

Run checker

```bash
vendor/bin/checker [options]

Options:
    -d <path>             Folder or file to scan (default: current directory)
    -i | --ignore <mask>  Files to ignore
    -f | --fix            Fixes files
    --no-progress         Do not show progress dots
```

## Versions

| State  | Version | Branch   | Nette  | PHP    |
|--------|---------|----------|--------|--------|
| dev    | `^0.1`  | `master` | `3.0+` | `^7.2` |

## Maintainers

<table>
  <tbody>
    <tr>
      <td align="center">
        <a href="https://github.com/f3l1x">
            <img width="150" height="150" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=150">
        </a>
        </br>
        <a href="https://github.com/f3l1x">Milan Felix Šulc</a>
      </td>
      <td align="center">
        <a href="https://github.com/mabar">
            <img width="150" height="150" src="https://avatars0.githubusercontent.com/u/20974277?s=150&v=4">
        </a>
        </br>
        <a href="https://github.com/mabar">Marek Bartoš</a>
      </td>
    </tr>
  </tbody>
</table>

Thank you for testing, reporting and contributing.

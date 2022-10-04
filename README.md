<h1 align="center"> PHP-Package-Builder </h1>

<p align="center"> .</p>

## Installation

```shell
$ composer require php-package-builder/php-package-builder -vvv
```

## Usage

A tool to help you automatically create PHP package, for specifics, you can refer to:

```shell
$ php-package-builder help
```

You can create php package with:

```shell
$ php-package-builder build [target directory]
```

Example:

```shell
$ php-package-builder build ./

Name of package: sample
Namespace of package: sample\sample
Description of package: A PHP sample package
Author name of package: x
Author email of package:x@example.com
License of package: MIT

```

The follow package will be created:

```
.
├── composer.json
├── .editorconfig
├── .gitattributes
├── .gitignore
├── README.md
└── src
    └── .gitkeep

```


## License

MIT
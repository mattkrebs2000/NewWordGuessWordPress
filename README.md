# [WordPress](https://wordpress.org/) on [Heroku](http://heroku.com)

Project Information:

[![Build Status](https://travis-ci.org/mattkrebs2000/MyWordpressTemplate.svg?branch=master)](https://travis-ci.org/mattkrebs2000/MyWordpressTemplate)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/ea24e1ba7dbf4845b94ddb23929b0fd1)](https://www.codacy.com/app/mattkrebs2000/MyWordpressTemplate?utm_source=github.com&utm_medium=referral&utm_content=mattkrebs2000/MyWordpressTemplate&utm_campaign=badger)
[![Dependency Status](https://www.versioneye.com/user/projects/588d26251618a700318eb016/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/588d26251618a700318eb016)
[![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/mattkrebs2000/MyWordpressTemplate.svg)](http://isitmaintained.com/project/mattkrebs2000/MyWordpressTemplate "Average time to resolve an issue")
[![Percentage of issues still open](http://isitmaintained.com/badge/open/mattkrebs2000/MyWordpressTemplate.svg)](http://isitmaintained.com/project/mattkrebs2000/MyWordpressTemplate "Percentage of issues still open")

Support:

[![Join the chat at https://gitter.im/wordpress-heroku/Lobby](https://badges.gitter.im/wordpress-heroku/Lobby.svg)](https://gitter.im/wordpress-heroku/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

---

## About:

This project is a template for installing and running [WordPress](http://wordpress.org/) on [Heroku](http://www.heroku.com/).

It is based on [Bedrock](https://roots.io/bedrock/), a modern WordPress stack that helps you to get started with the best development tools and a modern project structure.

All resources used in this project are free-of-charge. You can upgrade them post-deployment.

## Table of Contents

- [Getting Started](#gettingstarted)
- [Features](#features)
- [WIKI](https://github.com/mattkrebs2000/MyWordpressTemplate/wiki)
- [Changelog](./CHANGELOG.md)

## Getting Started

#### Method 1: One-Click-Deployment (suggested for evaluation)

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

Using this button you can deploy a new instance of WordPress.

All required extensions (MySQL DB) will be deployed automatically.
This also works if you fork your own project to work on your site.

#### Method 2: Deploy using Heroku CLI (suggested for customization)

Plase check out the [deployment page](https://github.com/mattkrebs2000/MyWordpressTemplate/wiki/Deployment) in the wiki for a step-by-step guide.

## Features

- [x] Better folder structure
- [x] Dependency management with [Composer](http://getcomposer.org)
- [x] Easy WordPress configuration with environment variables from Heroku
- [x] Autoloader for mu-plugins (use regular plugins as mu-plugins)
- [x] Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

## Problems?

If you have problems using your instance of WordPress, you should check the [official documentation](https://codex.wordpress.org/).
If you discover an issue with the deployment process provided by _this repository_, then [open an issue here](https://github.com/mattkrebs2000/MyWordpressTemplate/issues/new).

## License

Released under the [MIT license](./LICENSE).

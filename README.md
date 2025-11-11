# SilverStripe Elemental Countdown Block

Displays a countdown to a specific date and time.

[![Sponsors](https://img.shields.io/badge/GitHub-Sponsors-ff69b4?logo=github)](https://github.com/sponsors/dynamic)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-countdown/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-countdown)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-countdown/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-countdown)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-countdown/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-elemental-countdown)
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-countdown/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-countdown)


## Requirements

* silverstripe/recipe-cms: ^4@dev
* dnadesign/silverstripe-elemental: ^4@dev

## Installation

`composer require dynamic/silverstripe-elemental-countdown`

## Usage

Elemental Countdown Block will add the following Element to your site:

* Countdown (to a date/time specified in the cms)

### Template Notes

When overriding the `templates/Dynamic/Elements/CountDown/Elements/ElementCountDown.ss` file in your own theme, be sure to include the following in your `.countdown` element:

* `data-end="$End $Timezone"`
* `data-elapse="$Elapse"`

example: `<div class="countdown" data-end="$End $Timezone" data-elapse="$Elapse" ></div>`

The above is used in the initialization of the countdown plugin.

## Screen Shots

#### Front End sample of a Countdown Element
![Front End sample of a Countdown Element](./readme-images/countdown-block-sample.jpg)

#### CMS - Countdown Element Main Tab
![CMS - Countdown Element Main Tab](./readme-images/countdown-block-cms.jpg)

## Getting more elements

See [Elemental modules by Dynamic](https://github.com/dynamic/silverstripe-elemental-blocks#getting-more-elements)

## Configuration

See [SilverStripe Elemental Configuration](https://github.com/dnadesign/silverstripe-elemental#configuration)

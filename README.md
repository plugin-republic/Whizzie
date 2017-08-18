# Whizzie
A more WordPress-y theme setup wizard

## About Whizzie

Whizzie is a theme setup wizard for WordPress. It was inspired by [Merlin][https://merlinwp.com/] and partly based on the [Envato Setup Wizard](https://github.com/dtbaker/envato-wp-theme-setup-wizard) by dtbaker. It also makes use of the [TGMPA library](https://github.com/TGMPA/TGM-Plugin-Activation) by Thomas Griffin.

There are a couple of key differences between Whizzie and Merlin and Envato. Firstly, I wanted Whizzie to look more WordPress-y with the option of including it within a more general theme page. Secondly, I'd like to offer the chance to the user to do some basic personlization of the theme during set-up: e.g. adding some of their own content. In this way, it's not just about setting up a replica of the demo site, it's more about setting up the site the user actually wants.

## What does it do?

At the moment, the wizard:

* Redirects the user to theme page on activation
* Provides a WordPress-y interface for the wizard
* Allows one-click plugin installation and activation
* Can be configured by theme developer using simple config file

## What will it do?

Eventually, the aim is to include the following functionality:

* Introduction / Welcome screen
* Plugin installation
* Widget installation
* Design choices for the user, e.g:
 * Layout
 * Color palette
 * Hero image
* Branding, e.g:
 * Logo upload
 * Color palette
* License key
* Content, either/or:
 * Complete import of XML file or similar
 * Form for user to enter simple content, such as hero slogan, about statement, or similar
* Thank you section

I'm also considering whether it should automatically create a child theme.

## Find out more

I'm keeping a running commentary on development of Whizzie in [this blog post](https://catapultthemes.com/towards-a-theme-setup-wizard/).

## Configuring the wizard

### Widgets
Ensure that you have used the version of required-plugins.php for TGMPA. This has an additional filter which allows Whizzie to install the Widget Import/Export plugin.
You will need to export your widgets from your demo site and include the json file in whizzie/content. File name should be widgets.wie

## To Do
Combine TGMPA config file with Whizzie. All config in one place
Do one-click option: Too busy to go through each step? Do it all in one hit
Options for new install / existing content: e.g. We notice you already have some widgets installed. Would you like to overwrite these?
Reporting - including error messages

## Changelog

1.1.0 18 August 2017
* Added: Widgets step

1.0.0 Initial commit
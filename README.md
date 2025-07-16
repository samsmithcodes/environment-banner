# Environment Banner

This package adds a banner to your applications UI to display the current environment.

We have all have a moment where we confuse the environment we are in, maybe you accidentally did something on the production system that should have been done on UAT, or you just want to indicate to end users which environment they are using.

## Assumptions

This package assumes you are using Tailwind for your styling, so out of the box it uses Tailwind classes but of course you can customize this to fit your needs if you publish the view files.

## Installing

To install this package, run the following composer command:

```plaintext
composer require samsmithcodes/environment-banner
```

## Publish Files

You can publish the config and view files to your application for customization, just run the following commands:

```plaintext
php artisan vendor:publish --tag=environment-banner-config
php artisan vendor:publish --tag=environment-banner-view
```

## Rendering The Banner

To render the banner in your application, include the following component.

```plaintext
<x-environment-banner />
```

### Tailwind Classes

Because we set the color classes at runtime, Tailwind will not know about them, so to ensure Tailwind includes them, you should add them to the safe list, for example, in Tailwind v4 you can do this by adding the following to your `app.css`:

```plaintext
@source inline("bg-green-300 dark:bg-green-600");
```

Obviously define the classes you intend to use and then build your assets.

## Development

To develop the package, you should first setup a clean Laravel project and then create a new directory called `packages`.

Then, checkout this repository into that directory.

```plaintext
git clone git@github.com:samsmithcodes/environment-banner.git
```

Install the package dependencies with `composer install`.

To install the package to test, go back to the root of the Laravel project you setup and add the following to the `composer.json` file.

```plaintext
"repositories": [
    {
        "type": "path",
        "url": "./packages/samsmithcodes/environment-banner"
    }
],
```

Then, run the following composer command to install the package.

```plaintext
composer require samsmithcodes/environment-banner:@dev
```

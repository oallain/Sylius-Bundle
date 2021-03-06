
### Install via Composer

Download Sylius-Bundle and its dependencies to the vendor directory. You can use Composer for the automated process:
```bash
$ php composer.phar require splash/sylius-bundle
```

Composer will install the bundle to `vendor/splash` directory.

### Adding bundle to your application kernel

```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
            new \Splash\Bundle\SplashBundle(),          // Splash Sync Core PHP Bundle 
            new \Splash\Sylius\SplashSyliusBundle(),    // Splash Bundle for Sylius
        // ...
    );
}
```

### Connect to your Splash Account

First, you need to create access keys for you module in our website. To do so, on Splash workspace, go to **Servers** >> **Add a Server** and note your id & encryption keys. 

![](https://splashsync.github.io/Sylius-Bundle/img/screenshot_2.png)
 
### Configure Splash Bundles

Here is the default configuration for Splash bundles:

```yml
    splash:
        id:             812b124aa746e04c                                        # Your Splash Server Id
        key:            NTdlMDI2YWQ1NTQ5NjAuOTI3OTgxMTQ1N2UwMjZhZDU1NjFiMS      # Your Server Secret Encryption Key

    splash_sylius:
        default_channel:    US_WEB      # Select here you shop's default channel
```

### Configure Splash Routes

Add Splash Bundle routes to your configuration:

```yml
    splash_ws:
        resource: "@SplashBundle/Resources/config/routing.yml"
        prefix: /ws
```

### Requirements

* PHP 7.0+
* Sylius 1.0+
* An active Splash Sync User Account

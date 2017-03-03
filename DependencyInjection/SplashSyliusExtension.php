<?php

namespace Splash\Sylius\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SplashSyliusExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
        
        $container->setParameter('splash_sylius',    $config);
        
        //====================================================================//
        // Add Bundle Objects to Splash Parameters
        $SplashObjects  =   $container->getParameter('splash');
        $SplashObjects["objects"][]  =   "Splash\Sylius\Objects\Address";
        $SplashObjects["objects"][]  =   "Splash\Sylius\Objects\Customer";
        $SplashObjects["objects"][]  =   "Splash\Sylius\Objects\Product";
//        $SplashObjects["objects"][]  =   "Splash\Sylius\Objects\Order";
        $container->setParameter('splash',$SplashObjects);

    }
}
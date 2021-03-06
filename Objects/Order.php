<?php

namespace Splash\Sylius\Objects;

use Splash\Bundle\Annotation as SPL;

use Splash\Sylius\Objects\Traits\OrderCoreTrait;
use Splash\Sylius\Objects\Traits\OrderItemsTrait;
use Splash\Sylius\Objects\Traits\OrderStatusTrait;
use Splash\Sylius\Objects\Traits\OrderMetadataTrait;
use Splash\Sylius\Objects\Traits\OrderPaymentsTrait;
use Splash\Sylius\Objects\Traits\OrderPricesTrait;

/**
 * @abstract    Description of Invoice
 *
 * @author B. Paquier <contact@splashsync.com>
 * @SPL\Object( type                    =   "Order",
 *              disabled                =   false,
 *              name                    =   "Customer Order",
 *              description             =   "Sylius Order Object",
 *              icon                    =   "fa fa-shopping-cart",
 *              allow_push_created      =   true,
 *              allow_push_deleted      =   true,
 *              enable_push_created     =   false,
 *              enable_push_deleted     =   false,
 *              target                  =   "Sylius\Component\Core\Model\Order",
 *              transformer_service     =   "Splash.Sylius.Orders.Transformer"
 * )
 * 
 */
class Order {
    
    //====================================================================//
    // CORE INFORMATIONS
    //====================================================================//

    use OrderCoreTrait;
    
    //====================================================================//
    // ITEMS INFORMATIONS
    //====================================================================//
    
    use OrderItemsTrait;
    
    //====================================================================//
    // STATUS INFORMATIONS
    //====================================================================//
    
    use OrderStatusTrait;
    use OrderMetadataTrait;

    //====================================================================//
    // PRICES INFORMATIONS
    //====================================================================//
          
    use OrderPricesTrait;
    use OrderPaymentsTrait;
    
}

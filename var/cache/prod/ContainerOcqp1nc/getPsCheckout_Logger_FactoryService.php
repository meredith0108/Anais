<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.logger.factory' shared service.

return $this->services['ps_checkout.logger.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->load('getPsCheckout_ModuleService.php')) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.logger.handler']) ? $this->services['ps_checkout.logger.handler'] : $this->load('getPsCheckout_Logger_HandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.sentry.handler']) ? $this->services['ps_checkout.logger.sentry.handler'] : $this->load('getPsCheckout_Logger_Sentry_HandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.sentry.processor']) ? $this->services['ps_checkout.logger.sentry.processor'] : $this->load('getPsCheckout_Logger_Sentry_ProcessorService.php')) && false ?: '_'});
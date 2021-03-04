<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.geolocation.form_handler' shared service.

return $this->services['prestashop.admin.geolocation.form_handler'] = new \PrestaShop\PrestaShop\Core\Form\FormHandler(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load('getForm_FactoryService.php')) && false ?: '_'}->createBuilder(), ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.admin.geolocation.form_data_provider']) ? $this->services['prestashop.admin.geolocation.form_data_provider'] : $this->load('getPrestashop_Admin_Geolocation_FormDataProviderService.php')) && false ?: '_'}, ['geolocation_by_id_address' => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationByIpAddressType', 'geolocation_ip_address_whitelist' => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationIpAddressWhitelistType', 'geolocation_options' => 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Geolocation\\GeolocationOptionsType'], 'GeolocationPage');
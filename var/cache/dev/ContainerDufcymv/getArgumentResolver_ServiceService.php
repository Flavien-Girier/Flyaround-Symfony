<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Controller\\FlightController:showAction' => function () {
    return ${($_ = isset($this->services['service_locator.w1wq1dd']) ? $this->services['service_locator.w1wq1dd'] : $this->load('getServiceLocator_W1wq1ddService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\ReservationController:newAction' => function () {
    return ${($_ = isset($this->services['service_locator.t10wrab']) ? $this->services['service_locator.t10wrab'] : $this->load('getServiceLocator_T10wrabService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\FlightController::showAction' => function () {
    return ${($_ = isset($this->services['service_locator.w1wq1dd']) ? $this->services['service_locator.w1wq1dd'] : $this->load('getServiceLocator_W1wq1ddService.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\ReservationController::newAction' => function () {
    return ${($_ = isset($this->services['service_locator.t10wrab']) ? $this->services['service_locator.t10wrab'] : $this->load('getServiceLocator_T10wrabService.php')) && false ?: '_'};
})));
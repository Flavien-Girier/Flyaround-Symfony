<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Service\Mailer' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Service/Mailer.php';

return $this->services['AppBundle\Service\Mailer'] = new \AppBundle\Service\Mailer(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->load('getSwiftmailer_Mailer_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
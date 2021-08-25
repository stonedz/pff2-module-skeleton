<?php

namespace pff\modules;

use pff\Abs\AModule;
use pff\Core\ServiceContainer;
use pff\Exception\PffException;
use pff\Iface\IConfigurableModule;


class Pff2ModuleName extends AModule implements IConfigurableModule {

    public function __construct($confFile = 'pff2-module-skeleton/module.conf.local.yaml') {
        $this->loadConfig($confFile);
    }

    /**
     * @param array $parsedConfig
     * @return mixed
     */
    public function loadConfig($parsedConfig) {
        $conf = $this->readConfig($parsedConfig);
    }

}

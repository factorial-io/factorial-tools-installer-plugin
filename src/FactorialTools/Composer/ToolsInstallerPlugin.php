<?php

namespace FactorialTools\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ToolsInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ToolsInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}

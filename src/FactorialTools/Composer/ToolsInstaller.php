<?php

namespace FactorialTools\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class ToolsInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
        return '_tools/'.package->getPrettyName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'factorial-tools' === $packageType;
    }
}

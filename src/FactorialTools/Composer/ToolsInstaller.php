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
    $needed_prefix = 'factorial-io/';
    $prefix = substr($package->getPrettyName(), 0, strlen($needed_prefix));
    if ($needed_prefix !== $prefix) {
      throw new \InvalidArgumentException(
        'Unable to install factorial-tool. It'
        .'should always start its package name with '
        .'"'. $needed_prefix. '"'
      );
    }
    return '_tools/'.substr($package->getPrettyName(), strlen($needed_prefix));
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
    return 'factorial-tools' === $packageType;
  }
}

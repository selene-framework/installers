<?php
namespace Electro\Installers;

/**
 * A custom Composer installer for Electro package types.
 *
 * @package Electro\Installers
 */
class ElectroInstaller extends BaseInstaller
{
    /**
     * @var array
     */
    protected $locations = array(
        'plugin' => 'private/plugins/{$vendor}/{$name}',
    );

}

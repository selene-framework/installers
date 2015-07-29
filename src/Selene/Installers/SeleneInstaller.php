<?php
namespace Selene\Installers;

/**
 * A custom Composer installer for Selene package types.
 *
 * @package Selene\Installers
 */
class SeleneInstaller extends BaseInstaller
{
    /**
     * @var array
     */
    protected $locations = array(
        'plugin' => 'private/plugins/{$vendor}/{$name}/',
    );

}

<?php
namespace Selenia\Installers;

/**
 * A custom Composer installer for Selenia package types.
 *
 * @package Selenia\Installers
 */
class SeleniaInstaller extends BaseInstaller
{
    /**
     * @var array
     */
    protected $locations = array(
        'plugin' => 'private/plugins/{$vendor}/{$name}',
    );

}

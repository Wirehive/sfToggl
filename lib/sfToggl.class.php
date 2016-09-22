<?php


/**
 * A Symfony 1.4 plugin wrapper for the Toggl API library.
 *
 * @author  Robin Corps <robin.corps@wirehive.com>
 * @version 0.1
 * @package sfTogglPlugin
 */
class sfToggl extends TogglAPI
{
  public function __construct($apiKey = null, $mode = null, $userAgent = null)
  {
    if ($apiKey === null)
    {
      $apiKey = sfConfig::get('app_sf_toggl_plugin_apiKey');
    }

    if ($userAgent === null)
    {
      $userAgent = sfConfig::get('app_sf_toggl_plugin_userAgent');
    }

    parent::__construct($apiKey, $mode, $userAgent);
  }
}
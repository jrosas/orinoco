<?php

/**
 * sfGuardGroup module configuration.
 *
 * @package    orinoco
 * @subpackage sfGuardGroup
 * @author     Your name here
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSfGuardGroupGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'sf_guard_group' : 'sf_guard_group_'.$action;
  }
}

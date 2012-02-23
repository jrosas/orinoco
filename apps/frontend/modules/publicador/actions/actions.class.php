<?php

/**
 * publicador actions.
 *
 * @package    orinoco
 * @subpackage publicador
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class publicadorActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    /* public function executeIndex(sfWebRequest $request)
      {
      $this->forward('default', 'module');
      } */
    public function executeShow() {
        $today = getdate();
        $this->hour = $today['hours'];
    }

}

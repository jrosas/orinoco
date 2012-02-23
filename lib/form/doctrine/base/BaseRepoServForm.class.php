<?php

/**
 * RepoServ form base class.
 *
 * @method RepoServ getObject() Returns the current form's model object
 *
 * @package    orinoco
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRepoServForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'service_id'    => new sfWidgetFormInputHidden(),
      'repository_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'service_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('service_id')), 'empty_value' => $this->getObject()->get('service_id'), 'required' => false)),
      'repository_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('repository_id')), 'empty_value' => $this->getObject()->get('repository_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('repo_serv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RepoServ';
  }

}

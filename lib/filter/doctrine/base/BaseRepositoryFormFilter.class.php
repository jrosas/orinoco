<?php

/**
 * Repository filter form base class.
 *
 * @package    orinoco
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRepositoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'services_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Service')),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'user_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'services_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Service', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('repository_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addServicesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.RepoServ RepoServ')
      ->andWhereIn('RepoServ.service_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Repository';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'user_id'       => 'ForeignKey',
      'services_list' => 'ManyKey',
    );
  }
}

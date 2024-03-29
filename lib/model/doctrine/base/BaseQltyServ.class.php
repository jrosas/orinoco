<?php

/**
 * BaseQltyServ
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $quality_id
 * @property integer $service_id
 * @property string $value
 * @property Quality $Quality
 * @property Service $Service
 * 
 * @method integer  getQualityId()  Returns the current record's "quality_id" value
 * @method integer  getServiceId()  Returns the current record's "service_id" value
 * @method string   getValue()      Returns the current record's "value" value
 * @method Quality  getQuality()    Returns the current record's "Quality" value
 * @method Service  getService()    Returns the current record's "Service" value
 * @method QltyServ setQualityId()  Sets the current record's "quality_id" value
 * @method QltyServ setServiceId()  Sets the current record's "service_id" value
 * @method QltyServ setValue()      Sets the current record's "value" value
 * @method QltyServ setQuality()    Sets the current record's "Quality" value
 * @method QltyServ setService()    Sets the current record's "Service" value
 * 
 * @package    orinoco
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseQltyServ extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('qlty_serv');
        $this->hasColumn('quality_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('service_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('value', 'string', 500, array(
             'type' => 'string',
             'length' => 500,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Quality', array(
             'local' => 'quality_id',
             'foreign' => 'id'));

        $this->hasOne('Service', array(
             'local' => 'service_id',
             'foreign' => 'id'));
    }
}
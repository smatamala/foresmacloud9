<?php
App::uses('AppModel', 'Model');
/**
 * Codigo Model
 *
 * @property Codigo $Codigo
 */
class Codigo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasMany= array(
			'Produccion'=> array(
				'className'=>'Produccion',
				'foreignKey'=>'codigo_id')
		);

}

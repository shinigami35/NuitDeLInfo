<?php
class People extends Model{

    var $validate = array(
        'Nom' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un login'
            ),
        'Prénom' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un password'
            ),
        'Age' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un password'
            ),
        'Sexe' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un password'
            ),
        'Date' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un password'
            ),
        'Ville' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un password'
            ),
        'Pays' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un password'
            )
        );

}
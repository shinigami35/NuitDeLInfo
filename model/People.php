<?php
class People extends Model{

    var $validate = array(
        'Nom' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un login'
            ),
        'Prénom' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un Prénom'
            ),
        'Age' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un Age'
            ),
        'Sexe' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un Sexe'
            ),
        'Date' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser une Date'
            ),
        'Ville' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser une Ville'
            ),
        'Pays' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un Pays'
            ),
         'Commentaire' => array(
            'rule' => 'notEmpty',
            'message' => 'Vous devez préciser un Commentaire'
            )
        );

}
<?php
class Webmaster extends Model{

    var $validate = array(
            'nom' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Vous devez préciser un nom'
            ),
            'message' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Vous devez préciser un message'
            ),
            'probleme' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Vous devez préciser un message'
            ),
            'email' => array(
                    'rule' => '^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$',
                    'message' => "L'adresse email n'est pas valide"
            )
    );

}
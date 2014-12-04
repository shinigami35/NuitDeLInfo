<?php
class User extends Model{

    var $validate = array(
            'login' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Vous devez préciser un login'
            ),
            'password' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Vous devez préciser un password'
            ),
            'email' => array(
                    'rule' => '^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$',
                    'message' => "L'adresse email n'est pas valide"
            )
    );

}
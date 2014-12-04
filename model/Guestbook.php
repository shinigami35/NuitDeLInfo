<?php
class Guestbook extends Model{

    var $validate = array(
            'nom' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Vous devez préciser un Nom'
            ),
            'titre' => array(
                    'rule' => 'notEmpty',
                    'message' => 'Vous devez préciser un titre'
            ),
            'message' => array(
                    'rule' => 'notEmpty',
                    'message' => "Vous devez écrire un message"
            )
    );

}
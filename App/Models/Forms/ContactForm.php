<?php
namespace II\Forms;

use II\Utilities\Form;

class ContactForm extends Form{
    
    protected $fields = [
        'nom-prenom' => [
            'type' => 'div',
            'class' => 'row',
            'fields' => [
                'nom' => [
                    'type' => 'text',
                    'name' => 'widget-contact-form-name',
                    'title' => 'Nom',
                    'placeholder' => 'Entrez votre nom',
                    'class' => 'form-control required name',
                    'aria-required' => 'true',
                    'groupClasses' => 'form-group col-sm-6',
                ],
                'email' => [
                    'type' => 'email',
                    'name' => 'widget-contact-form-email',
                    'title' => 'Email',
                    'placeholder' => 'Entrez votre adresse mail',
                    'class' => 'form-control required email',
                    'aria-required' => 'true',
                    'groupClasses' => 'form-group col-sm-6',
                ],
            ],
        ],
    ];

}
<?php
namespace II\Forms;

use II\Utilities\Forms\Form;
use II\Utilities\Forms\Fields;

class ContactForm extends Form{
    
    // protected $fields = [
    //     'nom-prenom-group' => [
    //         'type' => 'div',
    //         'class' => 'row',
    //         'fields' => [
    //             'nom' => [
    //                 'type' => 'text',
    //                 'name' => 'widget-contact-form-name',
    //                 'title' => 'Nom',
    //                 'placeholder' => 'Entrez votre nom',
    //                 'class' => 'form-control required name',
    //                 'aria-required' => 'true',
    //                 'groupClasses' => 'form-group col-sm-6',
    //                 'required' => true,
    //             ],
    //             'email' => [
    //                 'type' => 'email',
    //                 'name' => 'widget-contact-form-email',
    //                 'title' => 'Email',
    //                 'placeholder' => 'Entrez votre adresse mail',
    //                 'class' => 'form-control required email',
    //                 'aria-required' => 'true',
    //                 'groupClasses' => 'form-group col-sm-6',
    //                 'required' => true,
    //             ],
    //         ],
    //     ],
    //     'sujet-group' => [
    //         'type' => 'div',
    //         'class' => 'row',
    //         'fields' => [
    //             'subject' => [
    //                 'type' => 'text',
    //                 'name' => 'widget-contact-form-subject',
    //                 'title' => 'Sujet de votre message',
    //                 'class' => 'form-control required subject',
    //                 'placeholder' => 'Sujet...',
    //                 'groupClasses' => 'form-group col-sm-12',
    //                 'required' => true,
    //             ]
    //         ]
    //     ],
    //     'message-group' => [
    //         'type' => 'div',
    //         'class' => 'row',
    //         'fields' => [
    //             'message' => [
    //                 'type' => 'textarea',
    //                 'name' => 'widget-contact-form-message',
    //                 'title' => 'Message',
    //                 'class' => 'form-control required message',
    //                 'placeholder' => 'Entrez votre message',
    //                 'groupClasses' => 'form-group col-sm-12',
    //                 'required' => true,
    //             ]
    //         ]
    //     ]
    // ];

    public function mainForm()
    {

        $fields = new Fields;

        $fields->addDiv('nom-prenom')
            $fields->addChild()
        

        var_dump($fields);
        die('test');

        $this->fields = $fields;

        return $this;

    }

}
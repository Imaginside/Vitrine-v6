<?php
namespace II\Forms;

use II\Utilities\Configure;
use II\Utilities\Form;

class ContactForm extends Form{
    
    protected $formName = 'widget-contact-form';
    protected $action = null;
    protected $method = 'Post';
    protected $attributes = ['role' => 'form'];

    protected $fields = [];

    public function __construct()
    {
        
        $args = \func_get_args();
        \call_user_func_array(['parent', '__construct'], $args);

        $fields = [
            'nom-email-group' => [
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
                        'required' => true,
                    ],
                    'email' => [
                        'type' => 'email',
                        'name' => 'widget-contact-form-email',
                        'title' => 'Email',
                        'placeholder' => 'Entrez votre adresse mail',
                        'class' => 'form-control required email',
                        'aria-required' => 'true',
                        'groupClasses' => 'form-group col-sm-6',
                        'required' => true,
                    ],
                ],
            ],
            'sujet-group' => [
                'type' => 'div',
                'class' => 'row',
                'fields' => [
                    'subject' => [
                        'type' => 'text',
                        'name' => 'widget-contact-form-subject',
                        'title' => 'Sujet de votre message',
                        'class' => 'form-control required subject',
                        'placeholder' => 'Sujet...',
                        'groupClasses' => 'form-group col-sm-12',
                        'required' => true,
                    ]
                ]
            ],
            'message-group' => [
                'type' => 'div',
                'class' => 'row',
                'fields' => [
                    'message' => [
                        'type' => 'textarea',
                        'name' => 'widget-contact-form-message',
                        'title' => 'Message',
                        'class' => 'form-control required message',
                        'placeholder' => 'Entrez votre message',
                        'rows' => 5,
                        'groupClasses' => 'form-group col-sm-12',
                        'required' => true,
                    ]
                ]
            ]
        ];

        $rsitekey = Configure::read('Activate.Google-reCaptcha-sitekey');
        $rsecret = Configure::read('Activate.Google-reCaptcha-secretkey');

        if($rsitekey !== '' && $rsecret !== '') {
        
            $fields['recaptcha-group'] = [
                'type' => 'div',
                'class' => 'row',
                'fields' => [
                    'g-recaptcha' => [
                        'type' => 'recaptcha',
                        'class' => 'g-recaptcha',
                        'data-sitekey' => $rsitekey
                    ],
                ],
            ];

        }

        $fields['envoyer'] = [
            'type' => 'submit',
            'title' => 'Envoyer le message <i class="fa fa-paper-plane"></i>',
            'id' => 'form-submit',
            'class' => 'btn btn-icon-holder btn-shadow btn-light-hover btn-light-hover',
            'name' => 'submit',
        ];

        $fields['radio'] = [
            'type' => 'radio',
            'name' => 'helloRadio',
            'class' => '',
            'labelClasses' => '',
            'groupClasses' => 'radio',
            'value' => 'hello world',
            'title' => 'Hello radio',
            'required' => true
        ];

        $fields['checkbox'] = [
            'type' => 'checkbox',
            'name' => 'hellocheckbox',
            'class' => '',
            'labelClasses' => '',
            'groupClasses' => 'checkbox',
            'value' => 'hello world',
            'title' => 'Hello checkbox',
            'required' => true
        ];

        $fields['radios'] = [
            'type' => 'radios',
            'name' => 'helloRadios[]',
            'class' => '',
            'radiosGroupClasses' => '',
            'labelClasses' => '',
            'groupClasses' => 'radio',
            'options' => [
                'r1' => 'Radio 1',
                'r2' => 'Radio 2',
                'r3' => 'Radio 3',
            ],
            'required' => true
        ];

        $fields['checkboxes'] = [
            'type' => 'checkboxes',
            'name' => 'helloCheckboxes[]',
            'class' => '',
            'checkboxesGroupClasses' => '',
            'labelClasses' => '',
            'groupClasses' => 'checkbox',
            'options' => [
                'r1' => 'Checkbox 1',
                'r2' => 'Checkbox 2',
                'r3' => 'Checkbox 3',
            ],
        ];

        $fields['select'] = [
            'type' => 'select',
            'title' => 'Sélectionner une option',
            'name' => 'select[]',
            'class' => 'form-control',
            'labelClasses' => '',
            'groupClasses' => '',
            'default' => 'r2',
            'options' => [
                '' => '',
                'r1' => 'Option 1',
                'r2' => 'Option 2',
                'r3' => 'Option 3',
            ],
        ];

        $this->fields = $fields;

        return $this;

    }

}
<?php
namespace II\Forms;

use II\Utilities\Configure;
use II\Utilities\Form;

class ContactForm extends Form {
    
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
                        'title' => 'Nom / Prénom',
                        'placeholder' => 'Entrez votre nom et prénom',
                        'class' => 'form-control required name',
                        'aria-required' => 'true',
                        'groupClasses' => 'form-group col-sm-12',
                        'required' => true,
                    ],
                ],
            ],
            'email-tel-group' => [
                'type' => 'div',
                'class' => 'row',
                'fields' => [
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
                    'phone' => [
                        'type' => 'tel',
                        'name' => 'widget-contact-form-phone',
                        'title' => 'Téléphone',
                        'placeholder' => 'Entrez votre numéro de téléphone',
                        'class' => 'form-control required phone',
                        'aria-required' => 'true',
                        'groupClasses' => 'form-group col-sm-6',
                        'required' => true,
                    ],
                ],
            ],
            'mention-blotel' => [
                'type' => 'html',
                'content' => '<p class="mentions-legales"><strong>Opposition au démarchage téléphonique</strong> : Si vous ne souhaitez pas faire l\'objet de prospection commerciale téléphonique, vous pouvez vous inscrire gratuitement sur la liste d\'opposition au démarchage téléphonique Bloctel. Pour en savoir plus sur les modalités d\'inscription, consultez le site Internet <a href="www.bloctel.gouv.fr" target="_blank">www.bloctel.gouv.fr</a>. Les consommateurs inscrits sur cette liste ne pourront plus être démarchés téléphoniquement par un professionnel, sauf en cas de relations contractuelles préexistantes avec ce professionnel lors du démarchage téléphonique.</p>',
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
            'mention-blotel' => [
                'type' => 'html',
                'content' => '<p class="mentions-legales"><strong>Opposition au démarchage téléphonique</strong> : Si vous ne souhaitez pas faire l\'objet de prospection commerciale téléphonique, vous pouvez vous inscrire gratuitement sur la liste d\'opposition au démarchage téléphonique Bloctel. Pour en savoir plus sur les modalités d\'inscription, consultez le site Internet <a href="www.bloctel.gouv.fr" target="_blank">www.bloctel.gouv.fr</a>. Les consommateurs inscrits sur cette liste ne pourront plus être démarchés téléphoniquement par un professionnel, sauf en cas de relations contractuelles préexistantes avec ce professionnel lors du démarchage téléphonique.</p>',
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
            ],
            'checkmention' => [
                'type' => 'checkbox',
                'name' => 'hellocheckbox',
                'class' => 'required',
                'labelClasses' => '',
                'groupClasses' => 'checkbox',
                'value' => 'Exploitation des informations',
                'title' => 'En soumettant ce formulaire, j\'accepte que les informations saisies soient exploitées dans le cadre d\'une demande de contact et de la relation commerciale qui peut en découler. Elles sont conservées pendant toute la durée de la relation d’affaires.<br>',
                'required' => true,
            ],
            'mention-traitement-donnees' => [
                'type' => 'html',
                'content' => '<p class="mentions-legales">Vous disposez d’un droit d’accès, de rectification et de suppression relatif aux données personnelles vous concernant ainsi que de celui de vous opposer à ce que ces données fassent l’objet d’un traitement, que vous pouvez exercer en écrivant à : ' . Configure::read('Society.Name') . ' - ' . Configure::read('Society.Adress') . ' - ' . Configure::read('Society.Zipcode') . ' ' . Configure::read('Society.Town') . '.</p>',
            ],
        ];


        // $fields['checkbox'] = [
        //     'type' => 'checkbox',
        //     'name' => 'hellocheckbox',
        //     'class' => 'required',
        //     'labelClasses' => '',
        //     'groupClasses' => 'checkbox',
        //     'value' => 'Exploitation des informations',
        //     'title' => 'En soumettant ce formulaire, j\'accepte que les informations saisies soient exploitées dans le cadre d\'une demande de contact et de la relation commerciale qui peut en découler. Elles sont conservées pendant toute la durée de la relation d’affaires.<br><p class="mentions-legales">Vous disposez d’un droit d’accès, de rectification et de suppression relatif aux données personnelles vous concernant ainsi que de celui de vous opposer à ce que ces données fassent l’objet d’un traitement, que vous pouvez exercer en écrivant à : ' . Configure::read('Society.Name') . ' - ' . Configure::read('Society.Adress') . ' - ' . Configure::read('Society.Zipcode') . ' ' . Configure::read('Society.Town') . '.</p>',
        //     'required' => true,
        // ];

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
            'type' => 'div',
            'class' => 'row text-center',
            'fields' => [
                'envoyer' => [
                    'type' => 'submit',
                    'title' => 'Envoyer le message <i class="fa fa-paper-plane"></i>',
                    'id' => 'form-submit',
                    'class' => 'btn btn-icon-holder btn-shadow btn-light-hover btn-light-hover',
                    'name' => 'submit',
                ],
            ],
        ];
        

        // $fields['radio'] = [
        //     'type' => 'radio',
        //     'name' => 'helloRadio',
        //     'class' => '',
        //     'labelClasses' => '',
        //     'groupClasses' => 'radio',
        //     'value' => 'hello world',
        //     'title' => 'Hello radio'
        // ];

        // $fields['checkbox'] = [
        //     'type' => 'checkbox',
        //     'name' => 'hellocheckbox',
        //     'class' => '',
        //     'labelClasses' => '',
        //     'groupClasses' => 'checkbox',
        //     'value' => 'hello world',
        //     'title' => 'Hello checkbox'
        // ];

        // $fields['radios'] = [
        //     'type' => 'radios',
        //     'name' => 'helloRadios[]',
        //     'class' => '',
        //     'radiosGroupClasses' => '',
        //     'labelClasses' => '',
        //     'groupClasses' => 'radio',
        //     'options' => [
        //         'r1' => 'Radio 1',
        //         'r2' => 'Radio 2',
        //         'r3' => 'Radio 3',
        //     ]
        // ];

        // $fields['checkboxes'] = [
        //     'type' => 'checkboxes',
        //     'name' => 'helloCheckboxes[]',
        //     'class' => '',
        //     'checkboxesGroupClasses' => '',
        //     'labelClasses' => '',
        //     'groupClasses' => 'checkbox',
        //     'options' => [
        //         'r1' => 'Checkbox 1',
        //         'r2' => 'Checkbox 2',
        //         'r3' => 'Checkbox 3',
        //     ]
        // ];

        // $fields['select'] = [
        //     'type' => 'select',
        //     'title' => 'Sélectionner une option',
        //     'name' => 'select[]',
        //     'class' => 'form-control',
        //     'labelClasses' => '',
        //     'groupClasses' => '',
        //     'default' => 'r2',
        //     'options' => [
        //         '' => '',
        //         'r1' => 'Option 1',
        //         'r2' => 'Option 2',
        //         'r3' => 'Option 3',
        //     ]
        // ];

        // $fields['select'] = [
        //     'type' => 'select',
        //     'title' => 'Sélectionner une option',
        //     'name' => 'select[]',
        //     'class' => 'form-control',
        //     'labelClasses' => '',
        //     'groupClasses' => '',
        //     'default' => 'r2',
        //     'options' => [
        //         '' => '',
        //         'r1' => 'Option 1',
        //         'r2' => 'Option 2',
        //         'r3' => 'Option 3',
        //     ]
        // ];

        $this->fields = $fields;

        return $this;

    }

}
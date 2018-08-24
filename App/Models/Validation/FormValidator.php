<?php
namespace II\Models\Validation;

class FormValidator {

    const ERROR_REQUIRED = 'REQUIRED';
    const ERROR_EMAIL = 'EMAIL FORMAT';
    const ERROR_EMAIL_MX = 'EMAIL MX';
    const ERROR_TEL = 'TEL FORMAT';

    /**
     * Classe du formulaire
     * 
     * @var \II\Utilities\Form
     */
    protected $form;

    /**
     * Liste des règles à vérifier
     *
     * @var array
     */
    protected $rules = [];

    /**
     * Valeurs soumises à vérifier
     * Tableau créé en fonction des champs de la classe \II\Utilities\Form ou une classe héritée
     *
     * @var array
     */
    protected $validate = [];

    public function __construct(\II\Utilities\Form $form)
    {
        $this->form = $form;
    }

    protected function addRule($name, $field_name, $rule)
    {
        $this->rules[] = [
            'name' => $name,
            'field_name' => $field_name,
            'rule' => $rule
        ];
    }

    public function validate()
    {

        $fields = $this->form->getFields();
        $this->validate = $this->setRules($fields);

        $errors = [];

        foreach($this->rules as $rule)
        {
            $verified = \call_user_func_array($rule['rule'], [$this->validate[$rule['field_name']]]);
            if(!$verified)
            {
                $errors[] = [
                    'field_name' => $rule['field_name'],
                    'errors' => $rule['name']
                ];
            }
        }
        
        return $errors;
    }

    protected function setRules($fields)
    {
        $validate = [];

        foreach($fields as $name => $field)
        {
            
            // get _POST or _GET ...
            $data = $this->form->getData();

            if(!empty($field['fields']))
            {
                $validate = $validate + $this->setRules($field['fields']);
                continue;
            }

            if(isset($field['name']))
                $validate[$field['name']] = isset($data[$field['name']]) ? $data[$field['name']] : null;

            /**
             * Required
             */
            if(isset($field['required']) && $field['required'] === true)
            {
                $this->addRule(self::ERROR_REQUIRED, $field['name'], [$this, 'verifyRequired']);
            }

            /**
             * Format de la valeur en fonction du type de champs
             */
            switch($field['type'])
            {
                case 'email':
                    $this->addRule(self::ERROR_EMAIL, $field['name'], [$this, 'verifyEmailFormat']);
                    $this->addRule(self::ERROR_EMAIL_MX, $field['name'], [$this, 'verifyEmailMX']);
                    break;
                case 'tel':
                    $this->addRule(self::ERROR_TEL, $field['name'], [$this, 'verifyTelFormat']);
                    break;
            }


        }
        return $validate;
    }

    protected function verifyRequired($value)
    {
        return !empty($value);
    }

    protected function verifyEmailFormat($value)
    {   
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    protected function verifyEmailMX($value)
    {
        $domain = explode("@",$value)[1];
        if(!preg_match('/\.$/', $domain))
            $domain .= '.';
        return checkdnsrr($domain,"MX");
    }

    protected function verifyTelFormat($value)
    {
        return preg_match('/^\(?(?:(?:\+|00)33|0)\)?\s*[1-9](?:[\s.-]*\d{2}){4}$/', $value);
    }

}
<?php
namespace II\Models\Validation;

class FormValidator {

    const ERROR_REQUIRED = 'REQUIRED';
    const ERROR_EMAIL = 'EMAIL FORMAT';
    const ERROR_EMAIL_MX = 'EMAIL MX';
    const ERROR_TEL = 'TEL FORMAT';
    const ERROR_RECAPTCHA = 'RECAPTCHA';

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
                $this->form->addError($rule['field_name'], $rule['name']);
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
                case 'recaptcha':
                    $this->addRule(self::ERROR_RECAPTCHA, 'g-recaptcha-response', [$this, 'verifyReCaptcha']);
                    $validate['g-recaptcha-response'] = isset($data['g-recaptcha-response']) ? $data['g-recaptcha-response'] : null;
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

    protected function verifyReCaptcha($value)
    {
        $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'secret' => '6Le0zXYUAAAAADn-sB9lLqS-5yaQ_xBCVlvtR8Ez',
            'response' => $value,
        ]);

        $exec = curl_exec($ch);
        $json_exec = json_decode($exec);
        
        return !empty($json_exec) && !$json_exec && !empty($json_exec->success) && $json_exec->success === true;
    }

}
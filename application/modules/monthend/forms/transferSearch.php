<?php
    class Transaction_Form_transferSearch extends Zend_Form
    {
    public function __construct($options = null)
        {
            parent::__construct($options);
            $this->setName('Search Staff');
            $accountNumber= new Zend_Form_Element_Text('account_number');
            $accountNumber->setAttrib('class', 'txt_put');
			$accountNumber->setRequired(true);

			$amount= new Zend_Form_Element_Text('matured');
            $amount->setAttrib('class', 'txt_put');
			$amount->setAttrib('size', '8');
			$amount->setAttrib('readonly', 'true');

            $submit = new Zend_Form_Element_Submit('Transfer');
            $submit->setLabel('Transfer');

            $Confirm = new Zend_Form_Element_Submit('Confirm');
            $Confirm->setLabel('Confirm');

			$account_number1= new Zend_Form_Element_Hidden('account_number1');
			$matured1= new Zend_Form_Element_Hidden('matured1');

			$accountId= new Zend_Form_Element_Hidden('accountId');
			$productId= new Zend_Form_Element_Hidden('productId');
			
            $this->addElements(array($accountNumber,$submit,$amount,$accountId,$productId,$Confirm,$account_number1,$matured1));
         }
    }

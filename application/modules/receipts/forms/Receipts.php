<?php
class Receipts_Form_Receipts extends ZendX_JQuery_Form{

 public function init() {
        Zend_Dojo::enableForm($this);
    }
        public function __construct($path) {

        $fromglcode=new Zend_Form_Element_Select('fromglcode');
	$fromglcode->addMultiOption('','Select'.'...');
        $fromglcode->setAttrib('class', 'selectbutton');
        $fromglcode->setRequired(true)
                    ->addValidators(array(array('NotEmpty')));
        $fromglcode->setAttrib('onchange', 'getglcode(this.value,"'.$path.'")');

        $fromglsubcode=new Zend_Form_Element_Select('fromglsubcode');
	$fromglsubcode->addMultiOption('','Select'.'...');
        $fromglsubcode->setAttrib('class', 'selectbutton');

        $toglcode=new Zend_Form_Element_Select('toglcode');
	$toglcode->addMultiOption('','Select'.'...');
        $toglcode->setAttrib('class', 'selectbutton');
        $toglcode->setRequired(true)
                    ->addValidators(array(array('NotEmpty')));
        $toglcode->setAttrib('onchange', 'gettoglcode(this.value,"'.$path.'")');

        $toglsubcode=new Zend_Form_Element_Select('toglsubcode');
	$toglsubcode->addMultiOption('','Select'.'...');
        $toglsubcode->setAttrib('class', 'selectbutton');


        $amount=new Zend_Form_Element_Text('amount');
        $amount->setRequired(true)
                    ->addValidators(array(array('NotEmpty')));
        $amount->setAttrib('class', 'txt_put');
	$amount->setAttrib('onchange','getdateamount();');

        $transactiondate=new ZendX_JQuery_Form_Element_DatePicker('transactiondate');
        $transactiondate->setRequired(true)
                    ->addValidators(array(array('NotEmpty')));
        $transactiondate->setAttrib('class', 'txt_put');
	$transactiondate->setAttrib('onchange','getdateamount();');

        $transactiondate1=new Zend_Form_Element_Text('transactiondate1');
        $transactiondate1->setAttrib('class', 'txt_put');
        $transactiondate1->setAttrib('readonly', 'true');

        $amount1=new Zend_Form_Element_Text('amount1');
        $amount1->setAttrib('class', 'txt_put');
        $amount1->setAttrib('readonly', 'true');

	$description = new Zend_Form_Element_Textarea('description');
	$description->setAttrib('class', 'textfield');
 	$description->setAttrib('rows','1');
	$description->setAttrib('cols','20');
	$description->setAttrib('id', 'description');
	$description->setRequired(true);


        $officeType=new Zend_Form_Element_Select('officeType');
	$officeType->addMultiOption('','Select'.'...');
        $officeType->setAttrib('class', 'selectbutton');
        $officeType->setRequired(true)
                    ->addValidators(array(array('NotEmpty')));
        $officeType->setAttrib('onchange', 'getBranch(this.value,"'.$path.'")');

        $subOffice=new Zend_Form_Element_Select('subOffice');
	$subOffice->addMultiOption('','Select'.'...');
        $subOffice->setAttrib('class', 'selectbutton');

	$paymenttype = new Zend_Form_Element_Select('paymenttype');
	$paymenttype->addMultiOption('','select');
        $paymenttype->setAttrib('class', 'selectbutton');
	$paymenttype->setAttrib('id', 'paymenttype');
	$paymenttype->setAttrib('onchange','toggleField1();');
	$paymenttype->setRequired(true);


	$no = new Zend_Form_Element_Textarea('paymenttype_details');
	$no->setAttrib('class', 'textfield');
 	$no->setAttrib('rows','1');
	$no->setAttrib('cols','20');
	$no->setAttrib('id', 'paymenttype_details');
	$no->setRequired(true);


        $submit = new Zend_Form_Element_Submit('Submit');
        $submit->setAttrib('class', 'officesubmit');

        $this->addElements(array($fromglcode,$fromglsubcode,$toglcode,$toglsubcode,$amount,$transactiondate,$description,$submit,$officeType,$subOffice,$transactiondate1,$amount1,$paymenttype,$no));
    }
}


/**class end*/

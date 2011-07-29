<?php
	class Transaction_Form_Finalize extends Zend_Form
	{
		public function __construct($options = null)
		{
			parent::__construct($options);


			$accountId1 = new Zend_Form_Element_Hidden('accountId');
			$productId1 = new Zend_Form_Element_Hidden('productId');
			$memberId1 = new Zend_Form_Element_Hidden('memberId');

			$maturedamount = new Zend_Form_Element_Hidden('maturedinterestamount');

			$interestamountto = new Zend_Form_Element_Hidden('interestamountto');

			$capitalamount= new Zend_Form_Element_Hidden('capitalamount');

			$penalinterest= new Zend_Form_Element_Hidden('penalinterest');

			$paymenttype = new Zend_Form_Element_Select('paymenttype');
			$paymenttype->addMultiOption('','select..');
			$paymenttype->setAttrib('class','NormalBtn');
			$paymenttype->setAttrib('id', 'paymenttype');
			$paymenttype->setAttrib('onchange','toggleField();');
			$paymenttype->setRequired(true);

			$description = new Zend_Form_Element_Textarea('transactiondescription');
			$description->setAttrib('class', 'textfield');
			$description->setAttrib('rows','2');
			$description->setAttrib('cols','20');

			$no = new Zend_Form_Element_Textarea('paymenttype_details');
			$no->setAttrib('class', 'textfield');
 			$no->setAttrib('rows','1');
			$no->setAttrib('cols','20');
			$no->setAttrib('id', 'paymenttype_details');
			$no->setAttrib('style','display:none;');
			$no->setRequired(true);

			$submit = new Zend_Form_Element_Submit('Finalize');
			$submit->setLabel('Finalize');
			$submit->setAttrib('class', 'recurring');

			$this->addElements( array($accountId1,$productId1,$memberId1,$maturedamount,$submit,$capitalamount,$interestamountto,$penalinterest,$paymenttype,$description,$no));
		}
	}

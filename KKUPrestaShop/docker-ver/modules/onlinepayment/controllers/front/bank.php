<?php

class onlinepaymentbankModuleFrontController extends ModuleFrontController
{

    public function init()
    {
        parent::init();
        if(!$this->module->active)
        {
            Tools::redirect($this->context->link->getPageLink('order'));
        }
    }

    public function initContent()
    {
        
        $cart = $this->context->cart;
        $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
        $name = Configuration::get('PAYMENT_BANK_NAME'); // Set QR code size to 8
        $id = Configuration::get('PAYMENT_BANK_ID'); // PromptPay ID
        $account_name = Configuration::get('PAYMENT_ACCOUNT_NAME');

        

        parent::initContent();
        $this->context->smarty->assign([
            'PAYMENT_BANK_NAME' =>  $name,
            'PAYMENT_BANK_ID' => $id,
            'PAYMENT_ACCOUNT_NAME' => $account_name,
            'TOTAL' => $total
        ]);
        $this->setTemplate('module:onlinepayment/views/templates/front/bank.tpl');
    }
    
    
    public function setMedia()
    {
        parent::setMedia();
    }
    
    public function postProcess()
    {
        parent::postProcess();
        if(Tools::isSubmit('placeorder')){
            $file = $_FILES['slip_upload'];
            $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
            $file_name = md5($file['name']) . '.' . $ext;
            move_uploaded_file($file['tmp_name'], dirname(__FILE__) . DIRECTORY_SEPARATOR . 'slips' . DIRECTORY_SEPARATOR . $file_name);
            if(isset($file))
            {
                $cart = $this->context->cart;
                $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
                $customer = new Customer($cart->id_customer);
                $this->module->validateOrder($cart->id,Configuration::get('PS_OS_PAYMENT'), $total, $this->module->displayName, null, array(), $this->context->currency->id, false, $customer->secure_key);
                Tools::redirect($this->context->link->getPageLink('order-confirmation', Configuration::get('PS_SSL_ENABLED'), $this->context->language->id, 'id_cart='.$cart->id.'&id_module='.$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key));
            }
        }
    }
}

<?php
require_once("src/BarcodeGenerator.php");
require_once("src/BarcodeGeneratorHTML.php");

class BarcodePaymentPaymentModuleFrontController extends ModuleFrontController
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
        
        use Picqer\Barcode\BarcodeGeneratorHTML;

        $cart = $this->context->cart;
        $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
        $barcodeText = number_format($total, 2, '.', '');
        $generator = new BarcodeGeneratorHTML();
        
        parent::initContent();
        $this->context->smarty->assign([
            'TOTAL' => $total,
            'BARCODE' => $generator
        ]);
        $this->setTemplate('module:barcodepayment/views/templates/front/payment.tpl');
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

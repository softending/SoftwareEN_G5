<?php

include "src/BarcodeGenerator.php";
include "src/BarcodeGeneratorHTML.php";

class onlinepaymentcounterserviceModuleFrontController extends ModuleFrontController
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
        
        // use Picqer\Barcode\BarcodeGeneratorHTML;
        $phone_number = '0889742987'; // เปลี่ยนเป็นเบอร์โทรศัพท์ที่ต้องการ
        $total = 1000;
        // สร้างข้อความของพร้อมเพย์

        // รวมรายละเอียดการโอนเงินเข้าพร้อมเพย์เข้ากับยอดรวม
        $barcode_data = "promptpay://$phone_number?amount=$total";

        $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
        // $cart = $this->context->cart;
        // $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
        // $barcodeText = number_format($total, 2, '.', '');
        // $generator = new BarcodeGeneratorHTML();
        
        parent::initContent();
        $this->context->smarty->assign([
            'TOTAL' => $total,
            'BARCODE' => $generator->getBarcode($barcode_data, $generator::TYPE_CODE_128,3,50)
            // 'TOTAL' => $total,
            // 'BARCODE' => $generator
        ]);
        $this->setTemplate('module:onlinepayment/views/templates/front/counterservice.tpl');
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

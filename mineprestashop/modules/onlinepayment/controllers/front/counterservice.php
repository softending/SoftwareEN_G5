<?php

include "src/BarcodeGenerator.php";
include "src/BarcodeGeneratorHTML.php";
require_once ('vendor/autoload.php');

use Zxing\QrReader;

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
        
        $code = "0010104";
        $phone_number = '001';
        $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
        $cart = $this->context->cart;
        $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
        $barcode_data = "$total";

        parent::initContent();
        $this->context->smarty->assign([
            'TOTAL' => $total,
            'BARCODE' => $generator->getBarcode($barcode_data, $generator::TYPE_CODE_128),
            'CODE' => $code
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

        if (Tools::isSubmit('placeorder')) {
            $file = $_FILES['slip_upload'];

            // Validate file
            $validFile = $this->validateFile($file);
            if (!$validFile) {
                $this->errors[] = $this->module->l('Invalid file. Please upload a valid payment slip.');
                return;
            }

            // Validate QR code
            $validQrcode = $this->validateQrcode($file);
            if (!$validQrcode) {
                $this->errors[] = $this->module->l('Invalid slip.');
                return;
            }

            // Process payment
            $ext = substr($file['name'], strrpos($file['name'], '.') + 1);
            $file_name = md5($file['name']) . '.' . $ext;
            move_uploaded_file($file['tmp_name'], dirname(__FILE__) . DIRECTORY_SEPARATOR . 'slips' . DIRECTORY_SEPARATOR . $file_name);

            if (isset($file)) {
                $cart = $this->context->cart;
                $total = (float) $cart->getOrderTotal(true, Cart::BOTH);
                $customer = new Customer($cart->id_customer);
                $this->module->validateOrder($cart->id, Configuration::get('PS_OS_PAYMENT'), $total, $this->module->displayName, null, array(), $this->context->currency->id, false, $customer->secure_key);
                Tools::redirect($this->context->link->getPageLink('order-confirmation', Configuration::get('PS_SSL_ENABLED'), $this->context->language->id, 'id_cart=' . $cart->id . '&id_module=' . $this->module->id . '&id_order=' . $this->module->currentOrder . '&key=' . $customer->secure_key));
            }
        }
    }

    private function validateFile($file)
    {
        if ($file['error'] !== UPLOAD_ERR_OK) {
            return false;
        }

        $allowed_types = array('image/jpeg', 'image/png', 'image/gif');
        if (!in_array($file['type'], $allowed_types)) {
            return false;
        }

        // Resize image if needed
        $max_width = 800; // Set your maximum width
        $max_height = 600; // Set your maximum height

        list($width, $height) = getimagesize($file['tmp_name']);

        if ($width > $max_width || $height > $max_height) {
            // Calculate new dimensions
            $ratio = $width / $height;
            if ($ratio > 1) {
                $new_width = $max_width;
                $new_height = $max_width / $ratio;
            } else {
                $new_width = $max_height * $ratio;
                $new_height = $max_height;
            }

            // Create new image
            $new_image = imagecreatetruecolor($new_width, $new_height);
            $source = imagecreatefromstring(file_get_contents($file['tmp_name']));
            imagecopyresampled($new_image, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

            // Save resized image back to tmp directory
            switch ($file['type']) {
                case 'image/jpeg':
                    imagejpeg($new_image, $file['tmp_name']);
                    break;
                case 'image/png':
                    imagepng($new_image, $file['tmp_name']);
                    break;
                case 'image/gif':
                    imagegif($new_image, $file['tmp_name']);
                    break;
            }

            imagedestroy($new_image);
            imagedestroy($source);
        }

        return true;
    }

    private function validateQrcode($file)
    {
        if (!isset($file['tmp_name']) || empty($file['tmp_name'])) {
            return false;
        }
        $qrcode = new QrReader($file['tmp_name']);
        $qrcode->decode();
        $result = $qrcode->getResult();
        return $result;
    }
}

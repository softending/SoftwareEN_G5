<?php
/**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class barcodepayment extends PaymentModule
{
    public function __construct()
    {
        $this->name = 'barcodepayment';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
        $this->author = 'i am atomic';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('barcode payment');
        $this->description = $this->l('Accept payments by displaying  account number during the checkout.');
    }

    public function install()
    {
        return parent::install()
        && $this->registerHook('displayPaymentReturn')
        && $this->registerHook('paymentOptions');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayPaymentReturn()
    {
        $this->smarty->assign([
            
        ]);

        return $this->fetch('module:barcodepayment/views/templates/hook/return.tpl');
    }

    public function hookPaymentOptions()
    {
        $OnlinePaymentOption = new PaymentOption();
        $OnlinePaymentOption->setModuleName($this->name)
                ->setCallToActionText($this->l('Barcode Payment'))
                ->setAction($this->context->link->getModuleLink($this->name, 'payment', [], true))
                ->setAdditionalInformation($this->fetch('module:barcodepayment/views/templates/hook/onlinepayment_intro.tpl'));
        
        $payment_options = [
            $OnlinePaymentOption,
        ];

        return $payment_options;
    }

    public function getContent()
    {

        if(Tools::isSubmit('saveonlinepayment'))
        {
            // $name_bank = Tools::getValue('name_bank');
            // $id_bank = Tools::getValue('id_bank');
            // $account_name = Tools::getValue('account_name');
            // Configuration::updateValue('PAYMENT_BANK_NAME', $name_bank);
            // Configuration::updateValue('PAYMENT_BANK_ID', $id_bank);
            // Configuration::updateValue('PAYMENT_ACCOUNT_NAME', $account_name);
        }

        $this->context->smarty->assign([

            // 'PAYMENT_BANK_NAME' => Configuration::get('PAYMENT_BANK_NAME'),
            // 'PAYMENT_BANK_ID' => Configuration::get('PAYMENT_BANK_ID'),
            // 'PAYMENT_ACCOUNT_NAME' => Configuration::get('PAYMENT_ACCOUNT_NAME')
        ]);
        return $this->fetch('module:barcodepayment/views/templates/admin/configure.tpl');
    }
}

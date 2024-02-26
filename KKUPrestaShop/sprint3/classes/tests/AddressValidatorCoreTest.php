<?php
use PHPUnit\Framework\TestCase;
use classes\checkout\AddressValidatorCore;

class AddressValidatorCoreTest extends TestCase
{
    public function testValidateCartAddresses()
    {
        // Mock Cart object
        $cart = $this->getMockBuilder('Cart')
                     ->disableOriginalConstructor()
                     ->getMock();
        $cart->id_address_delivery = 1;
        $cart->id_address_invoice = 2;

        $validator = new AddressValidatorCore();

        // Test when all addresses are valid
        $this->assertEquals([], $validator->validateCartAddresses($cart));

        // Test when one address is invalid
        $cart->id_address_delivery = 3;
        $this->expectException(PrestaShopException::class);
        $validator->validateCartAddresses($cart);
    }

    public function testValidateCustomerAddresses()
    {
        // Mock Customer object
        $customer = $this->getMockBuilder('Customer')
                         ->disableOriginalConstructor()
                         ->getMock();

        // Mock Language object
        $language = $this->getMockBuilder('Language')
                         ->disableOriginalConstructor()
                         ->getMock();

        $validator = new AddressValidatorCore();

        // Test when all addresses are valid
        $this->assertEquals([], $validator->validateCustomerAddresses($customer, $language));

        // Test when one address is invalid
        $this->expectException(PrestaShopException::class);
        $validator->validateCustomerAddresses($customer, $language);
    }
}

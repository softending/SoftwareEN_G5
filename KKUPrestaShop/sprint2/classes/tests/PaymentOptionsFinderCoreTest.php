<?php
// PaymentOptionsFinderCoreTest.php
// require_once 'path/to/PaymentOptionsFinderCore.php'; // Include the class file
// require_once '../checkput/DeliveryOptionFinder.php';

class PaymentOptionsFinderCoreTest extends \PHPUnit\Framework\TestCase {
    public function testFind() {
        // Create an instance of PaymentOptionsFinderCore
        $paymentOptionsFinder = new PaymentOptionsFinderCore();

        // Mock the parent::find() method since it's calling HookFinder::find()
        $mockedDisplayPaymentOptions = 1;
        $paymentOptionsFinder->method('find')
            ->willReturn($mockedDisplayPaymentOptions);

        // Call the method you want to test
        $result = $paymentOptionsFinder->find();

        // Assertions for the result
        $this->assertEquals($expectedResult, $result);
    }

    public function testFindFree() {
        // Create an instance of PaymentOptionsFinderCore
        $paymentOptionsFinder = new isFreeShipping();

        // Call the method you want to test
        $result = $paymentOptionsFinder->findFree();

        // Assertions for the result
        $expectedResult = ['free_order' => ''];
        $this->assertEquals($expectedResult, $result);
    }

}

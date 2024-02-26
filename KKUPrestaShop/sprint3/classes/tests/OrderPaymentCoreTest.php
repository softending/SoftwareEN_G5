<?php
use PHPUnit\Framework\TestCase;

class OrderPaymentCoreTest extends TestCase
{
    public function testGetOrderInvoice()
    {
        // Mock the database connection
        $dbMock = $this->getMockBuilder('Db')
                       ->onlyMethods(['getValue'])
                       ->getMock();

        // Define the expected result of the getValue method
        $expectedInvoiceId = 1;
        $dbMock->expects($this->once())
               ->method('getValue')
               ->willReturn($expectedInvoiceId);

        // Replace the original Db class with the mock
        Db::setInstance($dbMock);

        // Instantiate the OrderPaymentCore object
        $orderPayment = new OrderPaymentCore();
        $orderPayment->id = 123; // Set a dummy ID for testing purposes

        // Call the method to be tested
        $result = $orderPayment->getOrderInvoice(456);

        // Assert the result
        $this->assertInstanceOf(OrderInvoice::class, $result);
        $this->assertEquals($expectedInvoiceId, $result->getId());
    }
}

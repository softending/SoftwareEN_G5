<?php

// Import classes
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\Translation\TranslatorInterface;
use Mockery;

$contextMock = Mockery::mock(Context::class);

$translatorMock = Mockery::mock(TranslatorInterface::class);

$paymentOptionsFinderMock = Mockery::mock(PaymentOptionsFinder::class);

$conditionsToApproveFinderMock = Mockery::mock(ConditionsToApproveFinder::class);

class CheckoutPaymentStepCoreTest extends TestCase
{
    
    public function testRenderWithFreeCart()
    {
        $checkoutPaymentStep = new CheckoutPaymentStepCore(
            $contextMock,
            $translatorMock,
            $paymentOptionsFinderMock,
            $conditionsToApproveFinderMock
        );

        $checkoutSessionMock = Mockery::mock(CheckoutSession::class);
        $checkoutSessionMock->shouldReceive('getCart')
            ->andReturn(Mockery::mock(Cart::class));
        $checkoutSessionMock->shouldReceive('getCart')
            ->andReturn(Mockery::mock(Cart::class))
            ->shouldReceive('getOrderTotal')
            ->with(true, Cart::BOTH)
            ->andReturn(0);
        $checkoutPaymentStep->setCheckoutSession($checkoutSessionMock);

        $paymentOptions = [];
        $paymentOptionsFinderMock->shouldReceive('present')
            ->with(true)
            ->andReturn($paymentOptions);

        $renderedOutput = $checkoutPaymentStep->render();

        $assignedVars = $checkoutPaymentStep->getTemplateVars();
        $this->assertTrue($assignedVars['is_free']);
    }

    // public function testRenderWithNonFreeCart()
    // {
    //     // Create a new CheckoutPaymentStepCore instance
    //     $checkoutPaymentStep = new CheckoutPaymentStepCore(
    //         $contextMock,
    //         $translatorMock,
    //         $paymentOptionsFinderMock,
    //         $conditionsToApproveFinderMock
    //     );

    //     // Mock getCheckoutSession method to return a mock CheckoutSession instance
    //     $checkoutSessionMock = Mockery::mock(CheckoutSession::class);
    //     $checkoutSessionMock->shouldReceive('getCart')
    //         ->andReturn(Mockery::mock(Cart::class));
    //     $checkoutSessionMock->shouldReceive('getCart')
    //         ->andReturn(Mockery::mock(Cart::class))
    //         ->shouldReceive('getOrderTotal')
    //         ->with(true, Cart::BOTH)
    //         ->andReturn(10.00);
    //     $checkoutPaymentStep->setCheckoutSession($checkoutSessionMock);

    //     // Mock paymentOptionsFinder present method to return an array
    //     $paymentOptions = [];
    //     $paymentOptionsFinderMock->shouldReceive('present')
    //         ->with(false)
    //         ->andReturn($paymentOptions);
    // }
    
    // public function testRenderWithSelectedPaymentOption()
    // {
    //     $checkoutPaymentStep = new CheckoutPaymentStepCore(
    //         $contextMock,
    //         $translatorMock,
    //         $paymentOptionsFinderMock,
    //         $conditionsToApproveFinderMock
    //     );

    //     $checkoutPaymentStep->selected_payment_option = '2';

    //     $renderedOutput = $checkoutPaymentStep->render();

    //     $assignedVars = $checkoutPaymentStep->getTemplateVars();
    //     $this->assertEquals('2', $assignedVars['selected_payment_option']);
    // }

    public function testRenderWithDeliveryOption()
    {
        $checkoutPaymentStep = new CheckoutPaymentStepCore(
            $contextMock,
            $translatorMock,
            $paymentOptionsFinderMock,
            $conditionsToApproveFinderMock
        );

        $checkoutSessionMock = Mockery::mock(CheckoutSession::class);
        $checkoutSessionMock->shouldReceive('getDeliveryOptions')
            ->andReturn([1 => ['id' => 1, 'name' => 'Standard Delivery']]);
        $checkoutSessionMock->shouldReceive('getSelectedDeliveryOption')
            ->andReturn(1);
        $checkoutPaymentStep->setCheckoutSession($checkoutSessionMock);

        $renderedOutput = $checkoutPaymentStep->render();

        $assignedVars = $checkoutPaymentStep->getTemplateVars();
        $this->assertEquals(['id' => 1, 'name' => 'ThaiPost'], $assignedVars['selected_delivery_option']);
    }

}

<?php

use Symfony\Contracts\Translation\TranslatorInterface;

class TaxInvoiceSelectionStep extends AbstractCheckoutStep
{
    /**
     * TaxInvoiceSelectionStep constructor.
     *
     * @param Context $context
     * @param TranslatorInterface $translator
     */
    public function __construct(Context $context, TranslatorInterface $translator)
    {
        parent::__construct($context, $translator);
    }

    /**
     * Handles the request, including form submission.
     *
     * @param array $requestParams
     * @return $this
     */
    public function handleRequest(array $requestParams = [])
    {
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Handle form submission
            if (isset($_POST['TaxInvoiceNeeded'])) {
                $taxInvoiceNeeded = $_POST['TaxInvoiceNeeded'] === 'true';
                
                // Store the tax invoice preference in session or database
                $this->storeTaxInvoicePreference($taxInvoiceNeeded);
                
                // Redirect to the next step or another page if needed
                // Example:
                // Tools::redirect('index.php?controller=order&step=next_step');
            }
        }

        // Perform additional logic here if needed
        
        return $this;
    }

    /**
     * Stores the tax invoice preference.
     *
     * @param bool $taxInvoiceNeeded
     */
    private function storeTaxInvoicePreference(bool $taxInvoiceNeeded)
    {
        // Example: Store the preference in the cart object
        if ($this->context->cart instanceof Cart) {
            $this->context->cart->tax_invoice_needed = $taxInvoiceNeeded;
        }
        
        // You can customize this method to suit your application's data storage mechanism
    }
}

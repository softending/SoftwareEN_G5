import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/home/20-1000-voucher.html');
  await page.locator('button.btn.btn-primary.add-to-cart[data-button-action="add-to-cart"]').click();
  await page.locator('a.btn.btn-primary[href="//localhost:8080/en/cart?action=show"]').click();
  await page.selectOption('#taxInvoiceSelect', { value: 'true' });
  // await page.locator('a.btn.btn-primary[href="http://localhost:8080/en/order"]').click();
  await page.click('#checkoutButton');
  await page.goto('http://localhost:8080/en/order?taxInvoiceNeeded=true');
  await page.close();


});
import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/home/20-1000-voucher.html');
  await page.locator('button.btn.btn-primary.add-to-cart[data-button-action="add-to-cart"]').click();
  await page.locator('a.btn.btn-primary[href="//localhost:8080/en/cart?action=show"]').click();
  await page.selectOption('#taxInvoiceSelect', { value: 'false' });
  await page.click('#checkoutButton');
  await page.goto('http://localhost:8080/en/order?taxInvoiceNeeded=false');


  await page.getByLabel('Mrs.').check();
  await page.getByLabel('First name').click();
  await page.getByLabel('First name').fill('Somsri');
  await page.getByLabel('Last name').click();
  await page.getByLabel('Last name').fill('Sodsai');
  await page.getByLabel('Email').click();
  await page.getByLabel('Email').fill('somjai@kkumail.com');
  await page.waitForSelector('button.continue.btn.btn-primary.float-xs-right:has-text("CONTINUE")');
  await page.click('button.continue.btn.btn-primary.float-xs-right:has-text("CONTINUE")');
  
  await page.getByLabel('Promptpay').check();
  await page.waitForTimeout(1000);
  await page.waitForSelector('button.btn.btn-primary.center-block:has-text("PLACE ORDER")')
  await page.waitForTimeout(1000);
  await page.click('button.btn.btn-primary.center-block:has-text("PLACE ORDER")');

  await page.waitForTimeout(1000);
  await page.goto('http://localhost:8080/en/module/onlinepayment/pp');
  await page.close();
  
  


});
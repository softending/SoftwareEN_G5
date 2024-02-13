import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/home/25-1000-voucher.html');
  await page.locator('button.btn.btn-primary.add-to-cart[data-button-action="add-to-cart"]').click();
  await page.locator('a.btn.btn-primary[href="//localhost:8080/en/cart?action=show"]').click();
  await page.locator('a.btn.btn-primary[href="http://localhost:8080/en/order"]').click();
  await page.getByLabel('Mrs.').check();
  await page.getByLabel('First name').click();
  await page.getByLabel('First name').fill('Somsri');
  await page.getByLabel('Last name').click();
  await page.getByLabel('Last name').fill('Sodsai');
  await page.getByLabel('Email').click();
  await page.getByLabel('Email').fill('somjai@kkumail.com');
  await page.waitForSelector('button.continue.btn.btn-primary.float-xs-right:has-text("CONTINUE")');
  await page.click('button.continue.btn.btn-primary.float-xs-right:has-text("CONTINUE")');
  
  
  await page.locator('#field-address1').click();
  await page.locator('#field-address1').fill('kku');

  await page.locator('#field-city').click();
  await page.locator('#field-city').fill('Khonk Kaen');

  await page.locator('#field-postcode').click();
  await page.locator('#field-postcode').fill('40000');

  await page.locator('#field-id_country').selectOption({ value: '204' });

  await page.getByLabel('Use this address for invoice too').click();
  await page.waitForTimeout(2000);

  await page.getByRole('button', { name: 'CONTINUE' }).click();
  await page.waitForTimeout(2000);

  await page.getByLabel('Online Payment').check();
  await page.waitForTimeout(1000);
  await page.waitForSelector('button.btn.btn-primary.center-block:has-text("PLACE ORDER")')
  await page.waitForTimeout(2000);
  await page.click('button.btn.btn-primary.center-block:has-text("PLACE ORDER")');

  await page.waitForTimeout(2000);
  await page.goto('http://localhost:8080/en/module/onlinepayment/payment');
  await page.waitForTimeout(2000);
  const fileInput = await page.$('input[name="slip_upload"]');
  const filePath = 'C:/Users/limal/Desktop/myprestashop/img/qrcode.jpg';

  if (fileInput) {
    await fileInput.setInputFiles(filePath);
    await page.waitForTimeout(1000);
    await page.$('button[name="placeorder"]').then(button => button && button.click());
    await page.close();
  } else {
    console.error("File input element not found.");
  }
  
  


});
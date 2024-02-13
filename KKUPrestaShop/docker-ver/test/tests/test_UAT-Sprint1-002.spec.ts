import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  // Test Case 1_1: no_login-buy-1-product
  // Open index
  await page.goto('http://localhost:8080/th/');


  await page.click('a:has-text(" ดูสินค้าใหม่ทั้งหมด")');
  await page.click('a:has-text(" ผ้าขาวม้า/ผ้าพันคอที่ระลึก")');
  await page.click('button:has-text("หยิบใส่ตะกร้า")');
  await page.click('a:has-text("ทำรายการชำระเงิน")');
  await page.click('a:has-text("ทำรายการชำระเงิน")');
  await page.check('input#field-id_gender-1');
  await page.fill('input#field-firstname', 'somsir');
  await page.fill('input#field-lastname', 'sure');
  await page.fill('input#field-email', 'somsri444@kkumail.com');
  await page.fill('input#field-password', '0889742987');
  await page.fill('input#field-birthday', '1999-02-12');
  await page.check('input[name="optin"]');
  await page.check('input[name="psgdpr"]');
  await page.check('input[name="customer_privacy"]');
  await page.click('button:has-text("ทำต่อ")');

  await page.waitForTimeout(2000);
  await page.selectOption('select#field-id_country', 'ไทย');
  await page.waitForTimeout(2000);
  await page.fill('input#field-alias', 'yale');
  await page.fill('input#field-firstname', 'somsir');
  await page.fill('input#field-lastname', 'sure');
  //await page.fill('input#field-company', 'kku');
  await page.fill('input#field-address1', '33/8 kku udon');
  await page.fill('input#field-city', 'kku');
  await page.fill('input#field-postcode', '41000');
  await page.waitForTimeout(2000);
  await page.getByRole('button',{name: 'ทำต่อ'}).click();
  await page.waitForTimeout(2000);
  await page.getByRole('button',{name: 'ทำต่อ'}).click();
  await page.check('input[name="conditions_to_approve[terms-and-conditions]"]');
  await page.getByRole('button',{name: 'สั่งซื้อ'}).click();    
});

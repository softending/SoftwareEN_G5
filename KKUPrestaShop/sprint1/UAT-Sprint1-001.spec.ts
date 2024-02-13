import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/th/10-voucher');
  await page.locator('img[alt="1000 คูปอง"]').click();
  await page.locator('button.btn.btn-primary.add-to-cart[data-button-action="add-to-cart"]').click();
  await page.locator('a.btn.btn-primary[href="//localhost:8080/th/ตะกร้า?action=show"]').click();
  await page.locator('a.btn.btn-primary[href="http://localhost:8080/th/รายการสั่งซื้อ"]').click();
  await page.getByLabel('Mrs.').check();
  await page.getByLabel('ชื่อ').click();
  await page.getByLabel('ชื่อ').fill('Somsri');
  await page.getByLabel('นามสกุล').click();
  await page.getByLabel('นามสกุล').fill('Sodsai');
  await page.getByLabel('อีเมลล์').click();
  await page.getByLabel('อีเมลล์').fill('somjai@kkumail.com');
  await page.getByLabel(' รับข้อเสนอพิเศษจากพันธมิตรของเรา').click();
  await page.getByLabel(' I agree to the terms and conditions and the privacy policy').click();
  await page.getByLabel(' Customer data privacy').click();
  await page.waitForSelector('button.continue.btn.btn-primary.float-xs-right:has-text("ทำต่อ")');
  await page.click('button.continue.btn.btn-primary.float-xs-right:has-text("ทำต่อ")');
  
  
  await page.locator('#field-address1').click();
  await page.locator('#field-address1').fill('kku');

  await page.locator('#field-city').click();
  await page.locator('#field-city').fill('ขอนแก่น');

  await page.locator('#field-postcode').click();
  await page.locator('#field-postcode').fill('40000');

  await page.locator('#field-id_country').selectOption({ value: '204' });

  await page.getByLabel('ใช้ที่อยู่นี้สำหรับใบแจ้งหนี้ด้วย').click();
  await page.waitForTimeout(2000);

  await page.getByRole('button', { name: 'ทำต่อ' }).click();

  await page.waitForTimeout(2000);
  await page.getByRole('button', { name: 'ทำต่อ' }).click();
  await page.waitForTimeout(2000);


  await page.getByLabel('ฉันยอมรับ ข้อกำหนดในการให้บริการ และจะปฏิบัติตามอย่างไม่มีเงื่อนไข').click();

  await page.waitForTimeout(2000);
  await page.waitForSelector('button.btn.btn-primary.center-block:has-text("สั่งซื้อ")')
  await page.click('button.btn.btn-primary.center-block:has-text("สั่งซื้อ")');


});
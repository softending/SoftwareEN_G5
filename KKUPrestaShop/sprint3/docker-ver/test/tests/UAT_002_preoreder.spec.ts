import { test, expect } from '@playwright/test';

// Test PreOreder 

test('test01: open main page', async ({ page }) => {
    await page.goto('http://localhost:8080/th/');
  
  
    await expect(page).toHaveTitle(/KKU PrestaShop/);
    await page.close();
  });

test('test02: select item and buy', async ({ page }) => {
    //wait add invort and edit name,email
    await page.goto('http://localhost:8080/th/');
    await page.click('a:has-text(" ดูสินค้าใหม่ทั้งหมด")');
    //add item PreOreder
    //await page.click('a:has-text("หมวก 60 ปี AGGIE KKU")');
    await page.click('button:has-text("หยิบใส่ตะกร้า")');
    await page.click('a:has-text("ทำรายการชำระเงิน")');
    await page.click('a:has-text("ทำรายการชำระเงิน")');

    /*wait for code add name/email
    await page.check('input#field-id_gender-1');
    await page.fill('input#field-firstname', 'somsir');
    await page.fill('input#field-lastname', 'sure');
    await page.fill('input#field-email', 'somsri444@kkumail.com');
    await page.fill('input#field-password', '0889742987');*/
    await page.click('button:has-text("ทำต่อ")');

    await page.waitForTimeout(2000);

    await page.click('button:has-text("ทำต่อ")');

    await page.click('button:has-text("ทำต่อ")');
    await page.click('input#delivery_option_11');
    await page.click('button:has-text("ทำต่อ")');
    await page.check('input[name="conditions_to_approve[terms-and-conditions]"]');
    await page.click('button:has-text("สั่งซื้อ")');

    await expect(page).toHaveTitle(/ยืนยันการสั่งซื้อ/);
    await page.close();
  });

test('test02: adds item ', async  ({ page }) => {
    //test add item
    await page.goto('http://localhost:8080/th/');
    await page.click('a:has-text(" ดูสินค้าใหม่ทั้งหมด")');
    //add item PreOreder
    //await page.click('a:has-text("หมวก 60 ปี AGGIE KKU")');
    await page.click('.btn-touchspin.bootstrap-touchspin-up');
    await page.waitForTimeout(1000);
    await page.click('.btn-touchspin.bootstrap-touchspin-up');

    await page.click('button:has-text("หยิบใส่ตะกร้า")');
    await page.waitForTimeout(1000);
    // ตรวจสอบข้อความที่แสดงบนหน้าเว็บ
    const quantityText = await page.$eval('.cart-products-count', element => {
      return element!.textContent!.trim();
  });
    expect(quantityText).toBe('(3)');
    await page.close();

  });

test('test02: down item ', async  ({ page }) => {
    //test down item 
    await page.goto('http://localhost:8080/th/');
    await page.click('a:has-text(" ดูสินค้าใหม่ทั้งหมด")');
    //add item PreOreder
    //await page.click('a:has-text("หมวก 60 ปี AGGIE KKU")');
    await page.click('.btn-touchspin.bootstrap-touchspin-up');
    await page.click('.btn-touchspin.bootstrap-touchspin-up');
    await page.waitForTimeout(1000);
    await page.click('.btn-touchspin.bootstrap-touchspin-down');
    await page.click('button:has-text("หยิบใส่ตะกร้า")');
    await page.waitForTimeout(2000);
    // ตรวจสอบข้อความที่แสดงบนหน้าเว็บ
    const quantityText = await page.$eval('.cart-products-count', element => {
      return element!.textContent!.trim();
  });
    expect(quantityText).toBe('(2)');
    await page.close();
  });


  
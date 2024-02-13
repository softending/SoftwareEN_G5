import { test, expect } from '@playwright/test';

//Test  out of stock

test('test01: open main page', async ({ page }) => {
    await page.goto('http://localhost:8080/th/');
  
    // open page
    await expect(page).toHaveTitle(/KKU PrestaShop/);
    await page.close();
  });

test('test02: test out of stock', async ({ page }) => {
    //wait add invort and edit name,email
    await page.goto('http://localhost:8080/th/');
    await page.click('a:has-text(" ดูสินค้าใหม่ทั้งหมด")');
    await page.click('a:has-text("หมวก 60 ปี AGGIE KKU")');

    const isDisabled = await page.$eval('button.add-to-cart', button => button.disabled);
    expect(isDisabled).toBeTruthy();
    await page.close();
  });
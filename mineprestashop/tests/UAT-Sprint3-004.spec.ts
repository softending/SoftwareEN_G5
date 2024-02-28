import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/order-confirmation?id_cart=6&id_module=68&id_order=6&key=ba643ebd84eef8b8a591665963674a67');
  await page.click('a[href*="pdf-invoice"]');
  await page.close();
  


});
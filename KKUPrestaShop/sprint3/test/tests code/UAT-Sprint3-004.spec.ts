import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/en/order-confirmation?id_cart=12&id_module=69&id_order=12&key=01ab18c6b3ce9ede4618fe330b6ea71e');
  await page.click('a[href*="pdf-invoice"]');
  await page.close();
  


});
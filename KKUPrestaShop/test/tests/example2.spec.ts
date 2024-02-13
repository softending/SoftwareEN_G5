import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/th/');
  await page.getByRole('link', { name: 'เสื้อแจ็ตเก็ต-ที่ระลึก 60 ปี มข' }).click();
  await page.getByRole('button', { name: ' Add to cart' }).click();
  await page.getByRole('link', { name: ' Proceed to checkout' }).click();
  await page.getByRole('link', { name: 'Proceed to checkout' }).click();
  await page.getByLabel('Mrs.').check();
  await page.getByLabel('First name').click();
  await page.getByLabel('First name').fill('mimi');
  await page.getByLabel('Last name').click();
  await page.getByLabel('Last name').fill('momoy');
  await page.getByLabel('Email').click();
  await page.getByLabel('Email').fill('llgfdg@gmail.com');
  await page.getByRole('textbox', { name: 'Password input' }).click();
  await page.getByRole('textbox', { name: 'Password input' }).fill('ggG844-9');
  await page.getByPlaceholder('MM/DD/YYYY').click();
  await page.getByPlaceholder('MM/DD/YYYY').fill('02/02/2002');
  await page.getByText(' Receive offers from our').click();
  await page.getByText(' I agree to the terms and').click();
  await page.getByText(' Sign up for our').click();
  await page.getByText(' Customer data privacyThe').click();
  await page.getByRole('button', { name: 'Continue' }).click();
});
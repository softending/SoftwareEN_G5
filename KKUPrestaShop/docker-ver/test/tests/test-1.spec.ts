import { test, expect } from '@playwright/test';

test('test', async ({ page }) => {
  await page.goto('http://localhost:8080/th');
  await page.getByRole('link', { name: 'http://localhost:8080/th/' }).click();
  await page.goto('http://localhost:8080/en/');
});
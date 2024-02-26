{**
  * Copyright since 2007 PrestaShop SA and Contributors
  * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
  *
  * NOTICE OF LICENSE
  *
  * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
  * that is bundled with this package in the file LICENSE.md.
  * It is also available through the world-wide-web at this URL:
  * https://opensource.org/licenses/AFL-3.0
  * If you did not receive a copy of the license and are unable to
  * obtain it through the world-wide-web, please send an email
  * to license@prestashop.com so we can send you a copy immediately.
  *
  * DISCLAIMER
  *
  * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
  * versions in the future. If you wish to customize PrestaShop for your
  * needs please refer to https://devdocs.prestashop.com/ for more information.
  *
  * @author    PrestaShop SA and Contributors <contact@prestashop.com>
  * @copyright Since 2007 PrestaShop SA and Contributors
  * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
  *}
 {block name='cart_detailed_actions'}
   <div class="checkout cart-detailed-actions js-cart-detailed-actions card-block">
     {if $cart.minimalPurchaseRequired}
       <div class="alert alert-warning" role="alert">
         {$cart.minimalPurchaseRequired}
       </div>
       <div class="text-sm-center">
         <button type="button" class="btn btn-primary disabled" disabled>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</button>
       </div>
     {elseif empty($cart.products) }
       <div class="text-sm-center">
         <button type="button" class="btn btn-primary disabled" disabled>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</button>
       </div>
     {else}
       <div class="text-sm-center">
         <!-- <a href="{$urls.pages.order}" class="btn btn-primary">{l s='Proceed to checkout' d='Shop.Theme.Actions'}</a>
         {hook h='displayExpressCheckout'} -->
 
         <!-- <h2 class="h2">{l s='Tax Invoice' d='Shop.Theme.Checkout'}</h2> -->
         <h3>{l s='Do you want Tax Invoice ?' d='Shop.Theme.Checkout'}</h3>
         <select id="taxInvoiceSelect" name="taxInvoiceSelect">
             <option value="true">Yes, I do</option>
             <option value="false">No, I don't</option>
         </select>
         <button id="checkoutButton" class="btn btn-primary">Proceed to checkout</button>
         {hook h='displayExpressCheckout'}
         <script>
          document.getElementById('checkoutButton').addEventListener('click', function() {
              var taxInvoiceNeeded = document.getElementById('taxInvoiceSelect').value;
              console.log(taxInvoiceNeeded);
              sessionStorage.setItem('taxInvoiceNeeded', taxInvoiceNeeded);
              var checkoutUrl = 'http://localhost:8080/en/order';
  
              checkoutUrl += '?taxInvoiceNeeded=' + taxInvoiceNeeded;
              window.location.href = checkoutUrl;
            });
          </script>
       
       </div>
     {/if}
   </div>
 {/block}
 
<p>
    {l s=' ' d='Modules.Custompayment'}
    <!--{l s='V101:' d='Modules.Custompayment'}-->
</p>

{if isset($errors) && $errors}
    <div class="alert alert-danger">
        <ul>
            {foreach from=$errors item=error}
                <li>{$error}</li>
            {/foreach}
        </ul>
    </div>
{/if}

<p style="margin-bottom: 10px;">
    <img src="https://promptpay.io/0645544205.png" alt="QR Code" style="width: 400px; height: auto;">
    <br>
    Store Account Name: นาย สมชาย ใจดี
    <br>
    เมื่อโอนเงินเรียบร้อยแล้ว กรุณาอัพโหลดสลิปการโอนเงิน
</p>

<form action="{$link->getModuleLink('custompayment', 'validation', [], true)}" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button style="background-color: #24b9d7;  border: none; color: white;padding: 5px 15px; margin-bottom: 15px; border-radius: 5px;" type="submit"name="submitPaymentSlip">{l s='Upload Slip' d='Modules.Custompayment'}</button>
</form>
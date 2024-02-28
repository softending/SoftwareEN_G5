<form method="post">
    <div class="panel">
        <div class="panel-heading">
            {l s='QR Payment Configuration' mod='onlinepayment'}
        </div>
        <div class="panel-body">
            <label for="id_qr">{l s='Add you payment QR ID:' mod='onlinepayment'}</label>
            <input type="text" name="id_qr" id="id_qr" value="{$QRPAYMENT_IMG_ID}" />
            <label for="size_qr">{l s='Add you payment QR size :' mod='onlinepayment'}</label>
            <input type="number" min="2" max="16" name="size_qr" id="size_qr" value="{$QRPAYMENT_IMG_SIZE}" />
        </div>
        <div class="panel-footer">
            <button type="submit" name="saveonlinepayment" class="btn btn-default pull-right">
                {l s='Save' mod='onlinepayment'}
            </button>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            {l s='Bank Payment Configuration' mod='bankpayment'}
        </div>
        <div class="panel-body">
            <label for="name_bank">{l s='Add you payment Name:' mod='bankpayment'}</label>
            <input type="text" name="name_bank" id="name_bank" value="{$PAYMENT_BANK_NAME}" placeholder="กสิกร" />
            <label for="account_name">{l s='Add you account_name ID:' mod='bankpayment'}</label>
            <input type="text" name="account_name" id="account_name" value="{$PAYMENT_ACCOUNT_NAME}"
                placeholder="กิระวัฒน์ คำใจ" />
            <label for="id_bank">{l s='Add you payment ID:' mod='bankpayment'}</label>
            <input type="text" name="id_bank" id="id_bank" value="{$PAYMENT_BANK_ID}" placeholder="000-0-00000-0" />
        </div>
        <div class="panel-footer">
            <button type="submit" name="saveonlinepayment" class="btn btn-default pull-right">
                {l s='Save' mod='bankpayment'}
            </button>
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            {l s='Promptpay Payment Configuration' mod='Promptpay'}
        </div>
        <div class="panel-body">
            <label for="name_bank">{l s='Add you ID CARD :' mod='Promptpay'}</label>
            <input type="text" name="id_card" id="id_card" value="{$ID_CARD}" placeholder="1419902095989" />
            <label for="account_name">{l s='Add you Phone:' mod='Promptpay'}</label>
            <input type="text" name="phone" id="phone" value="{$PHONE}" placeholder="0891231231" />
        </div>
        <div class="panel-footer">
            <button type="submit" name="saveonlinepayment" class="btn btn-default pull-right">
                {l s='Save' mod='Promptpay'}
            </button>
        </div>
    </div>

</form>
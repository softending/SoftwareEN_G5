<form method="post">
    <div class="panel">
        <div class="panel-heading">
            {l s='Bank Payment Configuration' mod='bankpayment'}
        </div>
        <div class="panel-body">
            <label for="name_bank">{l s='Add you payment Name:' mod='bankpayment'}</label>
            <input type="text" name="name_bank" id="name_bank" value="{$PAYMENT_BANK_NAME}"placeholder="กสิกร" />
            <label for="account_name">{l s='Add you account_name ID:' mod='bankpayment'}</label>
            <input type="text" name="account_name" id="account_name" value="{$PAYMENT_ACCOUNT_NAME}" placeholder="กิระวัฒน์ คำใจ" />
            <label for="id_bank">{l s='Add you payment ID:' mod='bankpayment'}</label>
            <input type="text" name="id_bank" id="id_bank" value="{$PAYMENT_BANK_ID}" placeholder="000-0-00000-0" />
        </div>
        <div class="panel-footer">
            <button type="submit" name="saveonlinepayment" class="btn btn-default pull-right">
                {l s='Save' mod='bankpayment'}
            </button>
        </div>
    </div>
</form>

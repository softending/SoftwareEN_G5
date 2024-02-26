<form method="post">
    <div class="panel">
        <div class="panel-heading">
            {l s='Online Payment Configuration' mod='onlinepayment'}
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
</form>
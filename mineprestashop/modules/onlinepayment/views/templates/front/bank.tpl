{extends file='page.tpl'}

{block name="content"}
<div class="col-md-12">
    <label for="qrpayment_option">Bank Payment</label>
    <div class="payment-details" style="font-size: 1rem;">
        <div class="payment-detail">
            <label for="bank_name" style="font-size: 1rem;">ชื่อธนาคาร :</label>
            <span>{$PAYMENT_BANK_NAME}</span>
        </div>
        <div class="payment-detail">
            <label for="bank_id" style="font-size: 1rem;">ชื่อบัญชี:</label>
            <span>{$PAYMENT_ACCOUNT_NAME}</span>
        </div>
        <div class="payment-detail">
            <label for="bank_id" style="font-size: 1rem;">หมายเลขบัญชี:</label>
            <span>{$PAYMENT_BANK_ID}</span>
        </div>

        <div class="payment-detail">
            <label for="total" style="font-size: 1rem;">ยอดรวมทั้งสิ้น:</label>
            <span>{$TOTAL}</span>
        </div>
    </div>

    <form method="post" enctype="multipart/form-data">
        <label for="slip_upload" style="font-size: 1rem;">แนบสลิปการโอน</label>
        <input id="slip_upload" type="file" name="slip_upload" class="filestyle" data-buttontext="เลือกไฟล์"
            tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px); left: 0;">

        <button type="submit" name="placeorder"
            style="color: #fff; background-color: #24b9d7; border-color: transparent; position: relative; top: 15px;">
            Upload
        </button>
    </form>
</div>
{/block}
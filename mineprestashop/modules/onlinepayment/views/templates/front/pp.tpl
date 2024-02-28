{extends file='page.tpl'}

{block name="content"}
<div class="col-md-12">
    <label for="qrpayment_option">Promptpay</label>
    <div class="payment-details" style="font-size: 1rem;">

        <div class="payment-detail">
            <label for="id_card" style="font-size: 1rem;">บัตรประชน:</label>
            <span>{$ID_CARD}</span>
        </div>

        <div class="payment-detail">
            <label for="phone" style="font-size: 1rem;">หมายเลขพร้อมเพย์:</label>
            <span>{$PHONE}</span>
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
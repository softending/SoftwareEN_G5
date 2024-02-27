{extends file='page.tpl'}

{block name="content"}
<div class="col-md-12" style="display: flex; flex-direction:column; align-items: center;">
    <label for="qrpayment_option" style="font-size: 1rem;">QR Payment</label>
    
    <img src="{$qr_img}">
    <span>ref : {$ref}</span>

    <div class="payment-detail" style="padding: 1rem;">
        <label for="total" style="font-size: 1rem;">ยอดรวมทั้งสิ้น:</label>
        <span>{$total} THB</span>
    </div>


    <form method="post" enctype="multipart/form-data">
        <label for="slip_upload" style="font-size: 1rem; ">แนบสลิป หลักฐานการโอนเงิน</label>
        <input id="slip_upload" type="file" name="slip_upload" class="filestyle" data-buttontext="add file"
            tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px); left: 0;">
        <button type="submit" name="placeorder"
            style="color: #fff; background-color: #24b9d7; border-color: transparent; position: relative; top: 15px;">
            Upload
        </button>
    </form>
</div>
{/block}
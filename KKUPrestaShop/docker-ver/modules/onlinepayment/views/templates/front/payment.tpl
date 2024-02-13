{extends file='page.tpl'}

{block name="content"}
    <div class="col-md-12">
        <label for="qrpayment_option">QR Payment</label>

        <img src="{$qr_img}"> 
        <!-- <input type="radio" name="onlinepayment_option" id="qrpayment_option" />
        <label for="banktransfer_option">Bank Transfer</label>
        <input type="radio" name="onlinepayment_option" id="banktransfer_option" /> -->
        <form method="post" enctype="multipart/form-data">
            <label for="slip_upload">แนบสลิปการโอน</label>
            <input type="file" name="slip_upload" id="slip_upload" />
            <button type="submit" name="placeorder">
                Upload
            </button>
        </form>
    </div>
{/block}
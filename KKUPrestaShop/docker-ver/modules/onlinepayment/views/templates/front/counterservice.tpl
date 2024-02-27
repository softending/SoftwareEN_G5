{extends file='page.tpl'}

{block name="content"}
<div class="col-md-12">
    <label for="qrpayment_option">Counter Service Payment</label>
    <div class="payment-details" style="font-size: 1rem;">
        <div id="CounterService">
            <div class="counter-service"
                style="display: flex; flex-direction: column; background: white; width: 100%; outline: 2px solid #000; outline-offset: -1px;">
                <div
                    style="display: flex; flex-direction: row; justify-content: space-between; gap: 8px outline: 2px solid #000; outline-offset: -1px; padding: 8px;">
                    <div>
                        <div style="display: flex; flex-direction: row; gap: 8px;">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <img src="https://icsec2024.org/assets/images/logo_cp.png" alt="CP Logo"
                                    style="width: 128px;">
                            </div>
                            <div>
                                <div style="font-size: larger; font-weight: bold;">สมาคมศิษย์เก่าวิทยาการคอมพิวเตอร์
                                </div>
                                <div>โทร.(043)34786 เลขประจำตัวผู้เสียภาษีอากร 0994000391528</div>
                            </div>
                        </div>
                        <div>เบอร์โทรผู้ชำระ........................................................</div>
                    </div>
                    <div>
                        <div style="font-size: larger; font-weight: bold;">ใบแจ้งการชำระเงิน (เพื่อนำเข้าบัญชี)</div>
                        <div style="font-weight: bold;">เลขที่รายการ</div>
                        <div style="font-weight: bold;">ชำระเงินได้ภายในวันที่ 28 กุมภาพันธ์ 2567 - 6 มีนาคม 2567</div>
                    </div>
                </div>
                <div style="display: grid; grid-template-columns: 60% 40%;">
                    <div style="display: flex; gap: 4px; outline: 2px solid #000; outline-offset: -1px; padding: 8px;">
                        <img src="data:image/png;base64,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"
                            alt="Counter Service" style="height: 16px;"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/7-eleven_logo.svg/1055px-7-eleven_logo.svg.png"
                            alt="7-11" style="height: 16px;">
                        <div>เคาเน์เตอร์เซอร์วิส (ร้านเซเว่นอีเลฟเว่น) (10)</div>
                    </div>
                    <div style="outline: 2px solid #000; outline-offset: -1px;">
                        <div style="outline: 2px solid #000; outline-offset: -1px; padding: 8px;">SERVICE CODE : KKU
                        </div>
                        <div style="outline: 2px solid #000; outline-offset: -1px; padding: 8px;">
                            สำหรับเจ้าหน้าที่ธนาคาร / Bank Use Only</div>
                    </div>
                    <div style="outline: 2px solid #000; outline-offset: -1px; padding: 8px;">
                        <div style="font-weight: bold;">จำนวนเงินทั้งหมด {$TOTAL} บาท</div>
                    </div>
                    <div style="display: flex; flex-direction: column; outline: 2px solid #000; outline-offset: -1px;">
                        <div style="outline: 2px solid #000; outline-offset: -1px; padding: 8px;">
                            <div style="font-weight: bold;">ผู้รับเงิน -</div>
                            <div>Recived By -</div>
                        </div>
                        <div style="outline: 2px solid #000; outline-offset: -1px; padding: 8px;">
                            <div style="font-weight: bold;">ผู้รับมอบอำนาจ -</div>
                            <div>Recived By -</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div style="display: flex; flex-direction: column; align-items: center; padding: 8px; gap: 8px;">
                        <div style="font-weight: bold; text-align: center;">
                            สามารถชำระเงินได้ที่ธนาคารตามรายชื่อที่รับชำระบิลทุกสาขาทั่วประเทศ หรือชำระผ่าน mobile
                            banking ของแต่ละธนาคาร</div>
                        <div style="font-weight: bold; text-align: center;">
                            การลงทะเบียนจะสมบูรณ์ต่อเมื่อสมาคมศิษย์เก่าวิทยาการคอมพิวเตอร์ได้รับเงินเรียบร้อยแล้ว</div>
                        <div style="margin: 16px;">
                            {if $BARCODE}
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <div>
                                    {$BARCODE nofilter}
                                </div>
                                <div>
                                    {$CODE}
                                </div>
                            </div>
                            {else}
                            <div
                                style="background: #fff; display: flex; justify-content: center; align-items: center; width: 100%; aspect-ratio: 1/1;">
                                Barcode doesn't set.
                            </div>
                            {/if}
                        </div>
                    </div>
                </div>
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

<?php include('header.php'); ?>

  <main class="w-section main">
      <div class="content content_simple">
        <div class="w-row">
          <div class="w-col w-col-8 w-col-stack">
            <div class="eventpage_info">
              <div class="request_head">
                <h1 class="request_h1">Подарочная карта</h1>
              </div>
              <div class="giftform_imgwrap"><img src="images/gift_card.jpg" class="giftform_img">
              </div>
              <div class="giftform_descript">
                <h3>Сертификат</h3>
                <div class="giftform_price">USD 29.25</div>
                <p class="giftform_desctext">Easy to Give. Easy to Use. Easy to Love.
                  <br>Give the gift of creativity! A Paint Nite gift ticket is redeemable
                  <br>on our website for any single event.</p>
              </div>
            </div>
          </div>
          <div class="w-col w-col-4 w-col-stack">
            <div class="check_right">
              <div class="request_head">
                <h2 class="request_h1">35% скидка на карту</h2>
              </div>
              <div class="form">
                <form name="girtform" class="w-clearfix">
                  <div class="giftform_val">
                    <div class="w-row">
                      <div class="w-col w-col-6">
                        <select id="field-3" name="field-3" class="w-select giftform_select">
                          <option value="">Количество</option>
                          <option value="First">1</option>
                          <option value="Second">2</option>
                          <option value="Third">3</option>
                        </select>
                      </div>
                      <div class="w-col w-col-6">
                        <div class="giftform_valcount"><span class="giftform_x">X</span> 29.25 USD</div>
                      </div>
                    </div>
                  </div>
                  <div class="giftform_sum">
                    <div class="giftform_sumtext">Всего : 144 USD</div>
                  </div>
                  <p class="giftform_textform">Tickets are redeemable only in the selected location. US selection not redeemable in NYC
                    <br>Each gift ticket is valid for one entry to selected event
                    <br>Canadian tax will be applied at time of reservation</p>
                  <input type="submit" value="Заказать" class="button giftform_btn">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include('footer.php'); ?>

<?php include('header.php'); ?>

  <main class="w-section main">
      <div class="content content_simple">
        <div class="w-row">
          <div class="w-col w-col-8 w-col-stack">
            <div class="eventpage_info">
              <div class="eventpage_head">
                <h1 class="eventpage_head--h1">Butterfly Dream II</h1>
              </div>
              <div class="check_info">
                <h2 class="chrck_infohead">Информация о билете</h2>
                <p class="check_infotext">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem iquam massa nisl quis neque. Suspendisse in orci enim.</p>
                <h3 class="check_name">Snowy Bird at Resto Urban Dining</h3>
              </div>
              <div class="form check_formwrap">
                <form name="checkout" class="w-clearfix check_form">
                  <div class="w-row">
                    <div class="w-col w-col-6">
                      <label for="name-3" class="check_formlabel">Имя</label>
                      <input id="name-3" type="text" name="name" class="w-input check_forminput chec_forminput--margr">
                    </div>
                    <div class="w-col w-col-6">
                      <label for="email" class="check_formlabel">Фамилия</label>
                      <input id="email" type="email" name="email" required="required" class="w-input check_forminput">
                    </div>
                  </div>
                  <div class="w-row">
                    <div class="w-col w-col-6">
                      <label for="name-3" class="check_formlabel">Телефон</label>
                      <input id="name-3" type="text" name="name" class="w-input check_forminput chec_forminput--margr">
                    </div>
                    <div class="w-col w-col-6">
                      <label for="email-2" class="check_formlabel">E-mail</label>
                      <input id="email-2" type="email" name="email-2" required="required" class="w-input check_forminput">
                    </div>
                  </div>
                  <div class="check_formgroup">
                    <div class="w-checkbox w-clearfix check_formcheckboxfield">
                      <input id="checkbox" type="checkbox" name="checkbox" checked="checked" class="w-checkbox-input check_formcheckbox">
                      <label for="checkbox" class="w-form-label check_formcheckboxlabel">This is Photoshop's version &nbsp;of Loremotoshop's version &nbsp;of Lorem</label>
                    </div>
                    <div class="w-checkbox w-clearfix">
                      <input id="checkbox-2" type="checkbox" name="checkbox-2" class="w-checkbox-input check_formcheckbox">
                      <label for="checkbox-2" class="w-form-label check_formcheckboxlabel">This is Photoshop's version &nbsp;of Lorem Ipsum.</label>
                    </div>
                  </div>
                  <div class="check_formgroup--submits">
                  <input type="submit" value="оплатить сейчас"  class="button check_formsubmit check_formsubmit--now">
                  <input type="submit" value="оплатить на месте"  class="button check_formsubmit">
                  </div>
                </form>
                
              </div>
            </div>
          </div>
          <div class="w-col w-col-4 w-col-stack">
            <div class="check_right">
              <h3 class="check_head">ваш заказ</h3>
              <div class="check_total">
                <div class="check_wraptotalline">
                  <div class="w-row">
                    <div class="w-col w-col-6">
                      <div class="check_totaltext">На сумму</div>
                    </div>
                    <div class="w-col w-col-6">
                      <div class="check_totaltext check_totaltext--right">345 РУБ.</div>
                    </div>
                  </div>
                </div>
                <div class="form check_couponwrap">
                  <form name="coupon" class="w-clearfix check_couponform">
                    <input id="coupon" type="text" placeholder="Введите код" name="coupon" class="w-input check_couponinput">
                    <input type="submit" value="Применить" class="button check_couponsubmit">
                  </form>
                  
                </div>
              </div>
              <div class="check_summ">
                <div class="check_total--txt">Всего: 345 РУБ.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php include('footer.php'); ?>


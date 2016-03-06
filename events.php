 
 <?php include('header.php');?>
 
 <main class="w-section main">
      <div class="content">
        <div class="filter">
          <div class="form filter_formwrap">
            <form id="filterForm" name="filterForm" class="filter_form">
              <div class="w-row">
                <div class="w-col w-col-5">
                  <input id="FilterCity" type="text" placeholder="Город" class="w-input filter_input">
                </div>
                <div class="w-col w-col-5 filter_group">
                  <div class="filter_select">
                    <input id="DataFrom" type="text" placeholder="Дата от" class="w-input filter_input--data">
                  </div>
                  <div class="filter_select">
                    <input id="DataTo" type="text" placeholder="Дата до" class="w-input filter_input--data">
                  </div>
                  <div class="filter_select">
                    <select id="Filterlevel" name="level" class="w-select filter_select--select">
                      <option value="">Сложность</option>
                      <option value="simple">Низкая</option>
                      <option value="medium">Средняя</option>
                      <option value="height">Высокая </option>
                    </select>
                  </div>
                </div>
                <div class="w-col w-col-2">
                  <input type="submit" value="Подобрать" class="button  filter_submit">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="events">
          <div class="w-row events_row">
            <div class="w-col w-col-3 w-col-medium-6">
              <div class="event">
                <a href="event.php" class="w-inline-block event_infolink">
                  <div class="w-clearfix event_info">
                    <div class="event_head">
                      <h3 class="event_head--h3">Зима близко</h3>
                      <p class="event_descript">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat&nbsp;</p>
                    </div>
                    <div class="w-clearfix event_date">
                      <div class="event_datesq">
                        <div class="event_date--c">23</div>
                        <div class="event_date--month">декабря</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="w-clearfix event_author">
                  <div class="event_authorimgwrap">
                    <a href="#" class="w-inline-block even_authorlink"><img src="images/feed_who.png" class="event_author--img">
                    </a>
                  </div>
                  <div class="event_authorinfo"><a href="#" class="w-inline-block event_authorlink"><h4 class="event_authorname">Иванова марфа</h4></a>
                    <div class="event_authortype">художник-анималист</div>
                    <div class="event_rait"></div>
                  </div>
                </div><a href="#" class="button  event_button event_button--sold">Билеты проданы</a>
              </div>
            </div>
            <div class="w-col w-col-3 w-col-medium-6">
              <div class="event">
                <a href="event.php" class="w-inline-block event_infolink">
                  <div class="w-clearfix event_info">
                    <div class="event_head">
                      <h3 class="event_head--h3">Зима близко</h3>
                      <p class="event_descript">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat&nbsp;</p>
                    </div>
                    <div class="w-clearfix event_date">
                      <div class="event_datesq">
                        <div class="event_date--c">23</div>
                        <div class="event_date--month">декабря</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="w-clearfix event_author">
                  <div class="event_authorimgwrap">
                    <a href="#" class="w-inline-block even_authorlink"><img src="images/feed_who.png" class="event_author--img">
                    </a>
                  </div>
                  <div class="event_authorinfo"><a href="#" class="w-inline-block event_authorlink"><h4 class="event_authorname">Иванова марфа</h4></a>
                    <div class="event_authortype">художник-анималист</div>
                    <div class="event_rait"></div>
                  </div>
                </div><a href="#" class="button  event_button">купить билет<br><em data-new-link="true" class="event_button--stock">осталось 13 билетов</em></a>
              </div>
            </div>
            <div class="w-col w-col-3 w-col-medium-6">
              <div class="event">
                <a href="event.php" class="w-inline-block event_infolink">
                  <div class="w-clearfix event_info">
                    <div class="event_head">
                      <h3 class="event_head--h3">Зима близко</h3>
                      <p class="event_descript">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat&nbsp;</p>
                    </div>
                    <div class="w-clearfix event_date">
                      <div class="event_datesq">
                        <div class="event_date--c">23</div>
                        <div class="event_date--month">декабря</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="w-clearfix event_author">
                  <div class="event_authorimgwrap">
                    <a href="#" class="w-inline-block even_authorlink"><img src="images/feed_who.png" class="event_author--img">
                    </a>
                  </div>
                  <div class="event_authorinfo"><a href="#" class="w-inline-block event_authorlink"><h4 class="event_authorname">Иванова марфа</h4></a>
                    <div class="event_authortype">художник-анималист</div>
                    <div class="event_rait"></div>
                  </div>
                </div><a href="#" class="button  event_button">купить билет<br><em data-new-link="true" class="event_button--stock">осталось 13 билетов</em></a>
              </div>
            </div>
            <div class="w-col w-col-3 w-col-medium-6">
              <div class="event">
                <a href="event.php" class="w-inline-block event_infolink">
                  <div class="w-clearfix event_info">
                    <div class="event_head">
                      <h3 class="event_head--h3">Зима близко</h3>
                      <p class="event_descript">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat&nbsp;</p>
                    </div>
                    <div class="w-clearfix event_date">
                      <div class="event_datesq">
                        <div class="event_date--c">23</div>
                        <div class="event_date--month">декабря</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="w-clearfix event_author">
                  <div class="event_authorimgwrap">
                    <a href="#" class="w-inline-block even_authorlink"><img src="images/feed_who.png" class="event_author--img">
                    </a>
                  </div>
                  <div class="event_authorinfo"><a href="#" class="w-inline-block event_authorlink"><h4 class="event_authorname">Иванова марфа</h4></a>
                    <div class="event_authortype">художник-анималист</div>
                    <div class="event_rait"></div>
                  </div>
                </div><a href="#" class="button  event_button">купить билет<br><em data-new-link="true" class="event_button--stock">осталось 13 билетов</em></a>
              </div>
            </div>
          </div>
          <div class="w-row events_row">
            <div class="w-col w-col-3 w-col-medium-6">
              <div class="event">
                <a href="event.php" class="w-inline-block event_infolink">
                  <div class="w-clearfix event_info">
                    <div class="event_head">
                      <h3 class="event_head--h3">Зима близко</h3>
                      <p class="event_descript">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat&nbsp;</p>
                    </div>
                    <div class="w-clearfix event_date">
                      <div class="event_datesq">
                        <div class="event_date--c">23</div>
                        <div class="event_date--month">декабря</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="w-clearfix event_author">
                  <div class="event_authorimgwrap">
                    <a href="#" class="w-inline-block even_authorlink"><img src="images/feed_who.png" class="event_author--img">
                    </a>
                  </div>
                  <div class="event_authorinfo"><a href="#" class="w-inline-block event_authorlink"><h4 class="event_authorname">Иванова марфа</h4></a>
                    <div class="event_authortype">художник-анималист</div>
                    <div class="event_rait"></div>
                  </div>
                </div><a href="#" class="button  event_button event_button--sold">Билеты проданы</a>
              </div>
            </div>
            <div class="w-col w-col-3 w-col-medium-6">
              <div class="event">
                <a href="event.php" class="w-inline-block event_infolink">
                  <div class="w-clearfix event_info">
                    <div class="event_head">
                      <h3 class="event_head--h3">Зима близко</h3>
                      <p class="event_descript">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat&nbsp;</p>
                    </div>
                    <div class="w-clearfix event_date">
                      <div class="event_datesq">
                        <div class="event_date--c">23</div>
                        <div class="event_date--month">декабря</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="w-clearfix event_author">
                  <div class="event_authorimgwrap">
                    <a href="#" class="w-inline-block even_authorlink"><img src="images/feed_who.png" class="event_author--img">
                    </a>
                  </div>
                  <div class="event_authorinfo"><a href="#" class="w-inline-block event_authorlink"><h4 class="event_authorname">Иванова марфа</h4></a>
                    <div class="event_authortype">художник-анималист</div>
                    <div class="event_rait"></div>
                  </div>
                </div><a href="#" class="button  event_button">купить билет<br><em data-new-link="true" class="event_button--stock">осталось 13 билетов</em></a>
              </div>
            </div>
            <div class="w-col w-col-3 w-col-medium-6">
              <div class="event">
                <a href="event.php" class="w-inline-block event_infolink">
                  <div class="w-clearfix event_info">
                    <div class="event_head">
                      <h3 class="event_head--h3">Зима близко</h3>
                      <p class="event_descript">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat&nbsp;</p>
                    </div>
                    <div class="w-clearfix event_date">
                      <div class="event_datesq">
                        <div class="event_date--c">23</div>
                        <div class="event_date--month">декабря</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="w-clearfix event_author">
                  <div class="event_authorimgwrap">
                    <a href="#" class="w-inline-block even_authorlink"><img src="images/feed_who.png" class="event_author--img">
                    </a>
                  </div>
                  <div class="event_authorinfo"><a href="#" class="w-inline-block event_authorlink"><h4 class="event_authorname">Иванова марфа</h4></a>
                    <div class="event_authortype">художник-анималист</div>
                    <div class="event_rait"></div>
                  </div>
                </div><a href="#" class="button  event_button">купить билет<br><em data-new-link="true" class="event_button--stock">осталось 13 билетов</em></a>
              </div>
            </div>
            <div class="w-col w-col-3 w-col-medium-6">
              <div class="event">
                <a href="event.php" class="w-inline-block event_infolink">
                  <div class="w-clearfix event_info">
                    <div class="event_head">
                      <h3 class="event_head--h3">Зима близко</h3>
                      <p class="event_descript">This is Photoshop's version &nbsp;of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat&nbsp;</p>
                    </div>
                    <div class="w-clearfix event_date">
                      <div class="event_datesq">
                        <div class="event_date--c">23</div>
                        <div class="event_date--month">декабря</div>
                      </div>
                    </div>
                  </div>
                </a>
                <div class="w-clearfix event_author">
                  <div class="event_authorimgwrap">
                    <a href="#" class="w-inline-block even_authorlink"><img src="images/feed_who.png" class="event_author--img">
                    </a>
                  </div>
                  <div class="event_authorinfo"><a href="#" class="w-inline-block event_authorlink"><h4 class="event_authorname">Иванова марфа</h4></a>
                    <div class="event_authortype">художник-анималист</div>
                    <div class="event_rait"></div>
                  </div>
                </div><a href="#" class="button  event_button">купить билет<br><em data-new-link="true" class="event_button--stock">осталось 13 билетов</em></a>
              </div>
            </div>
          </div>
        </div>
        <div class="load_more load_more--event"><a href="#" class="button  loadmore_button">Загрузить еще</a>
        </div>
      </div>
    </main>
    
     <?php include('footer.php');?>
    
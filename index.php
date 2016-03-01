
<?php include("header.php");?>

  <main class="w-section main main--mainpage">
    <div class="video_bg">
      <div class="w-embed embed_video">
        <video id="video" loop="" muted="" autoplay="" poster="images/main-bg.jpg" class="fullscreen-bg__video">
          <source src="http://nl.trixte.bget.ru/markup/video/video.webm" type="video/webm">
            <source src="http://nl.trixte.bget.ru/markup/video/video.mp4" type="video/mp4">
              <source src="http://nl.trixte.bget.ru/markup/video/video.ogv" type="video/ogg">
        </video>
      </div>
    </div>
    <div class="w-hidden-main w-hidden-medium mobile_bg"></div>
    <div class="content">
      <div class="content_search--mainpage">
        <h1 class="search_h1--mainpage">Рисуем. Пьём вино.<br>Наслаждаемся жизнью.</h1>
        <div class="form search_wrap">
          <form name="search-form" class="search_form">
            <input id="search" type="text" placeholder="Где вы хотите рисовать?" name="search" data-name="search" autofocus="autofocus" class="input search_input">
            <input type="submit" value="Найти" class="button search_submit">
          </form>
        </div>
      </div>
    </div>
  </main>
  
  <?php include("footer.php");?>
@extends('basic.main')

@section('title',  '首頁')

@section('content')

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="/" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/mouse.jpg');">
                    <div class="img-bg-inner"> 
                      <h2>2023.02.26-28 鍛鍊海鼠</h2>
                      <!-- <p>
                        踏上過往太魯閣族、日本人以及榮民曾經生活過的土地，沿路都能看到他們過往生活的痕
                        跡，百年來不同族群來來去去，看著遺留下來的歷史建築、文物，不禁感慨萬千。太魯閣
                        險峻壯闊的山勢如同帶刺的玫瑰，美麗動人卻危險，一不小心失足就會跌入萬丈深淵，期
                        待下次能再來拜訪太魯閣的山，續寫下一段山中的故事。
                      </p> -->
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="/" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/boliku.jpg');">
                    <div class="img-bg-inner">
                      <h2>2023.01.29-31 寶里苦溪溯登李棟山</h2>
                      <!-- <p>
                        喜歡一路上的瀑布深潭，還有原始溪谷的樣貌，很漂亮，也給人一種平靜的感覺，
                        從瀑布深潭走到涓涓細流，從有水走到沒水，在溪谷裡慢慢溯源是特別不一樣的感受，                        
                        數不清的地形和高繞，還好有大家一起找路架繩過地形，團隊合作的過程中學習到很多，是最寶貴的經驗，
                        最後終於終於切到稜線上，大家都很累但也很感動。
                      </p> -->
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="/" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/cat.jpg');">
                    <div class="img-bg-inner">
                      <h2>2023.04.08-09 龍貓公車</h2>
                      <!-- <p>
                        踏上八通關古道西段，探訪過去乘載無數人登玉山的龍貓公車，大家坐上車，模仿著司機與乘客，玩的很開心，
                        回程路上飄起陣陣薄霧，加上陽光灑落在樹林上，頗有魔幻森林的感覺，是中級山才能看見的美景，
                        整體行程不長路況也很好，是條蠻入門的中級山路線。
                      </p> -->
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="/" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/eight.jpg');">
                    <div class="img-bg-inner">
                      <h2>2023.02.04-06 清水台黎明神社</h2>
                      <!-- <p>
                        何其幸運，能夠一瞥這些歷史洗刷後的滄海桑田，
                        我們只不過是偶然拜訪旁觀者，嘗試推敲想像伏地索道上一批一批木材從眼前運送、
                        木馬道上火車隆隆聲、神社參拜者的莊嚴肅穆、黎明遺址宿泊所旅客的熙來攘往、
                        埋頭苦幹以石英砂岩砌出平整駁坎牆面的工人們、索道頭無止運轉的纜繩、
                        各式酒瓶散落前的觥籌交錯…
                      </p> -->
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5 justify-content-center">
          <div class="col-lg-10">
            <div class="post-entry-1 lg">
              <a href="/"><img src="assets/img/mouse.jpg" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">中級山</span> <span class="mx-1">&bullet;</span> <span>2023.02.26-28</span></div>
              <h2><a href="/">鍛鍊海鼠潛水行</a></h2>
              <p class="mb-4 d-block">
                踏上過往太魯閣族、日本人以及榮民曾經生活過的土地，沿路都能看到他們過往生活的痕
                跡，百年來不同族群來來去去，看著遺留下來的歷史建築、文物，不禁感慨萬千。太魯閣
                險峻壯闊的山勢如同帶刺的玫瑰，美麗動人卻危險，一不小心失足就會跌入萬丈深淵，期
                待下次能再來拜訪太魯閣的山，續寫下一段山中的故事。
              </p>
            </div>
          </div>
        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5 justify-content-center">
          <div class="col-lg-10">
            <div class="post-entry-1 lg">
              <a href="/"><img src="assets/img/eight.jpg" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">中級山</span> <span class="mx-1">&bullet;</span> <span>2023.02.04-06</span></div>
              <h2><a href="/">清水台黎明神社</a></h2>
              <p class="mb-4 d-block">
                何其幸運，能夠一瞥這些歷史洗刷後的滄海桑田，
                我們只不過是偶然拜訪旁觀者，嘗試推敲想像伏地索道上一批一批木材從眼前運送、
                木馬道上火車隆隆聲、神社參拜者的莊嚴肅穆、黎明遺址宿泊所旅客的熙來攘往、
                埋頭苦幹以石英砂岩砌出平整駁坎牆面的工人們、索道頭無止運轉的纜繩、
                各式酒瓶散落前的觥籌交錯…
              </p>
            </div>
          </div>
        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5 justify-content-center">
          <div class="col-lg-10">
            <div class="post-entry-1 lg">
              <a href="/"><img src="assets/img/boliku.jpg" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date">溯溪</span> <span class="mx-1">&bullet;</span> <span>2023.01.29-31</span></div>
              <h2><a href="/">寶里苦溪溯登李棟山</a></h2>
              <p class="mb-4 d-block">
                喜歡一路上的瀑布深潭，還有原始溪谷的樣貌，很漂亮，也給人一種平靜的感覺，
                從瀑布深潭走到涓涓細流，從有水走到沒水，在溪谷裡慢慢溯源是特別不一樣的感受，                        
                數不清的地形和高繞，還好有大家一起找路架繩過地形，團隊合作的過程中學習到很多，是最寶貴的經驗，
                最後終於終於切到稜線上，大家都很累但也很感動。
              </p>
            </div>
          </div>
        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->
</main><!-- End #main -->

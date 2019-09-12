<?php
/**
 * Template Name: Главная
 */
get_header(); ?>

	<section class="hero" style="background-image: url('<?php echo THEME_URL; ?>/images/content/hero-bg.jpg');">
		<div class="container">

			<div class="hero__inner">
				<div class="hero__content">
					<p><strong>Биохакинг</strong> ― комплексная диагностика <br>и настройка вашего организма в Mitra Clinic</p>
					<p>Используйте скрытые возможности <br>и резервы своего организма!</p>

					<div class="hero__quote">Глубокая диагностика организма и инновационные оздоровительные методы, пришедшие из Кремниевой долины, теперь доступны в Москве!</div>
				</div>

				<div class="section-form-wrap hero__form-wrap">
          <h3>Запишитесь на бесплатную консультацию</h3>
          <?php echo do_shortcode( '[contact-form-7 id="16" title="Запишитесь на бесплатную консультацию"]' ); ?>
        </div>
			</div>

		</div>

    <div class="countries">
      <div class="container">
        <div class="countries__inner">
          <div class="countries__content">
            <h4>Биохакинг в Mitra Clinic <br>уже выбрали пациенты</h4>
            <p>А также из сотен городов России</p>
          </div>

          <div class="countries__wrap">
            <div class="countries-slider swiper-container">
              <div class="swiper-wrapper">
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/fr.svg" alt="Франции">
                  Франции
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/ch.svg" alt="Швейцарии">
                  Швейцарии
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/gb.svg" alt="Великобритании">
                  Великобритании
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/om.svg" alt="Омана">
                  Омана
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/chn.svg" alt="Китая">
                  Китая
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/sa.svg" alt="Саудовской Аравии">
                  Саудовской Аравии
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/sk.svg" alt="Словении">
                  Словении
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/kz.svg" alt="Казахстана">
                  Казахстана
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/il.svg" alt="Израиль">
                  Израиль
                </div>
                <div class="countries-slider__item swiper-slide">
                  <img src="<?php echo THEME_URL; ?>/images/content/ru.svg" alt="Россия">
                  Россия
                </div>
              </div>
            </div><!-- /.countries-slider -->
          </div>

        </div>
      </div>
    </div>

	</section>

  <section class="about" id="about" style="background-image: url('<?php echo THEME_URL; ?>/images/content/about-bg.jpg');">
    <div class="container">

      <div class="about__inner">
        <div class="about__col">
          <div class="about__content">
            <div class="section-header">
              <h2 class="section-title">Что такое биохакинг?</h2>
            </div>

            <p>Биохакинг ― система контроля над здоровьем, основанная на определении жизненных показателей конкретного человека, позволяющая не только отвести биологические часы назад, но и использовать скрытые резервы и возможности организма для повышения умственной и физической работоспособности</p>

            <p>Биохакинг позволяет находиться на передовой современной науки и медицины, и уже сегодня получать те преимущества, которые будут внедрены через несколько лет</p>
          </div>

          <div class="img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/about-img-1.jpg" alt="">
          </div>

        </div>

        <div class="about__col about__col--right">
          <div class="img-wrap">
            <img src="<?php echo THEME_URL; ?>/images/content/about-img-2.jpg" alt="">
          </div>

          <div class="about__text triangle-decor">
            <p>Впервые этот термин появился в Кремниевой долине (США) ― ведущем мировом «центре притяжения» разработчиков высокотехнологических наукоемких проектов, месте развития мировых инноваций.</p>

            <p>Термин пришелся по душе многим известным людям, банкирам и инвесторам с Уолл Стрит, которые на себе почувствовали позитивную мощь биохакинга ― ведь высокая работоспособность, крепкое здоровье, эстетичный внешний вид сегодня относятся к признакам успешного человека.</p>
          </div>

        </div>
      </div>

    </div>
  </section>

<?php $gallery = get_field( 'slider' );
if ($gallery): ?>
  <div class="gallery-slider swiper-container">
    <div class="swiper-wrapper">
      <?php foreach ( $gallery as $item ): ?>
        <div class="gallery-slider__item swiper-slide">
          <a href="<?php echo wp_get_attachment_image_url( $item, 'full' ); ?>" data-fancybox="gallery">
            <?php echo wp_get_attachment_image( $item, 'gallery' ); ?>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="swiper-scrollbar"></div>
  </div>
<?php endif; ?>

  <section class="storage" id="storage" style="background-image: url('<?php echo THEME_URL; ?>/images/content/storage-bg.jpg');">
    <div class="container">

      <div class="section-header">
        <h4>Все методы биохакинга подтверждены доказательной медициной</h4>
        <h2 class="section-title">Из чего состоит биохакинг?</h2>
        <p>Программа Биохакинга в Митра Клинике состоит из двух тесно связанных блоков:</p>
      </div>

      <div class="storage__row">
        <div class="storage__item storage__item-left">
          <p>Консультация, диагностика, разработка индивидуальной программы оздоровления и повышения умственной и физической работоспособности</p>
          <span class="storage__item-decor storage__item-decor-1"></span>
          <span class="storage__item-decor storage__item-decor-2"></span>
          <span class="storage__item-decor storage__item-decor-3"></span>
        </div>
        <span class="storage__icon">
          <span class="storage__icon-inner">
            <?php ith_the_icon( 'unlink' ); ?>
          </span>
        </span>
        <div class="storage__item storage__item-right">
          <p>Повторная диагностика, консультация и коррекция программы.</p>

          <p>Разработка долговременных мер по поддержанию здоровья и высокого качества жизни </p>
          <span class="storage__item-decor storage__item-decor-1"></span>
          <span class="storage__item-decor storage__item-decor-2"></span>
        </div>
      </div>

    </div>
  </section>

  <section class="consultation" id="consultation" style="background-image: url('<?php echo THEME_URL; ?>/images/content/consultation-bg.jpg');">
    <div class="container">

      <div class="section-header">
        <h2 class="section-title">Диагностика и консультирование</h2>
      </div>

      <div class="row">
        <div class="col">
          <div class="consultation-card">
            <div class="consultation-card__inner">
              <h3 class="consultation-card__title">Полное сканирование организма на медицинском аппаратно- программном комплексе «Метатрон». <br><span>Точность 98-100%.</span></h3>

              <ul class="consultation-card__list">
                <li>Определение рисков развития заболеваний на самом раннем этапе, когда их можно устранить быстро, безболезненно и бесследно</li>
                <li>Определение состояние всех органов и систем (в т.ч. лимфатическая система, мышечная система, костная система)</li>
                <li>Включение систем обратной связи с пациентом для настройки клеток и тканей на здоровое функционирование</li>
                <li>Альтернативная диагностика по меридианам и биологически активным точкам, основанная на принципах древней индийской медицины и классической китайской акупунктуры</li>
                <li>Выдача заключения о психоэмоциональном состоянии пациента для предупреждения развития множества опасных заболеваний, в том числе онкологии</li>
              </ul>
            </div>
          </div>

          <div class="consultation-card">
            <div class="consultation-card__inner">
              <h3 class="consultation-card__title">Биохимические анализы крови</h3>

              <ul class="consultation-card__list">
                <li>Определение биохимических показателей, важных для активного долголетия</li>
                <li>Выявление точного гормонального статуса с учетом пола и возраста</li>
                <li>Определение функциональных отклонений в работе внутренних органов и систем организма</li>
                <li>Ориентиры при определении отклонений ― на Биохимическую панель долголетия с более строгими, чем принятые усредненные, нормами</li>
              </ul>
            </div>
          </div>

        </div>

        <div class="col consultation__right">
          <div class="consultation-card">
            <div class="consultation-card__inner">
              <h3 class="consultation-card__title">Генетическое тестирование (ДНК-тестирование) для оценки полной картины рисков заболеваний, процессов пищеварения и распада токсинов, а также определения максимально результативных физических нагрузок для конкретного человека.</h3>

              <ul class="consultation-card__list">
                <li>Выявление информации, заложенной на генетическом уровне ― ее невозможно изменить, но знания о ней можно использовать для повышения работоспособности и качества жизни</li>
                <li>Получение развернутых и на 100% достоверных результатов</li>
                <li>Минимальная степень медицинского вмешательства ― проводится забор генетического материала ватной палочкой из полости рта</li>
                <li>Повышение эффективности работы по предупреждению развития наследственных заболеваний</li>
              </ul>
            </div>
          </div>

          <div class="consultation__content">
            <h3>Консультации специалистов</h3>
            <p>В соответствии с результатами диагностики для пациента составляется индивидуальная <span>«дорожная карта»</span> с указанием специалистов команды Биохакинга Митра Клиники, развернутые консультации которых необходимо получить в данном случае</p>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="s-steps" id="steps" style="background-image: url('<?php echo THEME_URL; ?>/images/content/steps-bg.jpg');">
    <div class="container">

      <h2 class="section-title">Разработка индивидуальной программы оздоровления, долголетия, повышения качества жизни</h2>

      <div class="steps">

        <div class="steps__item">
          <div class="steps__number"><span>1</span></div>
          <p><strong>Система питания.</strong> Подбор диеты на основе ДНК-теста, коррекция рациона, выведение из него продуктов, вредных для организма или вызывающих недружественную реакцию. Применение авторских разработок для снижения риска онкологии, сахарного диабета, остеопороза, сердечно- сосудистых заболеваний с помощью диеты.</p>
        </div>

        <div class="steps__item">
          <div class="steps__number"><span>2</span></div>
          <p><strong>Активизация мозговой деятельности.</strong> Регуляция и активизация когнитивных функций мозга ― мышления, внимания, памяти, творческих способностей. Индивидуальный подбор натуропатических средств.</p>
        </div>

        <div class="steps__item">
          <div class="steps__number"><span>3</span></div>
          <p><strong>Физическая активность.</strong> Разработка индивидуальной схемы (упражнения, расписание) оптимальных физических нагрузок для нормализации веса, укрепления опорно-двигательного аппарата, усиления эластичности мышц.</p>
        </div>

        <div class="steps__item">
          <div class="steps__number"><span>4</span></div>
          <p><strong>Стресс-менеджмент.</strong> Работа над снижением физической и психической чувствительности к стрессовым ситуациям; смягчение ответа организма на стрессовые состояния.</p>
        </div>

        <div class="steps__item">
          <div class="steps__number"><span>5</span></div>
          <p><strong>Детокс и выравнивание гормонального статуса.</strong> Активное выведение из организма токсинов, выравнивание гормонального баланса. Нелекарственная борьба с возрастными проявлениями (менопауза у женщин, андропауза у мужчин).</p>
        </div>

        <div class="steps__item">
          <div class="steps__number"><span>6</span></div>
          <p><strong>Сон.</strong> Повышение качества сна, облегчение засыпания, противодействие синдрому хронической усталости. Повышение работоспособности, улучшение физического состояния.</p>
        </div>

        <div class="steps__item">
          <div class="steps__number"><span>7</span></div>
          <p><strong>Эстетика.</strong> Сохранение здоровья и красоты кожи и волос, общее (в том числе визуальное) омоложение организма.</p>
        </div>

      </div><!-- /.steps -->

    </div>
  </section>

<?php $portfolios = get_any_post( 'portfolio', -1 );

if ($portfolios->have_posts()): ?>
  <section class="portfolio" id="portfolio" style="background-image: url('<?php echo THEME_URL; ?>/images/content/portfolio-bg.jpg');">
    <div class="container">

      <div class="section-top">

        <div class="section-header">
          <h2 class="section-title">А в результате?</h2>
          <p>Каждый наш пациент получает гарантированное снижение метаболического и биологического возраста, фиксируемое средствами доказательной медицины</p>
        </div>

        <div class="slider-controls">
          <div class="swiper-button-prev">
            <?php ith_the_icon( 'arrow-left' ); ?>
          </div>
          <div class="swiper-button-next">
            <?php ith_the_icon( 'arrow-right' ); ?>
          </div>
        </div>

      </div>

      <div class="portfolio-slider swiper-container">
        <div class="swiper-wrapper">
          <?php while ($portfolios->have_posts()): $portfolios->the_post(); ?>
            <div class="portfolio-slider__item swiper-slide">
              <div class="portfolio-slider__media">
                <?php $video = get_field( 'video' );
                if ($video['video_link']): ?>
                  <div class="video">
                    <a href="<?php echo esc_url($video['video_link']); ?>" class="video__link">
                      <?php if ($video['video_poster']) {
                        echo wp_get_attachment_image( $video['video_poster'], 'portfolio', '', array('class' => 'video__media') );
                      } ?>
                    </a>
                    <button type="button" aria-label="Запустить видео" class="video__button">
                      <svg class="video__button-circle" viewBox="0 0 70 70">
                        <circle cx="50%" cy="50%" r="34"></circle>
                      </svg>
                    </button>
                  </div>
                <?php endif; ?>
              </div>

              <h4 class="portfolio-slider__title"><?php the_title(); ?></h4>
              <span class="portfolio-slider__city"><?php the_field( 'city' ); ?></span>
            </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>

    </div>
  </section>
<?php endif; ?>

  <section class="methods" id="methods" style="background-image: url('<?php echo THEME_URL; ?>/images/content/methods-bg.jpg');">
    <div class="container">

      <div class="section-header">
        <h2 class="section-title">Какие методы коррекции, оздоровления <br>и омоложения мы используем?</h2>
      </div>

      <div class="row methods__list">
        <div class="col">
          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Метакоррекция ― терапия здоровой частотой.</h4>
            <p>В аппаратно-программный комплекс «Метатрон» (см. раздел «Диагностика и консультирование») включена система оздоравливающей обратной связи с пациентом, позволяющая настраивать все его клетки и ткани на здоровое функционирование.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Натуропатия.</h4>
            <p>«Природная медицина», запускающая в организме человека процессы самооздоровления и регенерации. Мягкое нетравматичное, не имеющее абсолютных противопоказаний воздействие позволяет постепенно восстановить здоровье, буквально повернув вспять биологические часы.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Фунготерапия.</h4>
            <p>Лечение различных недугов лекарственными грибами, в том числе шиитаке ― традиционный метод лечения Китая, Японии, Восточной Азии. Грибы считаются особой формой жизни, сочетающей признаки животного и растительного мира. Они богаты аминокислотами, белками, витаминами и микроэлементами. Применение фунготерапии позволяет получить антибактериальный, протиовопухолевый, противоревматический эффекты.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Гомотоксикология.</h4>
            <p>Гомеопатическая методика немецкого врача Реккевега, основанная на выводе из организма токсинов, вызвавших развитие различных видов патологии.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Классическая гомеопатия.</h4>
            <p>«Лечение подобного подобным» с использованием микродоз десятков различных биологически активных веществ.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Витаминные комплексы <br>и биологически-активные добавки.</h4>
            <p>Комплексы активных веществ, необходимых организму для поддержания здоровья и повышения функциональности органов и систем. Используем комплексы, ориентированные как на решение конкретных проблем, так и на общее оздоровление человека.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Рефлексотерапия, гирудотерапия, массажи</h4>
            <p>и другие оздоровительные и повышающие энергетический статус и высвобождающие скрытые возможности и резервы организма методики.</p>
          </div>

        </div>

        <div class="col">
          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Детокс-терапия.</h4>
            <p>Активное очищение, направленное на активизацию вывода из организма токсинов. Освобождение от токсинов облегчает работу внутренних органов, способствует повышению работоспособности, нормализации веса, улучшает внешний вид.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Фитотерапия.</h4>
            <p>Лечение сотен заболеваний настоями, экстрактами и отварами лекарственных растений, от широко известных в средней полосе России, до экзотических и особо ценных из разных стран мира.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Биопунктура.</h4>
            <p>Введение гомеопатических препаратов в биологически- активные (акупунктурные) точки организма. Сочетание акупунктуры с действием гомеопатических препаратов позволяет добиться максимальной эффективности терапии.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Физиологическая регуляционная медицина (ФРМ).</h4>
            <p>Инновационное направление, направленное на восстановление физиологического баланса организма с помощью его собственных веществ (ферментов, гормонов).</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Ступенчатая аутогемотерапия <br>по Реккевегу.</h4>
            <p>Оздоровительная методика, предполагающая  использование собственной крови пациента, в микродозах разведенной в гомеопатических препаратах. Сочетание усиливает действенность и аутогемотерапии, и гомеопатических препаратов.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Остеопатия и краниосакральная мануальная терапия.</h4>
            <p>«Ручная коррекция» организма опытными врачами. Оказывает гармонизирующее воздействие на работу всех органов и систем.</p>
          </div>

          <div class="methods-card">
            <span class="methods-card__plus">+</span>
            <h4 class="methods-card__title">Косметология.</h4>
            <p>Используем инновационные методы омоложения кожи и волос ― в том числе терапию введением собственной плазмы (в плазмолифтинг и истинное PRP), биоревитализацию, коллагеновую терапию, плацентарную терапию, контурную пластику, нитевой лифтинг ипоследние мировые косметологические тренды.</p>
          </div>

        </div>
      </div>

      <div class="text-center">
        <a href="#" class="btn methods__show-all">Показать еще</a>
      </div>

    </div>
  </section>

<?php $teams = get_any_post( 'team', -1 );
if ($teams->have_posts()): ?>
  <section class="s-teams" id="teams" style="background-image: url('<?php echo THEME_URL; ?>/images/content/team-bg.jpg');">
    <div class="container">

      <div class="section-header">
        <h2 class="section-title">Кто работает в области биохакинга <br>в Mitra Clinic</h2>
      </div>

      <div class="teams">
        <?php while ($teams->have_posts()): $teams->the_post(); ?>
          <div class="teams__item">
            <div class="teams__img">
              <?php the_post_thumbnail( 'team' ); ?>
            </div>

            <h3 class="teams__title"><?php the_title(); ?></h3>
            <p class="teams__experience"><?php the_field( 'experience' ); ?></p>

            <div class="teams__content" data-simplebar>
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>

    </div>
  </section>
<?php endif; ?>

  <section class="trust">
    <div class="container">

      <div class="section-header">
        <h2 class="section-title">Почему нам доверяют?</h2>
      </div>

      <div class="trust__wrap">

        <div class="trust__content triangle-decor">
          <p>8 из 10 наших клиентов приходят по рекомендации родных, друзей, коллег</p>
          <p><span>Mitra Clinic ― первая частная клиника в Москве где не просто лечат симптомы, а выявляют причины заболеваний</span></p>
          <p class="text-sm">Mitra Clinic, <a href="#">лицензия №ЛО-77-01-016597</a> <br>от 30 августа 2018 года</p>
        </div>

        <img src="<?php echo THEME_URL; ?>/images/content/map.png" alt="Карта">
      </div>

    </div>
  </section>

<?php $news = get_any_post( 'news', -1 );
if ($news->have_posts()): ?>

<section class="news" style="background-image: url('<?php echo THEME_URL; ?>/images/content/news-bg.jpg');">
  <div class="container">

    <div class="section-top">

      <div class="section-header">
        <h2 class="section-title">Новости</h2>
      </div>

      <div class="slider-controls">
        <div class="swiper-button-prev">
			    <?php ith_the_icon( 'arrow-left' ); ?>
        </div>
        <div class="swiper-button-next">
			    <?php ith_the_icon( 'arrow-right' ); ?>
        </div>
      </div>

    </div>

    <div class="news-slider swiper-container">
      <div class="swiper-wrapper">
        <?php while ($news->have_posts()): $news->the_post(); ?>
          <div class="news-slider__item swiper-slide">
            <a href="<?php the_post_thumbnail_url( 'full' ); ?>" data-fancybox="news">
              <?php the_post_thumbnail( 'full' ); ?>
            </a>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>

  </div>
</section>
<?php endif; ?>

  <section class="advantages" style="background-image: url('<?php echo THEME_URL; ?>/images/content/advantages-bg.jpg');">
    <div class="container">

      <div class="row">
        <div class="col advantages__left">

          <div class="section-header">
            <h2 class="section-title">Биохакинг в Mitra Clinic выбрали сотни пациентов, потому что…</h2>
          </div>

          <div class="advantages__row">

            <div class="advantages-card">
              <div class="advantages-card__icon">
                <?php ith_the_icon( 'check' ); ?>
              </div>
              <p>…Все диагностические обследования и консультации можно получить в одном месте, у специалистов с высочайшим уровнем квалификации</p>
            </div>

            <div class="advantages-card">
              <div class="advantages-card__icon">
                <?php ith_the_icon( 'check' ); ?>
              </div>
              <p>…Биохакинг не имеет противопоказаний, являясь физиологичным методом тонкой «настройки» организма на здоровье и долголетие</p>
            </div>

          </div><!-- /.advantages__row -->

        </div>

        <div class="col advantages__right">
          <div class="advantages__row">

            <div class="advantages-card">
              <div class="advantages-card__icon">
				        <?php ith_the_icon( 'check' ); ?>
              </div>
              <p>…При минимальных вмешательствах в организм методы биохакинга позволяют создать целостную «карту здоровья и рисков» для каждого конкретного пациента</p>
            </div>

            <div class="advantages-card">
              <div class="advantages-card__icon">
				        <?php ith_the_icon( 'check' ); ?>
              </div>
              <p>…Затраты на проведение биохакинга окупаются многократно за счет снижения необходимого количества медикаментов и сокращения поводов для обращения к врачам</p>
            </div>

            <div class="advantages-card">
              <div class="advantages-card__icon">
				        <?php ith_the_icon( 'check' ); ?>
              </div>
              <p>…Все результаты исследований остаются у пациента в виде информативного и стильно оформленного журнала-буклета</p>
            </div>

          </div><!-- /.advantages__row -->
        </div>

      </div>





    </div>
  </section>

  <section class="right-way" style="background-image: url('<?php echo THEME_URL; ?>/images/content/right-way-bg.jpg');">
    <div class="container">

      <div class="row">
        <div class="col">

          <div class="section-header">
            <h2 class="section-title">Биохакинг ― <br>ваш верный путь <br>к успешной, здоровой, активной <br>и долгой жизни!</h2>
          </div>

        </div>

        <div class="col">
          <div class="section-form-wrap right-way__form-wrap">
            <h3>Запишитесь на бесплатную консультацию</h3>
		        <?php echo do_shortcode( '[contact-form-7 id="16" title="Запишитесь на бесплатную консультацию"]' ); ?>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php get_footer();
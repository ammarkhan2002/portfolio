<!DOCTYPE html>
<html lang="en">
<?php
$title=$_GET['title'];
$home_section ='<section class="home section" id="home">
<div class="home_container container grid">
  <div class="home__data">
    <span class="home__greeting">Hello,im</span>
    <h1 class="home__name">Ammar Khan</h1>
    <h3 class="home__education">Frontend Developer</h3>
    <div class="home__buttons">
      <a download="" href="" class="button button--ghost">
        Download CV
      </a>
      <a href="#about" class="button">About me</a>
    </div>
  </div>

  <div class="home__handle">
    <img src="ammarkhan.jpg" alt="" class="home__img" />
  </div>

  <div class="home__social">
    <a href="">
      <i class="bx bxl-linkedin-square"></i>
    </a>
    <a href="" class="home_social-link">
      <i class="bx bxl-facebook-square"></i>
    </a>
    <a href="https://www.instagram.com/" class="home_social-link">
      <i class="bx bxl-instagram"></i>
    </a>
  </div>

  <a href="#about" class="home__scrool">
    <i class="bx bx-mouse home__scrool-icon"></i>
    <span class="home__scrool-name">Scrool Down</span>
  </a>
</div>
</section>';
$home_about ='<section class="about section" id="about">
<span class="section__subtitle">My Intro</span>
<h2 class="section__title">About Me</h2>

<div class="about__container container grid">
  <img src="ammarkhan.jpg" alt="" class="about__img" />

  <div class="about__data">
    <div class="about__info">
      <div class="about__box">
        <i class="bx bx-award about__icon"></i>
        <h3 class="about__title">Experience</h3>
        <span class="about__subtitle">3 Years Working</span>
      </div>

      <div class="about__box">
        <i class="bx bx-briefcase-alt about__icon"></i>
        <h3 class="about__title">Completed</h3>
        <span class="about__subtitle">12+ Projects</span>
      </div>

      <div class="about__box">
        <i class="bx bx-support about__icon"></i>
        <h3 class="about__title">Support</h3>
        <span class="about__subtitle">Online 24/7</span>
      </div>
    </div>
    <p class="about__description">
      Frontend developer, I create web pages with UI / UX user
      interface, I have years of experience and many clients are happy
      with the project carried out.
    </p>

    <a href="#contact" class="button">Contact Me</a>
  </div>
</div>
</section>';
$home_skills ='<section class="skills section" id="skills">
<span class="section__subtitle">My Abilities</span>
<h2 class="section__title">My Experience</h2>

<div class="skills__container container grid">
  <div class="skills___content">
    <h3 class="skills__title">Frontend Developer</h3>

    <div class="skills__box">
      <div class="skills__group">
        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">HTML</h3>
            <span class="skills__level">Basic</span>
          </div>
        </div>

        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">CSS</h3>
            <span class="skills__level">Adcanced</span>
          </div>
        </div>

        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">JavaScript</h3>
            <span class="skills__level">Intermediate</span>
          </div>
        </div>
      </div>

      <div class="skills__group">
        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">HTML-5</h3>
            <span class="skills__level">Basic</span>
          </div>
        </div>

        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">CSS-3</h3>
            <span class="skills__level">Adcanced</span>
          </div>
        </div>

        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">TypeScript</h3>
            <span class="skills__level">Intermediate</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="skills___content">
    <h3 class="skills__title">Backend Developer</h3>

    <div class="skills__box">
      <div class="skills__group">
        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">Ruby</h3>
            <span class="skills__level">Basic</span>
          </div>
        </div>

        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">NodeJS</h3>
            <span class="skills__level">Adcanced</span>
          </div>
        </div>

        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">Python</h3>
            <span class="skills__level">Intermediate</span>
          </div>
        </div>
      </div>

      <div class="skills__group">
        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">C#</h3>
            <span class="skills__level">Basic</span>
          </div>
        </div>

        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">PHP</h3>
            <span class="skills__level">Adcanced</span>
          </div>
        </div>

        <div class="skills__data">
          <i class="bx bx-badge-check"></i>

          <div>
            <h3 class="skills__name">Java</h3>
            <span class="skills__level">Intermediate</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>';
$home_services ='<section class="services section">
<span class="section__subtitle">My Services</span>
<h2 class="section__title">What I Offer</h2>

<div class="services__container container grid">
  <div class="sevices__card">
    <h3 class="services__title">Product<br />Designer</h3>

    <span class="services__button">
      See more <i class="bx bx-right-arrow-alt services__icon"> </i>
    </span>

    <div class="services__model">
      <div class="services__modal-contant">
        <i class="bx bx-x services__modal-close"></i>

        <h3 class="services__model-price">Product Designer</h3>
        <p class="services__model-discrip">
          Services more than 3 years of experience. providing quality
          work to clients and companies.
        </p>

        <ul class="services__model-list">
          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I develop the user interface.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">Web page Development.</p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I create ux element interactions.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I position your company brand.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              Design and mokeups of products for companies.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="sevices__card">
    <h3 class="services__title">UX / UI <br />Designer</h3>

    <span class="services__button">
      See more <i class="bx bx-right-arrow-alt services__icon"></i>
    </span>

    <div class="services__model">
      <div class="services__modal-contant">
        <i class="bx bx-x services__modal-close"></i>

        <h3 class="services__model-price">UX / UI Designer</h3>
        <p class="services__model-discrip">
          Services more than 3 years of experience. providing quality
          work to clients and companies.
        </p>

        <ul class="services__model-list">
          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I develop the user interface.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">Web page Development.</p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I create ux element interactions.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I position your company brand.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              Design and mokeups of products for companies.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="sevices__card">
    <h3 class="services__title">Visual <br />Designer</h3>

    <span class="services__button">
      See more <i class="bx bx-right-arrow-alt services__icon"></i>
    </span>

    <div class="services__model">
      <div class="services__modal-contant">
        <i class="bx bx-x services__modal-close"></i>

        <h3 class="services__model-price">Visual Designer</h3>
        <p class="services__model-discrip">
          Services more than 3 years of experience. providing quality
          work to clients and companies.
        </p>

        <ul class="services__model-list">
          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I develop the user interface.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">Web page Development.</p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I create ux element interactions.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              I position your company brand.
            </p>
          </li>

          <li class="services__model-item">
            <i class="bx bx-check services__model-icon"></i>
            <p class="services__model-info">
              Design and mokeups of products for companies.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>';
$home_work ='<section class="work section" id="work">
<span class="section__subtitle">My Portfolio</span>
<h2 class="section__title">React Works</h2>

<div class="work__filters">
  <span class="work__item active-work" data-filter="all">All</span>
  <span class="work__item" data-filter=".web">Web</span>
  <span class="work__item" data-filter=".movil">Movil</span>
  <span class="work__item" data-filter=".design">Design</span>
</div>

<div class="work__container container grid">
  <div class="work__card mix web">
    <img src="demo2.jpg" alt="" class="work__img" />

    <h3 class="work__title">Web Design</h3>

    <a href="https://imran-baitham.github.io/home-Page/index.html" class="work__button">
      Demo <i class="bx bx-right-arrow-alt work__icon"></i>
    </a>
  </div>

  <div class="work__card mix movil">
    <img src="demo3.jpg" alt="" class="work__img" />

    <h3 class="work__title">App Movil</h3>

    <a href="https://react-js-sing-up-log-in-form-2n61vn7jn-imran-baitham.vercel.app/" class="work__button">
      Demo <i class="bx bx-right-arrow-alt work__icon"></i>
    </a>
  </div>

  <div class="work__card mix design">
    <img src="demo1.jpg" alt="" class="work__img" />

    <h3 class="work__title">Web Product</h3>

    <a href="https://imran-baitham.github.io/home-Page/index.html" class="work__button">
      Demo <i class="bx bx-right-arrow-alt work__icon"></i>
    </a>
  </div>

  <div class="work__card mix web">
    <img src="demo4.jpg" alt="" class="work__img" />

    <h3 class="work__title">App Project</h3>

    <a href="https://imran-baitham.github.io/instagram/" class="work__button">
      Demo <i class="bx bx-right-arrow-alt work__icon"></i>
    </a>
  </div>

  <div class="work__card mix movil">
    <img src="demo2.jpg" alt="" class="work__img" />

    <h3 class="work__title">Web Templet</h3>

    <a href="https://imran-baitham.github.io/Imran___baitham___/imran_baitham.html" class="work__button">
      Demo <i class="bx bx-right-arrow-alt work__icon"></i>
    </a>
  </div>
</div>
</section>';
$home_testimonials ='<section class="testimonial section">
<span class="section__subtitle">My clients Say</span>
<h2 class="section__title">Testimonial</h2>

<div class="testimonial__container container swiper">
  <div class="swiper-wrapper">
    <div class="testimonial__card swiper-slide">
      <img src="logo.png" alt="" class="testimonial__img" />

      <h3 class="testimonial__name">Jhon Doe</h3>
      <p class="testimonial__descrip">
        A really good job,all aspects of the project were followed step
        by step and with good results.
      </p>
    </div>

    <div class="testimonial__card swiper-slide">
      <img src="./assets/img/testimonial2.png" alt="" class="testimonial__img" />

      <h3 class="testimonial__name">Paulo Vusy</h3>
      <p class="testimonial__descrip">
        A really good job,all aspects of the project were followed step
        by step and with good results.
      </p>
    </div>

    <div class="testimonial__card swiper-slide">
      <img src="./assets/img/testimonial3.png" alt="" class="testimonial__img" />

      <h3 class="testimonial__name">Sara Cill</h3>
      <p class="testimonial__descrip">
        A really good job,all aspects of the project were followed step
        by step and with good results.
      </p>
    </div>
  </div>
  <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div> -->
  <div class="swiper-pagination"></div>
</div>
</section>';
$home_contact ='    <section class="contact section" id="contact">
<span class="section__subtitle">Get in touch</span>
<h2 class="section__title">Contact Me</h2>

<div class="contact__container container grid">
  <div class="contact__content">
    <h3 class="contact__title">Talk to me</h3>

    <div class="contact__info">
      <div class="contact__card">
        <i class="bx bx-mail-send contact__card-icon"></i>
        <h3 class="contact__card-title">Email</h3>
        <span class="contact__card-data">ammakhan9200@gmail.com</span>

        <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="contact_button">
          Write me
          <i class="bx bx-right-arrow-alt contact__button-icon"></i>
        </a>
      </div>
    </div>

    <div class="contact__info">
      <div class="contact__card">
        <i class="bx bxl-whatsapp contact__card-icon"></i>
        <h3 class="contact__card-title">Whatapp</h3>
        <span class="contact__card-data">7897907457</span>

        <a href="https://www.whatsapp.com/" target="_blank" class="contact_button">
          Write me
          <i class="bx bx-right-arrow-alt contact__button-icon"></i>
        </a>
      </div>
    </div>

    <div class="contact__info">
      <div class="contact__card">
        <i class="bx bxl-messenger contact__card-icon"></i>
        <h3 class="contact__card-title">Messanger</h3>
        <span class="contact__card-data">izaad_khan</span>

        <a href="https://www.facebook.com/messages/t/100022735011341" target="_blank" class="contact_button">
          Write me
          <i class="bx bx-right-arrow-alt contact__button-icon"></i>
        </a>
      </div>
    </div>
  </div>

  <div class="contact__content">
    <h3 class="contact__title">Write me your project</h3>

    <form action="" class="contact__form">
      <div class="contact__form-div">
        <label for="" class="contact__form-tag">Names</label>
        <input type="text" class="contact__form-input" placeholder="Insert your name" />
      </div>

      <div class="contact__form-div">
        <label for="" class="contact__form-tag">Mail</label>
        <input type="text" class="contact__form-input" placeholder="Insert your email" />
      </div>

      <div class="contact__form-div contact__form-area">
        <label for="" class="contact__form-tag">Project</label>
        <textarea class="contact__form-input" name="" cols="30" rows="10"
          placeholder="Write your project"></textarea>
      </div>

      <button class="button">Sent Message</button>
    </form>
  </div>
</div>
</section>';
$home_color ='<section>
<div class="theme__model">
  <div class="theme__modal-contant">
    <i class="bx bx-x theme_close"></i>

    <h3 class="theme__model-price">Choice your Color theme</h3>

    <p class="theme__model-discrip">
      Tap to change the color accent of theme
    </p>

    <ul class="theme__model-list">
      <li class="theme__model-item theme__buttons" data-color="200" style="background-color: #61b2db">
        <i class="bx bx-heart theme__model-icon"></i>
      </li>

      <li class="theme__model-item theme__buttons" data-color="356" style="background-color: #db6169">
        <i class="bx bx-heart theme__model-icon"></i>
      </li>

      <li class="theme__model-item theme__buttons" data-color="150" style="background-color: #65db9e">
        <i class="bx bx-heart theme__model-icon"></i>
      </li>

      <li class="theme__model-item theme__buttons" data-color="250" style="background-color: #7561db">
        <i class="bx bx-heart theme__model-icon"></i>
      </li>

      <li class="theme__model-item theme__buttons" data-color="100" style="background-color: #8adb61">
        <i class="bx bx-heart theme__model-icon"></i>
      </li>

      <li class="theme__model-item theme__buttons" data-color="420" style="background-color: #dbdb61">
        <i class="bx bx-heart theme__model-icon"></i>
      </li>
    </ul>

    <button class="button btn" onclick="cloaseColors()">AWESOME</button>
  </div>
</div>
</section>';
$home_footer ='<footer class="footer">
<div class="footer__container container">
  <h1 class="footer__title">StickyWeb</h1>
  <p class="footer__disp">Made with ❤️ by Ammar Khan</p>

  <div class="footer__list">
    <div class="footer__link">
      Powered by the best Mobile Website Developer on Envato Market. Elite
      Quality. Elite Products.
    </div>
  </div>

  <div class="footer__social">
    <a href="" class="footer__social-link"
      style="color: #3b5998 !important">
      <!-- style="background-color: #3b5998 !important" -->
      <i class="bx bxl-facebook"></i>
    </a>
    <a href="https://www.instagram.com/" class="footer__social-link"
      style="color: #e1306c !important">
      <!-- style="background-color: #e1306c !important" -->
      <i class="bx bxl-instagram"></i>
    </a>
    <a href="" target="_black" class="footer__social-link" style="color: #27ae60 !important">
      <!-- style="background-color: #27ae60 !important" -->
      <i class="bx bxs-phone"></i>
    </a>
    <a href="" target="_black" class="footer__social-link" style="color: #833ab4 !important">
      <!-- style="background-color: #833ab4 !important" -->
      <i class="bx bx-share-alt"></i>
    </a>
    <a href="#home" class="footer__social-link" style="color: #656d78 !important">
      <!-- style="background-color: #656d78 !important" -->
      <i class="bx bxs-chevron-up"></i>
    </a>
  </div>
  <hr class="underline" />
  <span class="footer__copy">
    Copyright © Enabled 2024. All Rights Reserved.
  </span>
  <hr class="underline" />

  <ul class="footer__list-policy">
    <li>
      <a href="" class="footer__link">Privacy Policy</a>
    </li>
    <span class="leftline">|</span>
    <li>
      <a href="" class="footer__link">Terms and Conditions</a>
    </li>
    <span class="leftline">|</span>
    <li>
      <a href="#home" class="footer__link"> Back to Top</a>
    </li>
  </ul>
</div>
</footer>';
?>

<?php include('head.php');?>

<body>
  <?php include('header.php')?>

  <!--=============== MAIN ===============-->
  <main class="main">
    <!--=============== HOME ===============-->
    <?php echo $home_section;?>

    <!--=============== ABOUT ===============-->
    <?php echo $home_about;?>

    <!--=============== SKILLS ===============-->
    <?php echo $home_skills;?>

    <!--=============== SERVICES ===============-->
    <?php echo $home_services;?>

    <!--=============== WORK ===============-->
    <?php echo $home_work;?>

    <!--=============== TESTIMONIALS ===============-->
    <?php echo $home_testimonials;?>

    <!--=============== CONTACT ===============-->
   <?php echo $home_contact;?>

    <!--=============== THEME COLOR ===============-->
    <?php echo $home_color;?>

    <!--=============== SIDE NAVAGATION BAR ===============-->
    <!-- <section>
        <div class="theme__model">
          <div class="theme__modal-contant">
            <i class="bx bx-x theme_close"></i>

            <h3 class="theme__model-price">Choice your Color theme</h3>

            <p class="theme__model-discrip">
              Tap to change the color accent of theme
            </p>

            <ul class="theme__model-list">
              <li
                class="theme__model-item theme__buttons"
                data-color="100"
                style="background-color: yellowgreen"
              >
                <i class="bx bx-heart theme__model-icon"></i>
              </li>

              <li
                class="theme__model-item theme__buttons"
                data-color="420"
                style="background-color: yellow"
              >
                <i class="bx bx-heart theme__model-icon"></i>
              </li>
            </ul>

            <button class="button btn" onclick="cloaseColors()">AWESOME</button>
          </div>
        </div>
      </section> -->
  </main>

  <!--=============== FOOTER ===============-->
  <?php echo $home_footer;?>

  <!--=============== SCROLLREVEAL ===============-->
  <script src="./assets/js/scrollreveal.min.js"></script>

  <!--=============== SWIPER JS ===============-->
  <script src="./assets/js/swiper-bundle.min.js"></script>

  <!--=============== MIXITUP FILTER ===============-->
  <script src="./assets/js/mixitup.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="portfiolio5.js"></script>
</body>

</html>
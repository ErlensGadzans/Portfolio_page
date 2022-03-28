<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap");
  </style>
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/3aa1bf0feb.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <title>Erlens.me</title>
</head>

<body>
  <!-- SROLL UP BTN-->
  <div class="scroll_btn">
    <i class="fas fa-angle-up"></i>
  </div>

  <!--NAVBAR-->
  <nav class="navbar">
    <div class="max_width">
      <div class="logo">
        <a href="#">Erlens<span>.me</span></a>
      </div>
      <ul class="menu">
        <li><a href class="aaa">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="menu_btn" onclick="responiveMenu()">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  <!--HOME SECTION-->
  <section class="scroll_to home" id="home">
    <div class="max_width">
      <div class="home_content">
        <div class="text_1">Hello, My name is</div>
        <div class="text_2">Erlens</div>
        <div class="text_3">I'm a<span id="animated_text"></span></div>
        <a href="mailto:erlens.gadzans@gmail.com" class="button">Contact me</a>
      </div>

      <?php if (isset($_GET['success'])) {
        echo
        '<div class="modal fade" id="centralModalMd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background:rgba(1,200,80,255)">
              <button type="button" class="close" id="closeButton" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="text-center mt-4 mb-4">
              <h5 style="color:rgba(1,200,80,255)">Thank you for your message.</h5>
                <h5 style="color:black">I will reply as soon as possible.</h5>
              </div>
            </div>';
        "<script type='text/javascript'>
            $(document).ready(function() {
              $('#centralModalMd').modal('show');
            });
 </script>";
        '<script>
    $("#centralModalMd").on("hidden.bs.modal", function() {
      window.location.href="http://erlens.me";
    });
  </script>';
      }
      ?>
    </div>
  </section>

  <!--ABOUT SECTION-->
  <section class="about" id="about">
    <div class="max_width">
      <h2 class="title">About me</h2>
      <div class="about_content">
        <div class="column left">
          <img src="./img/me.jpg" alt="" />
        </div>
        <div class="column right">
          <div class="text">
            I'm Erlens and I'm a<span> Software Developer</span>
          </div>
          <p>
            I am passionate about the things that I do. I have a steady source
            of motivation that drives me to do my best and I constantly
            looking for new opportunities to expand my knowledge horizon,
            especially in different aspects of information technology. I
            graduated from
            <a href="https://epicode.com/" target="_blank">Strive School</a>
            in 2021 and
            <a href="https://rigacoding.lv/" target="_blank">Riga Coding School</a>
            in 2022 and now I am strongly confident of being exactly in the
            right place. I've become professional in excellent
            relation-building skills with the successful implementation of
            different projects.
          </p>
          <div class="buttons">
            <a href="./files/cv_erlens.pdf" target="_blank" class="icon fa-solid fa-folder-user button_red_transparent">CV
            </a>

            <a href="https://strive.school/certificate/607731999566ba00173d7dbe" target="_blank" class="icon fa-solid fa-graduation-cap button_red_transparent">2021</a>
            <a href="#" class="icon fa-solid fa-graduation-cap button_red_transparent">2022</a>
            <a href="https://github.com/ErlensGadzans" target="_blank" class="icon fa-brands fa-github button_red_transparent"></a>
            <a href="https://www.linkedin.com/in/erlensgadzans/" target="_blank" class="icon fa-brands fa-linkedin button_red_transparent"></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--SKILLS SECTION-->
  <section class="skills" id="skills">
    <div class="max_width">
      <h2 class="title">My skills</h2>
      <div class="skills_content">
        <div class="column left">
          <div class="text">My <span>skills</span></div>
          <p>
            Since my start of study and practice as a developer almost two and half years ago, I have learned to work with different programming languages and frameworks.
            <br />
            I am able to create responsive websites, which are easy to use and built according best practices.
            Mostly I am working with <span>HTML</span>, <span>CSS</span>, and <span>JS</span>.
            Recently I learned <span>PHP</span>. In the section "Projects", you may see a couple of projects, which are made on <span>React JS</span> (if Herokku sleeps, then please reload the webpage twice).
            <br />
            I am familiar with <span>non-relational</span> databases, and in addition I get use how to work with <span>relational databases</span> as well.
          </p>
        </div>

        <div class="column right">
          <div class="bars">
            <div class="info">
              <span>HTML</span>
              <span>80%</span>
            </div>
            <div class="line html"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>CSS</span>
              <span>75%</span>
            </div>
            <div class="line css"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>JavaScript</span>
              <span>60%</span>
            </div>
            <div class="line javascript"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>React</span>
              <span>55%</span>
            </div>
            <div class="line react"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>NoSQL</span>
              <span>50%</span>
            </div>
            <div class="line mysql"></div>
          </div>
          <div class="bars">
            <div class="info">
              <span>PHP</span>
              <span>15%</span>
            </div>
            <div class="line php"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--PORTFOLIO SECTION-->
  <section class="projects" id="projects">
    <div class="max_width">
      <h2 class="title">Projects</h2>

      <div class="carousel">
        <div class="rowcards">
          <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel" data-interval="6000">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <!--FIRST THREE SLIDES-->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="rowcards">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card">
                      <div class="box">
                        <div class="img">
                          <a href="https://weather-eg.herokuapp.com/" target="_blank">
                            <img src="./img/weatherapp.jpg" />
                          </a>
                        </div>
                        <div class="text">
                          <h3>Weather App</h3>
                          <div class="icons">
                            <a href="https://weather-eg.herokuapp.com/" target="_blank" class="fa-solid fa-arrow-up-right-from-square"></a>
                            <a href="https://github.com/ErlensGadzans/weatherApp" target="_blank" class="fa-solid fa-code"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card">
                      <div class="single_box box">
                        <div class="img_area">
                          <a href="https://tictactoegameerlens.000webhostapp.com/" target="_blank">
                            <img src="./img/tictactoe.jpg" />
                          </a>
                        </div>
                        <div class="text">
                          <h3>Tic Tac Toe</h3>
                          <div class="icons">
                            <a href="https://tictactoegameerlens.000webhostapp.com/" target="_blank" class="fa-solid fa-arrow-up-right-from-square"></a>
                            <a href="https://github.com/ErlensGadzans/tic_tac_toe" target="_blank" class="fa-solid fa-code"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card">
                      <div class="single_box box">
                        <div class="img_area">
                          <a href="https://covid19-healthdata.herokuapp.com/" target="_blank">
                            <img src="./img/covid_tracker.jpg" />
                          </a>
                        </div>
                        <div class="text">
                          <h3>Covid tracker</h3>
                          <div class="icons">
                            <a href="https://covid19-healthdata.herokuapp.com/" target="_blank" class="fa-solid fa-arrow-up-right-from-square"></a>
                            <a href="https://github.com/ErlensGadzans/Covid-19-tracker-FE" target="_blank" class="fa-solid fa-code"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- SECOND THREE SLIDES -->
              <div class="carousel-item">
                <div class="rowcards">
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card">
                      <div class="box">
                        <div class="img">
                          <a href="https://weather-eg.herokuapp.com/" target="_blank">
                            <img src="./img/weatherapp.jpg" />
                          </a>
                        </div>
                        <div class="text">
                          <h3>Weather App</h3>
                          <div class="icons">
                            <a href="https://weather-eg.herokuapp.com/" target="_blank" class="fa-solid fa-arrow-up-right-from-square"></a>
                            <a href="https://github.com/ErlensGadzans/weatherApp" target="_blank" class="fa-solid fa-code"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card">
                      <div class="single_box box">
                        <div class="img_area">
                          <a href="https://covid19-healthdata.herokuapp.com/" target="_blank">
                            <img src="./img/covid_tracker.jpg" />
                          </a>
                        </div>
                        <div class="text">
                          <h3>Covid tracker</h3>
                          <div class="icons">
                            <a href="https://covid19-healthdata.herokuapp.com/" target="_blank" class="fa-solid fa-arrow-up-right-from-square"></a>
                            <a href="https://github.com/ErlensGadzans/Covid-19-tracker-FE" target="_blank" class="fa-solid fa-code"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="card">
                      <div class="single_box box">
                        <div class="img_area">
                          <a href="https://tictactoegameerlens.000webhostapp.com/" target="_blank">
                            <img src="./img/tictactoe.jpg" />
                          </a>
                        </div>
                        <div class="text">
                          <h3>Tic Tac Toe</h3>
                          <div class="icons">
                            <a href="https://tictactoegameerlens.000webhostapp.com/" target="_blank" class="fa-solid fa-arrow-up-right-from-square"></a>
                            <a href="https://github.com/ErlensGadzans/tic_tac_toe" target="_blank" class="fa-solid fa-code"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--CONTACT FORM SECTION-->
  <section class="contact" id="contact">
    <div class="max_width">
      <h2 class="title">Contact</h2>
      <div class="contact_content">

        <!--MAP SECTION-->
        <div class="column left">
          <div class="text">Located in <span>Riga</span></div>
          <div id="map"></div>
        </div>

        <!--CONTACT FORM SECTION-->
        <div class="column right">
          <div class="text">Message <span>me</span></div>
          <form action="contactForm.php" method="post" class="form">
            <div class="fields">
              <div class="field name">
                <input type="text" name="name" placeholder="Name" required />
              </div>
              <div class="field email">
                <input type="email" name="email" placeholder="Email" required />
              </div>
            </div>
            <div class="field subject">
              <input type="text" name="subject" placeholder="Subject" required />
            </div>
            <div class="field textarea">
              <textarea cols="30" rows="10" name="message" placeholder="Message..." required></textarea>
            </div>
            <div class="button_area">
              <button type="submit" class="btn" name="btn_send">Send message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--FOOTER SECTION-->
  <footer class="footer" id="footer">
    <div class="max_width">
      <div class="footer_content">
        <div class="icons">
          <a href="mailto:erlens.gadzans@gmail.com" class="fa-solid fa-envelope"></a>
          <a href="https://api.whatsapp.com/send?phone=+37122840901" class="fa-brands fa-whatsapp"></a>
          <a href="https://github.com/ErlensGadzans" target="_blank" class="icon fa-brands fa-github"></a>
          <a href="https://www.linkedin.com/in/erlensgadzans/" target="_blank" class="icon fa-brands fa-linkedin"></a>
        </div>
        <div class="footer_menu">
          <a href="#">Home</a>
          <a href="#about" class="aaa">About</a>
          <a href="#skills" class="aaa">Skills</a>
          <a href="#projects" class="aaa">Projects</a>
          <a href="#contact" class="aaa">Contact</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#centralModalMd').modal('show');
    });
  </script>
  <script>
    $("#centralModalMd").on("hidden.bs.modal", function() {
      window.location.href = "http://erlens.me";
    });
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>


</body>

</html>
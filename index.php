<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/icons/Uchiha.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Main page</title>
</head>

<body>
  <!-- Навигация -->
    <nav class="navbar navbar-expand-lg navbar-light" style="box-shadow: 0 1px 10px 5px rgba(255, 0, 0, 0.75);">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="/icons/Uchiha.png" alt="Uchiha" width="40" height="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Clan people</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/investors/investors.html">Investors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/exit.php">EXIT</a>
              </li>
            </ul>
<!-- навигация и модельное окно -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">  
                <a href=""></a>
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-sing"><img src="/imgs/user.png" alt="user" width="25" height="25"></a>
                <div class="modal fade" id="modal-sing" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog " >
                    <div class="modal-content">
                      <div class="modal-header bg-dark text-white">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      </div>
                      <!-- forma -->
                      <article class="containerr">
                        <div class="block">

                          <section class="block__item block-item">
                            <h2 class="block-item__title" style="color: #000">Do you have an account?</h2>
                            <button class="block-item__btn signin-btn">Sign in</button>
                          </section>
                          <section class="block__item block-item">
                            <h2 class="block-item__title">I don't have an account</h2>
                            <button class="block-item__btn signup-btn ">Registration</button>
                          </section>

                        </div>

                        <!--  forma входа-->
                        <div class="form-box">
                          <form action="Sign.php" class="form form_signin" method="post">
                            <h3 class="form__title">sign in</h3>
                            <p>
                              <input type="text" class="form__input" name="name" placeholder="name">
                            </p>
                            <p>
                              <input type="password" class="form__input" name="password" placeholder="password">
                            </p>
                            <p>
                              <button class="form__btn send-button">sign in</button>
                            </p>
                            <p>
                              <a href="forgot/forgot.html" class="form__fogot">forgot password</a>
                            </p>
                          </form>

                          <!-- Block регистрация -->

                          <form action="api.php" class="form form_signup" method="post">
                            <h3 class="form__title">Registration</h3>

                            <p>
                              <input type="text" class="form__input" name="name" placeholder="name">
                            </p>
                            <p>
                              <input type="email" class="form__input" name="Email" placeholder="Email">
                            </p>
                            <p>
                              <input type="password" class="form__input" name="password" placeholder="password">
                            </p>
                            <p>
                              <button class="form__btn form__btn_signup send-button">Registration</button>
                            </p>

                          </form>
                        </div>
                      </article>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </li>
                

                  <li class="nav-item">  
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-cart"><img src="/imgs/shopping-cart.png" alt="cart" width="25" height="25"></a>
                    <div class="modal fade" id="modal-cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl" >
                        <div class="modal-content">
                          <div class="modal-header bg-dark text-white">
                            <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td><img src="/Heroes/Fugaku.jpg" alt="Fugaku" class="img-cart"></td>
                                  <td><a href="#">Fugaku</a></td>
                                  <td>$340</td>
                                  <td>1</td>
                                </tr>
                                <tr>
                                  <td><img src="/Heroes/Inabi.webp" alt="Inabi" class="img-cart"></td>
                                  <td><a href="#">Inabi</a></td>
                                  <td>$320</td>
                                  <td>2</td>
                                </tr>
                                <tr>
                                  <td><img src="/Heroes/Itachi.png" alt="Itachi" class="img-cart"></td>
                                  <td><a href="#">Itachi</a></td>
                                  <td>$1000</td>
                                  <td>3</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-dark">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </li>
                <li class="nav-item">  
                  <a class="nav-link" href="#"><img src="/imgs/search.png" alt="search" width="25" height="25"></a>
              </li>
              </ul>
          </div>
        </div>
      </nav>
      <!-- <section class="main-content"> -->
        <!-- <div class="container"> -->
          <div class="row videoS">
            <img src="/imgs/Uchiha.jpg" alt="Uchiha">
          </div>
        <!-- </div> -->
      <!-- </section> -->
<!-- Карты героев/наямников -->
<!-- PHP -->
   <?php
   if ($_COOKIE['user'] == '') :       
  ?>
  <section class="section "style="background: url(/imgs/noRegestr.jpg) no-repeat center center fixed;">
    <div class="container">
      <div class="row">
        <div><h4>You need to register to <br> see all the info<h4></div>
      </div>
    </div>
  </section>
  <?php else:?>
    !-- <section class="main-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/izumi.jpg" alt="Izumi"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Izumi</a></h4>
                  <p>Изуми Учиха (яп. うちはイズミ, Учиха Изуми) была куноичи из клана Учиха Деревни Скрытого Листа. Она с детства стала подругой Итачи Учиха и была влюблена в него.</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$400</small> $320
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Fugaku.jpg" alt="Fugaku"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Fugaku</a></h4>
                  <p>
                    Фугаку Учиха (яп. うちはフガク, Утиха Фугаку) был джоунином Деревни Скрытого Листа, главой клана Учиха и по совместительству главой Полиции Конохи. Фугаку был мужчиной среднего возраста с длинными чёрными волосами, доходящими</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$322</small> $300
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Inabi.webp" alt="Inabi"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Inabi</a></h4>
                  <p>Инаби Учиха (яп. うちはイナビ, Учиха Инаби) был офицером Военной Полиции Конохи и членом клана Учиха. У Инаби были длинные чёрные волосы и тёмные глаза. Он носил стандартную одежду из клана</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$250</small> $200
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Itachi.png" alt="Itachi"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Itachi</a></h4>
                  <p>Итачи Учиха (яп. うちは イタチ, У́чиха Ита́чи) — шиноби отступник, бывший член Анбу, был гением клана Учиха из Скрытого Листа. В молодости Итачи стал международным преступником, уничтожив весь свой клан, оставив в живых лишь своего младшего брата Саске. Впоследствии Итачи присоединился к международной преступной организации, Акацуки, деятельность которой порой приводила его к конфликтам с ниндзя Листа, включая Саске, стремящегося отомстить за свой клан. После смерти Итачи, выяснилось, что его мотивы были куда более сложными, чем казалось изначально — он верил, что все его действия были направлены на благо Саске и Конохи, и он оставался предан Скрытому Листу до самого конца.</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$1100</small> $1000
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Izuna.jpg" alt="Izuna"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Izuna</a></h4>
                  <p>Изуна Учиха (яп. うちはイズナ, Учиха Идзуна) был шиноби из клана Учиха. Он, вместе со своим братом Мадарой, стали известны как двое сильнейших члена клана своего времени.</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$600</small> $550
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Kagami.jpg" alt="Kagami"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Kagami</a></h4>
                  <p>Кагами Учиха (яп. うちはカガミ, Учиха Кагами) был шиноби Деревни Скрытого Листа из клана Учиха.</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$200</small> $150
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Madara.jpg" alt="Madara"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Madara</a></h4>
                  <p>Мадара Учиха (яп. うちはマダラ, Учиха Мадара) был легендарным лидером клана Учиха. Он основал Деревню Скрытого Листа вместе со своим другом и соперником, Хаширамой Сенджу, с намерением положить начало мирной эпохе. Когда они двое разошлись во взглядах, как именно достичь этого мира, то сразились за главенство над деревней в битве, которая завершилась смертью Мадары. Тем не менее, впоследствии, он переписал свою смерть и стал скрываться от мира, чтобы продолжать работу над своими планами. Как оказалось, Мадара был не в состоянии завершить их на протяжении своей природной жизни, поэтому доверил свои знания и стремления Обито Учихе незадолго до своей настоящей смерти. Года спустя, Мадара был воскрешен, но в конце концов встретил окончательный провал своих планов, прежде чем повторно умереть.</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$1400</small> $1320
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Obito.jpg" alt="Obito"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Obito</a></h4>
                  <p>Обито Учиха (яп. うちはオビト, Учиха Обито) был шиноби из клана Учиха Конохагакуре и членом команды Минато. Считалось, что он погиб во время Третьей Мировой Войны Шиноби, и что его единственным наследием оставался лишь Шаринган, который он подарил своему другу Какаши Хатаке. На самом же деле, Обито спас от смерти и тренировал Мадара Учиха, но из-за событий войны, Обито потерял веру в реальность и унаследовал от Мадары его план по созданию идеального мира. Вновь дав о себе знать под именами Тоби (яп. トビ, Тоби) и самого Мадары Учихи, Обито втайне взял под свой контроль Акацуки, чтобы использовать организацию как инструмент манипуляций для достижения своих целей, и в конце-концов заявил о себе во всеуслышание, развязав Четвёртую Мировую Войну Шиноби. Тем не менее, ближе к концу событий войны, Обито раскаялся в своих поступках и, в качестве искупления, пожертвовал собственной жизнью ради спасения мира, который ранее он отчаянно пытался заменить.</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$1400</small> $1220
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Sarada.jpg" alt="Sarada"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Sarada</a></h4>
                  <p>Сарада Учиха (яп. うちはサラダ, Учиха Са́рада) — чуунин Деревни Скрытого Листа из клана Учиха. Так как Сарада росла без своего отца, она сначала пытается понять, кто она или чем она должна быть. Встретив отца благодаря помощи Наруто Узумаки, Сарада узнает, что она определяется связями, которыми она обладает с другими, и как член команды Конохамару, она стремится однажды стать Хокаге, чтобы образовать узы с максимально возможным количеством людей.</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$540</small> $500
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Saske.jpg" alt="Saske"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Saske</a></h4>
                  <p>Саске Учиха (яп. うちはサスケ, Учиха Сасукэ) — один из последних выживших членов клана Учиха из Деревни Скрытого Листа. После того, как его старший брат Итачи вырезал весь их клан, Саске поставил перед собой жизненную цель отомстить за клан и семью, убив Итачи. Он попадает в Команду 7, когда становится ниндзя, и благодаря состязаниям со своим соперником и лучшим другом, Наруто Узумаки, начинает оттачивать свои навыки. Недовольный своим прогрессом, он покидает Лист, чтобы обрести силу, необходимую для осуществления мести. Годы, проведённые в поисках мести, стали невероятно взыскательными и неразумными, равно как и изолировали его от других, из-за чего он вскоре становится международным преступником. После того, как Саске сыграл одну из ключевых ролей в окончании Четвёртой Мировой Войны Шиноби, а Наруто смог избавить его от ненависти, он решает вернуться в Скрытый Лист и посвящает свою жизнь защите деревни и её жителей — таким образом, он становится известен под прозвищем "Поддерживающий Каге" (яп. 支う影, Сасаукагэ, Буквальное значение: Поддерживающая Тень).</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                           $3020
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-3">
              <div class="heroes-card">
                <div class="heroes-thump">
                  <a href="#"><img src="/Heroes/Shisui.jpg" alt="Shisui"></a>
                </div>
                <div class="heroes-details">
                  <h4><a href="#">Shisui</a></h4>
                  <p>Шисуи Учиха (яп. うちはシスイ, Учиха Щисуи), также известный как "Шисуи Телесного Мерцания" (яп. 瞬身のシスイ, Щунщин но Щисуи) был одним из Анбу клана Учиха Деревни Скрытого Листа.</p>
                  <div class="heroes-button-details d-flex justify-content-between">
                    <div class="heroes-prise">
                          <small>$1200</small> $1000
                    </div>
                    <div class="heroes-links">
                      <a href="#"><img src="/imgs/shopping-cart.png" alt="user" width="25" height="25"></a>
                      <a href="#"><img src="/icons/heart.png" alt="user" width="25" height="25"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> 
        </div>
      </section> -->
  <?php endif;?>
      
<!-- footer  -->
      <footer>
        <section class="footer">
            <div class="container">
              <div class="row">
                <div class="col-md-3 col-6">
                  <h4>Info</h4>
                  <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Contacts</a></li>
                  </ul>
                </div>

                <div class="col-md-3 col-6">
                  <h4>Contacts</h4>
                  <ul class="list-unstyled">
                    <li><a href="Tel: 032323323">032-323-323</a></li>
                    <li><a href="Tel: 043434434">043-434-434</a></li>
                  </ul>
                </div>

                <div class="col-md-3 col-6">
                  <h4>Social link</h4>
                   <div class="footer-icons">
                    <a href="#"><img src="/imgs/facebook.png" alt="facebook" width="20" height="20"></a>
                    <a href="#"><img src="/imgs/instagram.png" alt="instagram" width="20" height="20"></a>
                    <a href="#"><img src="/imgs/telegram.png" alt="telegram" width="20" height="20"></a>
                   </div>
                </div>

                <div class="col-md-3 col-6">
                 <img class="eye" src="/imgs/sharing.gif" alt="eyes">
                </div>

              </div>
            </div>
      </section>
    </footer>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/Sing.js" defer></script>
<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
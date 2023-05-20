<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,800;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Poppins:wght@700&family=Roboto:ital,wght@0,700;1,400&family=Tinos&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Poppins:wght@700&family=Roboto:ital,wght@0,700;1,400&family=Tinos&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Open+Sans:ital,wght@1,300&family=Poppins:wght@700&family=Roboto:ital,wght@0,700;1,400&family=Tinos&display=swap" rel="stylesheet">
    <title>DVA VARENYKA</title>
</head>
<body>
    <div class="header" id="header">
        <div class="container">
                <div class="header-line">
                    <div class="header-logo">
                        DVA
                        <img src="./image/LOGO.png" alt="">
                        VARENYKY
                    </div>
                    <div class="alert" id="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Ваша страва додана у кошик!
                    </div>
                    <div class="alert_submit">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                       Data sent!
                    </div>
                    <div class="nav">
                        <a class="nav-item" href="#header">ГОЛОВНА</a>
                        <a class="nav-item" href="#menu">МЕНЮ</a>
                        <a class="nav-item" href="#history">ПРО НАС</a>
                        <a class="nav-item" href="#map">РОЗТАШУВАННЯ</a>
                    </div>

                    <div class="cart" id="open">

                            <img class='cart-img' src="./image/cart.svg" alt="">
                       
                    </div>

                    <div class="phone">
                        <div class="phone-holder">
                            <div class="phone-img">
                                <img src="./image/phone.png" alt="">
                            </div>
                            <div class="number"><a class="num" href="#">+380-888-76-54</a>
                            </div>
                        </div>
                            <div class="phone-text">
                                Зв’язатися з нами
                            </div>
                        </div>
                    
                    <div class="btn">
                        <a class='button' href="#menu">ЗАМОВЛЕННЯ СТРАВИ</a>
                    </div>

                    <div class="menu-icon">
                        <span></span>
                    </div>
                        <div class="menu-body">
                            <ul class="menu-list">
                                <li  class="item-menu"><a href="#header" class="menu-link">ГОЛОВНА</a></li>
                                <li class="item-menu"><a href="#menu" class="menu-link">МЕНЮ</a></li>
                                <li class="item-menu"><a href="#history" class="menu-link">ПРО НАС</a></li>
                                <li class="item-menu"><a href="#map" class="menu-link">МІСЦЕРОЗТАШУВАННЯ</a></li>
                                <li class="item-menu" id="open_link"><a href="#" class="menu-link">КОШИК</a></li>
                            </ul>
                        </div>
                </div>

<div class="header-down">
 
                <div class="header-title">
                    Ласкаво просимо у 
                    
                    <div class="header-subtitle">
                        Наш ресторан
                    </div>

                    <div class="header-suptitle">
                        ДІМ ВАРЕНИКІВ 
                    </div>

                    <div class="header-btn">
                        <a href="#menu" class="header-button">ДИВИТИСЬ МЕНЮ</a>
                    </div>
                </div>
                       <div id="popup" class="popup">
                          <div class="popup__body">
                              <div class="popup__content">
                                  <a href="" id="close" class="popup__close">< Головна сторінка</a>
                                  <div class="popup__title">Кошик</div>
                                  <div class="popup__text" id="popup__text">
                                    Тут нічого немає, але ви можете зробити замовлення прямо зараз :)
                                  </div>
                                  <ul class="popup___list" id="list">
                                
                                  </ul>
                                  <button class="popup___order" id="order">
                                    <div class="order__text" id="popup__button">ОФОРМИТИ ЗАМОВЛЕННЯ</div>
                                </button>
                              </div>
                          </div>
                      </div>
                      <div id="ordering" class="popup__ordering">
                        <div class="popup__body">
                            <div class="popup__content">
                                <a href="" id="_close" class="popup__close">< Кошик</a>
                                <div class="popup__title">Оформлення</div>
                                <form class="popup__form" action="handle.php" method="POST">
                                    <h2 class="ordering__subtitle">Контакти</h2>
                                    <input type="text" name="name" class="ordering__input" placeholder="Ім'я">
                                    <input type="text"  class="ordering__input" name="phone" placeholder="Номер телефону"> 
                                    <p class="ordering__delivery">Доставка o:</p>
                                    <input type="time" class="ordering__input" name="time">
                                    <h2 class="ordering__subtitle">Адреса</h2>
                                    <input type="text" class="ordering__input" name='street' placeholder="Вулиця">
                                    <input class="ordering__input" type="text" name='number' placeholder="Будинок">
                                    <div class="ordering__end">
                                        <p class="ordering__price" id="out"></p>
                                        <button class="ordering__submit popup___order" id="submit">ОФОРМИТИ</button>
                                 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>    
        </div>
            </div>
        </div>
    </div>
    <div class="cards">
        <div class="container">
            <div class="cards-holder">
                <div class="card">
                
                    <div class="card-image">
                        <img src="./image/magic.png" alt="">
                    </div>

                    <div class="card-title">
                        Магічна <span>атмосфера</span> 
                    </div>

                    <div class="card-desc">
                        У нашому закладі панує магічна атмосфера, яка 
                        наповнена смачними ароматами
                    </div>

                </div>

                <div class="card">
                
                    <div class="card-image">
                        <img src="./image/Mask Group.png" alt="">
                    </div>

                    <div class="card-title">
                        Найкраща якість  <span>страв</span> 
                    </div>

                    <div class="card-desc">
                        Якість наших
                        страв - чудова!

                    </div>

                </div>

                <div class="card">
                
                    <div class="card-image">
                        <img src="./image/money.png" alt="">
                    </div>

                    <div class="card-title">
                        Недорогі <span>страви</span>                    
                    </div>

                    <div class="card-desc">
                        Вартість наших страв
                        залежить тільки від їх
                        кількості. Якість
                        завжди на висоті!
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="history" id="history">    
        <div class="container">
            <div class="history-holder">
                <div class="history-info">
                    <img class="history-image" src="./image/grandmother.svg" alt="">
                    <div class="history-title">
                            Наша <span>історія</span> 
                        </div>
                        <div class="history-desc">
                            Коли я був ще малим моя, бабця робила соковиті та смачні вареники, які були есенцією ніжності і через багато років, коли я знов приїхав туди, то згадав цей момент і мені захотілось поділитись ним з усіма бажаючими. Тому і було створенно цей затишний заклад 
                        </div>
                </div>
                <div class="history-images">
                    <img class="image-1" src="./image/1.png" alt="">
                    <img class="image-2" src="./image/2.png" alt="">
                    <img class="image-3" src="./image/3.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="black-block">
        <div class="container">
            <div class="black-holder">

                <div class="left">
                    <div class="left-title">
                        Відсвяткуйте в одному з <br>
                        найкращих ресторанів.
                    </div>
                    <div class="left-text">
                        Тільки цього місяця бізнес-ланч від 250 ₴
                    </div>
                </div>

                <div class="right">
                    <div class="right-button">
                        <a href="#map" class="right-btn">РОЗТАШУВАННЯ</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="dishes">
        <div class="container">
           
            <div class="dishes-title">
               Наші <span>хіти</span>
            </div>

            <div class="burgers">
                <div class="burgers-image">
                    <img src="./image/varenik.png" alt="" class="pizza">
                </div>
                <div class="burgers-items">
                    <div class="burger-item">
                        <img src="./image/varenyk1.png" alt="" class="burger">
                        <div class="burger-text">
                            Вареники з картоплею --------------------- 220 ₴ / 200 гр.
                        </div>
                    </div>
                    <div class="burger-item">
                        <img src="./image/varenik2.png" alt="" class="burger">
                        <div class="burger-text">
                            Вареники з полуницею --------------------- 220 ₴ / 200 гр.
                        </div>
                    </div>
                    <div class="burger-item">
                        <img src="./image/varenik3.png" alt="" class="burger">
                        <div class="burger-text">
                            Вареники з ананасом ---------------------- 220 ₴ / 200 гр.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu" id='menu'>
        <div class="container">

            <div class="menu-title">
                Наше меню
            </div>

            <div id="carousel" class="carousel">
                <button class="arrow prev"></button>
                <div class="gallery">
                  <ul>
                    <li class="menu-item active">
                        <div class="information"  data-title="Для гурманів з сюрпризом"><img src="./image/information.svg" alt=""></div>
                      <div class="menu-image">
                          <img src="./image/1с.png" alt="" class="menu-img">
                      </div>
            
                      <div class="menu-text">
                          Вареники кольорові 210гр
                      </div>
            
                      <div class="menu-button" >
                          <a href="#" data-id="fid45s" class="menu-btn">ЗАМОВИТИ</a>
                      </div>
                    </li>
                    <li class="menu-item">
                        <div class="information"  data-title="Зроблені за спеціальним рецептом"><img src="./image/information.svg" alt=""></div>
                        <div class="menu-image">
                            <img src="./image/1b.png" alt="" class="menu-img">
                        </div>
    
                        <div class="menu-text">
                            Вареники-грибочки 240гр
                        </div>
    
                        <div class="menu-button">
                            <a href="#"  data-id="atpjf8" class="menu-btn">ЗАМОВИТИ</a>
                        </div>
                    </li>
                    <li class="menu-item">
                        <div class="information"  data-title="Солодка вишня у теплому тісті"><img src="./image/information.svg" alt=""></div>
                      <div class="menu-image">
                          <img src="./image/1a.png" alt="" class="menu-img">
                      </div>
  
                      <div class="menu-text">
                          Вареники з вишнею 220гр
                      </div>
  
                      <div class="menu-button">
                          <a href="#"  data-id="rup99o" class="menu-btn">ЗАМОВИТИ</a>
                      </div>
                    </li>
                    <li class="menu-item">
                        <div class="information"  data-title="Зі свіжого лосося"><img src="./image/information.svg" alt=""></div>
                      <div class="menu-image">
                          <img src="./image/1d.png" alt="" class="menu-img">
                      </div>
            
                      <div class="menu-text">
                          Вареники з рибою 220гр
                      </div>
            
                      <div class="menu-button">
                          <a href="#" data-id="arto89" class="menu-btn">ЗАМОВИТИ</a>
                      </div>
                    </li>
                    <li class="menu-item">
                        <div class="information"  data-title="Незабутній смак тропічних регіонів в українському оздобленні"><img src="./image/information.svg" alt=""></div>
                      <div class="menu-image">
                          <img src="./image/1g.png" alt="" class="menu-img">
                      </div>
            
                      <div class="menu-text">
                          Вареники з ананасами 210гр
                      </div>
                      
                      <div class="menu-button">
                          <a href="#" data-id="o90yht"  class="menu-btn">ЗАМОВИТИ</a>
                      </div>
                    </li>
                    <li class="menu-item">
                        <div class="information"  data-title="З ніжної яловичини"><img src="./image/information.svg" alt=""></div>
                      <div class="menu-image">
                          <img src="./image/1e.png" alt="" class="menu-img">
                      </div>
            
                      <div class="menu-text">
                          Вареники з м'ясом 220гр
                      </div>
            
                      <div class="menu-button">
                          <a href="#" data-id="uor567" class="menu-btn">ЗАМОВИТИ</a>
                      </div>
                    </li>
                    <li class="menu-item">
                        <div class="information"  data-title="З додаванням  білих грибів"><img src="./image/information.svg" alt=""></div>
                      <div class="menu-image">
                          <img src="./image/1h.png" alt="" class="menu-img">
                      </div>
            
                      <div class="menu-text">
                          Вареники з грибами 220гр 
                      </div>
            
                      <div class="menu-button">
                          <a href="#" data-id="poe456" class="menu-btn">ЗАМОВИТИ</a>
                      </div>
                    </li>
                    <li class="menu-item">
                        <div class="information"  data-title="Цікаве поєднання азіатського кухні з українською"><img src="./image/information.svg" alt=""></div>
                      <div class="menu-image">
                          <img src="./image/1f.jpg" alt="" class="menu-img">
                      </div>
            
                      <div class="menu-text">
                          Вареники з рисом 220гр
                      </div>
            
                      <div class="menu-button">
                          <a href="#" data-id="cr89io" class="menu-btn">ЗАМОВИТИ</a>
                      </div>
                    </li>
                  </ul>
                </div>
                <button class="arrow next"></button>
              </div>

            <div class="menu-dots">
                <div class="dot activety"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
           </div>
        </div>
    </div>
    <div class="comment">
        <div class="container">
        <div class="comment-item activation">
            <div class="comment-text">
                Я надовго запам'ятаю мій День народження, проведений у цьому ресторані! Шматок рідної Вірменії! Окреме дякую за комплепент у вигляді фруктової тарілки. Рекомендуємо цей ресторан своїм друзям та родичам також за кордоном, що подорожують Дніпром.
            </div>
            <div class="comment-image">
                <img src="./image/comment.png" alt="">
            </div>
            <div class="comment-type">
                Відвідувач
            </div>
            <div class="comment-name">
                Миколай
            </div>
        </div>
        <div class="comment-item">
            <div class="comment-text">
                Я замовила кілька різних видів, таких як вареники-грибочки, вареники з вишнею та вареники з ананасами, і кожен з них мав свій унікальний смак. Тісто було ніжним і смачним, а начинка була якісною та свіжою.
            </div>
            <div class="comment-image">
                <img src="./image/tourist.png" alt="">
            </div>
            <div class="comment-type">
                Відвідувач
            </div>
            <div class="comment-name">
               Марина
            </div>
        </div>
        <div class="comment-item">
            <div class="comment-text">
                Хочу відзначити приємну атмосферу вашого ресторану. Затишний інтер'єр створює затишну атмосферу для відпочинку та насолоди стравами. Музика та обслуговування створюють гарний настрій та відчуття комфорту. Ціна за страви також була розумною та відповідала якості продуктів та обслуговування.
            </div>
            <div class="comment-image">
                <img src="./image/visitor.png" alt="">
            </div>
            <div class="comment-type">
                Відвідувач
            </div>
            <div class="comment-name">
                Євгеній
            </div>
        </div>
            <div class="comment-dots">
                <div class="comment-dot  _activety"></div>
                <div class="comment-dot"></div>
                <div class="comment-dot"></div>
            </div>
        </div>

    </div>
    <div class="map" id="map">
        <div class="container">
             <div class="map-title">
                Наше <span>розташування</span>
             </div>
             <img src="./image/map.jpg" class="map-img">
             <div class="map-adress">
                <div class="adress-title">Адреси:</div>
                <div class="adress-text">
                   <p><span><img src="./image/map-marker.png"></span>Вулиця Січеславська Набережна, 17м</p>
                    <p><span><img src="./image/map-marker.png"></span>Вулиця Маршала Малиновського, 60</p>
                </div>
             </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer-holder">
                <div class="header-logo">
                    DVA
                    <img src="./image/LOGO.png" alt="">
                    VARENYKY
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="./js/index.js"></script>
</body>
</html>


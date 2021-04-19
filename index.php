<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
    
</head>

<body>
    
    <div class="wrapper">
        <header>
            <section class="header-top">      
                <div class="container">  
                    <div class="row">
                        <div class="header-top__logo">
                            <a href="/"><img src="images/bank.png" alt=""></a>
                        </div>
                        <div class="header-top__phone">
                            <a href="tel:88001005005">8-800-100-5005</a>
                            <a href="tel:+73452522000">+7 (3452) 522-000</a>
                        </div>
                    </div>                
                </div>
            </section>

            <section class="menu">
                <div class="container">
                    <nav class="intro">
                        <ul id="navbar" class="navbar">           
                            <li><a href="#">Кредитные карты</a></li>
                            <li><a href="#">Вклады</a></li>
                            <li><a href="#">Дебетовая карта</a></li>
                            <li><a href="#">Страхование</a></li>
                            <li><a href="#">Друзья</a></li>
                            <li><a href="#">Интернет-банк</a></li>
                        </ul>  
                    </nav>
                </div>
            </section> 
        </header>

        <main>                    
            <section class="section_breadcrums">
                <div class="container">
                    <ul class="breadcrums">           
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Вклады</a></li>
                        <li>
                        <span class="breadcrumbs-current">Калькулятор
                        </span>
                        </li>
                    </ul> 
                </div>
            </section>

            <section class="calculate_form">
                <div class="container">
                    <div class="calculate">
                        <div class="name-calculate">                        
                            <div class="nameform">
                                <a href="#">Калькулятор</a>
                            </div>
                        </div>
                    
                        <form method="post" id="ajax_form" action="">
                            <div class="inform-string">
                                <div class="text-information">
                                    <p>Дата оформления вклада</p>
                                </div>
                                <div class="input-information">                                        
                                        <input type="date" name="date" placeholder="дд.мм.гггг">
                                </div>
                            </div>
                            <div class="inform-string">
                                <div class="text-information">
                                    <p>Сумма вклада</p>
                                </div>
                                <div class="input-information">
                                        <input type="number" name="summ" placeholder="1000" min="1000" max="3000000">
                                </div>
                            </div>
                            <div class="inform-string">
                                <div class="text-information">                                    
                                    <p>Срок вклада</p>
                                </div>
                                <div class="input-information">
                                    <div class="term">
                                        <select name="years">                                        
                                            <option name="timedeposit" value="1">1</option>
                                            <option name="timedeposit" value="2">2</option>
                                            <option name="timedeposit" value="3">3</option>
                                            <option name="timedeposit" value="4">4</option>
                                            <option name="timedeposit" value="5">5</option>
                                        </select>
                                    </div>                                                                  
                                </div>
                            </div>
                            <div class="inform-string">
                                <div class="text-information">
                                    <p>Пополнение вклада</p>
                                </div>
                                <div class="input-information">
                                        <div class="choiceform">                                    
                                            <input name="choice" type="radio" value="no" checked>Нет
                                            <input name="choice" type="radio" value="yes">Да
                                        </div>                                 
                                </div>
                            </div>                            
                            <div class="inform-string">
                                <div class="text-information">                                    
                                    <p>Сумма пополнения вклада</p>
                                </div>
                                <div class="input-information">
                                    <form method="post" id="ajax_form" action="">
                                        <input type="number" name="summadd" placeholder="1000" min="1000" max="3000000">
                                    </form>                               
                                </div>
                            </div>                                            
                        </form> 

                        <selection class="result">
                            <div class="container">  
                                <div class="all-result">
                                    <div class="button-result">                            
                                        <form method="post" id="ajax_form" action="">
                                        <input type="button" class="end-result" id="btn" value="Рассчитать" />
                                        </form>
                                    </div>
                                    <div id="answer" class="text-result"></div> 
                                </div>                          
                            </div>
                        </selection>    
                    </div>
                </div>
            </section>
        </main>

        

        <footer>
            <section class="footer">
                <div class="container">
                    <ul id="" class="footer-menu">           
                        <li><a href="#">Кредитные карты</a></li>
                        <li><a href="#">Вклады</a></li>
                        <li><a href="#">Дебетовая карта</a></li>
                        <li><a href="#">Страхование</a></li>
                        <li><a href="#">Друзья</a></li>
                        <li><a href="#">Интернет-банк</a></li>
                    </ul>  
                </div>
            </section>
        </footer>

    </div>
</body>
</html>
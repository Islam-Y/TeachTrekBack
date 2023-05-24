@extends('layout.app')
@section('title', 'Главная страница Teach Trek')
@section('content')



<main class="main-hero">
    <section class="hero">
        <div class="selector-main">
            <a class="boss" href="#"><h2>Работодателям</h2></a>
            <a class="candidate active" href="#"><h2>Специалистам</h2></a>
        </div>
        <div class="title">
            <h1>
                <div class="title-div">
                    <div class="title-1"><span class="title-1-1">Найди</span> <span class="title-1-2">себя</span></div>

                    <div class="div-input-title">

                        <form class="boss-form" action="" method="get">

                            <input name="s" placeholder="Работа мечты" type="search">
                            <button type="submit" value=""><img src="img/search.svg" alt="Поиск"></button>

                        </form>

                        <form class="candidate-form active" action="" method="get">

                            <input name="s" placeholder="Специалист мечты" type="search">
                            <button type="submit" value=""><img src="img/search.svg" alt="Поиск"></button>

                        </form>
                    </div>
                    <div class="title-2-1"><span class="title-2">в</span> <span>образовании</span></div>


                </div>
            </h1>
        </div>

        <div class="statistics">
            <ul class="ul-statistics">
                <li class="ul-statistics-item">
                    <p class="value-statistics">1120</p>
                    <p class="text-statistics">вакансий</p>
                </li>

                <li class="ul-statistics-item">
                    <p class="value-statistics">30000р</p>
                    <p class="text-statistics">средняя зарплата в сегменте</p>
                </li>

                <li class="ul-statistics-item">
                    <p class="value-statistics">200</p>
                    <p class="text-statistics">компаний</p>
                </li>

                <li class="ul-statistics-item">
                    <p class="value-statistics">112</p>
                    <p class="text-statistics">курсов</p>
                </li>
            </ul>
        </div>

    </section>
</main>

<footer class="footer-main">

    <div class="div-footer">

        <ul class="footer-main-ul">

            <li class="footer-main-ul-item">

                <ul class="nested-list">

                    <li class="nested-list-item"><a href=#>О нас</a></li>
                    <li class="nested-list-item"><a href=#>Рейтинг</a></li>

                </ul>

            </li>

            <li class="footer-main-ul-item">

                <ul class="nested-list">

                    <li class="nested-list-item"><a href=#>Вакансии</a></li>
                    <li class="nested-list-item"><a href=#>Организации</a></li>

                </ul>

            </li>

            <li class="footer-main-ul-item">

                <ul class="nested-list">

                    <li class="nested-list-item"><a href=#>Пользовательское</a></li>
                    <li class="nested-list-item"><a href=#>cоглашение</a></li>

                </ul>

            </li>

            <li class="footer-main-ul-item">
                <ul class="nested-list">

                    <li class="nested-list-item footer-social"><a href=#>Контакты: </a>
                        <ul class="social-list">
                            <li class="social-list-item">
                                <a class="telegram-a" href = "#" >
                                    <img src = "img/telegram_logo.svg" class="telegram-img"  alt="Telegram" width="30px" height="30px">
                                </a>
                            </li>

                            <li class="social-list-item">
                                <a class="whatsapp-a" href = "#" >
                                    <img src = "img/whats-app_logo.svg" class="whatsapp-img"  alt="WhatsApp" width="30px" height="30px">
                                </a>
                            </li>

                            <li class="social-list-item">
                                <a class="VK-a" href = "#" >
                                    <img src = "img/VK-footer.png" class="VK-img"  alt="ВКонтакте" width="38px" height="30px">
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <script src="toggle_user.js"></script>
</footer>


@endsection

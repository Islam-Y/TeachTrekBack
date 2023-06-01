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

                    <li class="nested-list-item"><a href="{{ route('vacancy_list') }}">Вакансии</a></li>
                    <li class="nested-list-item"><a href="{{ route('organization_list') }}">Организации</a></li>

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
                                <a class="telegram-a" href="#">
                                    <img src="{{ asset('media/img/telegram_logo.svg') }}" class="telegram-img"
                                        alt="Telegram" width="30px" height="30px">
                                </a>
                            </li>

                            <li class="social-list-item">
                                <a class="whatsapp-a" href="#">
                                    <img src="{{ asset('media/img/whats-app_logo.svg') }}" class="whatsapp-img"
                                        alt="WhatsApp" width="30px" height="30px">
                                </a>
                            </li>

                            <li class="social-list-item">
                                <a class="VK-a" href="#">
                                    <img src="{{ asset('media/img/VK-footer.png') }}" class="VK-img" alt="ВКонтакте"
                                        width="38px" height="30px">
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</footer>

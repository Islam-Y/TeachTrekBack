<header class="header-main">
    <div class="header-up">

        <a class="logo" href="{{ route('home_page') }}">
            <img src="{{ asset('media/img/logo_final.svg') }}" class="logo-img" alt="Logo Teach Trek">
        </a>

        @if (auth()->check())
            <a style="
            font-family: 'Work Sans', sans-serif;
            font-size: 20px;
            line-height: 30px;
            color: #FFFFFF;
            text-decoration: none;
            font-weight: 500;"
                href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Выйти
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}">
                <button type="button" name="enter-button" value="Войти"><img src="{{ asset('media/img/profile.svg') }}"></button>
            </a>
        @endif
    </div>

    <nav class="main-nav">
        <div class="header-down">
            <a href="{{ route('vacancy_list') }}">Вакансии</a>
            <a href="{{ route('organization_list') }}">Организации</a>
            <a href="{{ route('user_list') }}">Соискатели</a>
            <a href="#">Контакты</a>
        </div>
    </nav>
</header>

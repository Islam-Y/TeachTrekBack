<header class="header-main">
    <div class="header-up">
        <a class="logo" href="{{route('home')}}">
            <img src="#" class="logo-img" alt="Logo Teach Trek">
        </a>

        <a href="{{route('login')}}">
            <button type="button" name="enter-button" value="Войти"><img src="img/profile.svg"></button>
        </a>
    </div>

    <nav class="main-nav">
        <div class="header-down">
            <a href="{{route ('vacancy_list')}}">Вакансии</a>
            <a href="{{route ('organization_list')}}">Организации</a>
            <a href="#">Контакты</a>
        </div>
    </nav>
</header>
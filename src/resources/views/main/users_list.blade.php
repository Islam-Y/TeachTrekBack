@extends('main.base')

@push('styles')
    <link href="{{ asset('css/users.css') }}" rel="stylesheet" />
@endpush

@section('title', 'Соискатели')

@section('content')
    <main class="main-users">
        <section class="section-users">
            <div class="search">
                <form class="search-user" action="" method="get">

                    <input name="s" placeholder="Поиск специалиста" type="search">
                    <button type="submit" value=""><img src="img/magnifier.svg" alt="Поиск"></button>

                </form>

                <form class="specification">
                    <select атрибуты>
                        <option атрибуты>По соответствию</option>
                        <option атрибуты>По дате визита</option>
                        <option атрибуты>По убыванию зарплаты</option>
                        <option атрибуты>По возрастанию зарплаты</option>
                    </select>
                </form>

                <div class="search-max">Найдено 30 соискателей</div>
            </div>


            <main class="main-users">
                <section class="section-users">
                    <div class="div-section">

                        <ul class="users">
                            @foreach ($users as $user)
                                <li class="users-item">
                                    <div class="description-user">
                                        <h2 class="name-user">
                                            <a href="{{ route('user_profile', $user->id) }}">
                                                {{ $user->fullName->name }}
                                                {{ $user->fullName->surname }}
                                                {{ $user->fullName->patronymic }}
                                            </a>
                                        </h2>


                                        <div class="description-mini-user">{{ $user->fullName->info->profession }}</div>
                                        <div class="salary">От 30 000 руб.</div>

                                        <ul>
                                            <li><b>Опыт работы:</b>3 года</li>
                                            <li><b>Специализация:</b> {{ $user->fullName->info->specialization }}</li>
                                            <li><b>Образование:</b>
                                                {{ $user->fullName->education->first()->name_educational_university }}</li>
                                        </ul>
                                        <button class='button-write' type="button" name="button-response">Написать</button>
                                    </div>

                                    <img src="img/user-img.svg" alt="Cоискатель">
                                    <button class="heart" type="button"><img class="not-heart-active" src='img/heart.png'
                                            width="30px" height="30px" alt="like"><img class="heart-active"
                                            src='img/heart_active.png' width="30px" height="30px"
                                            alt="like"></button>
                                </li>
                            @endforeach
                        </ul>

                        <ul class="filter">

                            <li class="filter-item">
                                <h2 class="filter-item-p">Местоположение</h2>
                                <div>
                                    <input type="checkbox" id="kazan" name="kazan">
                                    <label for="kazan">Казань</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="zelenodolsk" name="zelenodolsk">
                                    <label for="zelenodolsk">Зеленодольск</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="chistopol" name="chistopol">
                                    <label for="chistopol">Чистополь</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="naberezhnye-chelny" name="naberezhnye-chelny">
                                    <label for="naberezhnye-chelny">Набережные Челны</label>
                                </div>

                                <button class='respond-filter' class="filter-all">Показать все</button>
                            </li>

                            <li class="filter-item">
                                <h2 class="filter-item-p">Специализация</h2>
                                <div>
                                    <input type="checkbox" id="primary-classes" name="primary-classes">
                                    <label for="primary-classes">начальные классы</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="middle-high-school" name="middle-high-school">
                                    <label for="middle-high-school">средние и старшие классы</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="special-school" name="special-school">
                                    <label for="special-school">ССУЗы</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="university" name="university">
                                    <label for="university">ВУЗы</label>
                                </div>

                            </li>

                            <li class="filter-item">
                                <h2 class="filter-item-p">Уровень дохода</h2>
                                <div class="item-money">
                                    <input type="number" placeholder="от" id="money" name="money">
                                    <p class="rub">руб.</p>
                                </div>

                            </li>

                            <li class="filter-item">
                                <h2 class="filter-item-p">Тип занятости</h2>
                                <div>
                                    <input type="checkbox" id="full-day" name="full-day">
                                    <label for="full-day">полный рабочий день</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="underemployment" name="underemployment">
                                    <label for="underemployment">неполный рабочий день</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="whatever-time" name="whatever-time">
                                    <label for="whatever-time">любой</label>
                                </div>

                            </li>

                            <li class="filter-item">
                                <h2 class="filter-item-p">Требуемый опыт работы</h2>
                                <div>
                                    <input type="checkbox" id="whatever-skill" name="whatever-skill">
                                    <label for="whatever-skill">любой</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="not-skill" name="not-skill">
                                    <label for="not-skill">нет опыта</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="skill-one-three" name="skill-one-three">
                                    <label for="skill-one-three">от 1 года до 3 лет</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="skill-three-six" name="skill-three-six">
                                    <label for="skill-three-six">от 3 до 6 лет</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="skill-six-up" name="skill-six-up">
                                    <label for="skill-six-up">более 6 лет</label>
                                </div>

                            </li>

                            <li class="filter-item">
                                <h2 class="filter-item-p">Образование</h2>
                                <div class="item-money">
                                    <input type="education" placeholder="Высшее" id="education" name="education">

                                    <input type="education" placeholder="Допобразование" id="additional-education"
                                        name="additional-education">

                                </div>

                            </li>

                            <li class="filter-item">
                                <h2 class="filter-item-p">Дополнительно</h2>
                                <div>
                                    <input type="checkbox" id="ready-move" name="ready-move">
                                    <label for="ready-move">готовность к переезду</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="remote-work" name="remote-work">
                                    <label for="remote-work">удаленная работа</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="with-skill" name="with-skill">
                                    <label for="with-skill">с опытом работы</label>
                                </div>

                                <div>
                                    <input type="checkbox" id="not-skill" name="not-skill">
                                    <label for="not-skill">без опыта</label>
                                </div>

                            </li>


                        </ul>
                    </div>
                </section>
            </main>
        @endsection

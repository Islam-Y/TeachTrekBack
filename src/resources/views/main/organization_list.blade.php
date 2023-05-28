@extends('main.base')

@section('title', "Организации")

@push('styles')
<link href="{{ asset('css/org_list_style.css') }}" rel="stylesheet" />
@endpush

@section('content')

<main class="main-organizations">
    <section class="section-organizations">
        <div class="search">
            <form class="search-organization" action="" method="get">

                <input name="s" placeholder="Поиск специалиста" type="search">
                <button type="submit" value=""><img src="img/magnifier.svg" alt="Поиск"></button>

            </form>
        </div>


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
                <h2 class="filter-item-p">Организация</h2>

                <div>
                    <input type="checkbox" id="school" name="school">
                    <label for="school">Школа</label>
                </div>

                <div>
                    <input type="checkbox" id="special-school" name="special-school">
                    <label for="special-school">ССУЗ</label>
                </div>

                <div>
                    <input type="checkbox" id="university" name="university">
                    <label for="university">ВУЗ</label>
                </div>

            </li>
        </ul>

    @foreach ($organizations as $organization)
        <div class="div-section">

            <ul class="organization">

                <li class="organization-item">
                    <div class="description-organization">
                        <a href="{{ route('organization_profile',$organization->id) }}">
                            <h2 class="name-organization">{{$organization->name}}</h2>
                        </a>
                        <img src="img/img-school.png" alt="Организация" width="150px" height="150px">
                        <div class="estimation">5.0</div>
                        <div class="city-underground">
                            <div class="city">{{$organization->city_organization}}</div>
                            <div class="underground">Проспект Победы</div>
                        </div>
                        <p class="descript">{{$organization->description_mini}}</p>
                        <a href="#">
                            <button class='button-write' type="button" name="button-response">Смотреть вакансии</button>
                        </a>
                    </div>


                </li>

            </ul>
        </div>
    </section>
</main>

@endforeach

@endsection
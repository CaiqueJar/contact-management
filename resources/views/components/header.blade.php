<header class="header">
    <div class="container">  
        <div class="header__wrap">
            <h1 class="header__title">{{ config('app.name') }}</h1>

            <nav>
                <ul class="header-links">
                    <li class="header-links__item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="header-links__item">
                        <a href="{{ route('contacts.index') }}">Contacts</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
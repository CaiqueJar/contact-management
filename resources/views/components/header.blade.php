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

                    @auth
                        <li class="header-links__item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn--link btn--white">
                                    <x-bi-box-arrow-in-left />
                                    Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="header-links__item">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</header>
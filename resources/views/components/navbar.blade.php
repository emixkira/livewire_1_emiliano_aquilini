<nav class="navbar navbar-expand-lg navbar-dark screen-navbar">

    <div class="container">

        <a
            class="navbar-brand screen-brand"
            href="{{ route('home') }}"
        >
            SCREEN<span>RATE</span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#screenNavbar"
            aria-controls="screenNavbar"
            aria-expanded="false"
            aria-label="Apri menu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div
            class="collapse navbar-collapse"
            id="screenNavbar"
        >

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('home') }}"
                    >
                        Home
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('articles.index') }}"
                    >
                        Recensioni
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('articles.create') }}"
                    >
                        Nuova recensione
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('tags.create') }}"
                    >
                        Tag
                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>
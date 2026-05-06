<!DOCTYPE html>
<html>
<head>
    <title>PetSafe Registry</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>

    <div class="navbar">
    <div class="brand">
        <div class="logo-box">
            <img src="{{ asset('images/logo.png') }}" alt="PetSafe Logo">
        </div>

        <h2>PetSafe Registry</h2>
    </div>

    <div class="nav-links">
        <a href="#" onclick="scrollToSection('home', event)">
            <svg class="nav-icon">
                <use href="{{ asset('icons/icons.svg') }}#home"></use>
            </svg>
            <span>Home</span>
        </a>

        <a href="#" onclick="scrollToSection('about', event)">
            <svg class="nav-icon">
                <use href="{{ asset('icons/icons.svg') }}#about"></use>
            </svg>
            <span>About</span>
        </a>

        <a href="#" onclick="scrollToSection('ordinances', event)">
            <svg class="nav-icon">
                <use href="{{ asset('icons/icons.svg') }}#ordinances"></use>
            </svg>
            <span>Ordinances</span>
        </a>

        <a href="#" onclick="scrollToSection('login', event)">
            <svg class="nav-icon">
                <use href="{{ asset('icons/icons.svg') }}#login"></use>
            </svg>
            <span>Login</span>
        </a>
    </div>
</div>

    <section id="home">
        <div class="content">
            <h1>Welcome to PetSafe Registry</h1>
            <p>
                A simple digital system for pet registration, stray animal reporting,
                and barangay animal management.
            </p>
        </div>
    </section>

    <section id="about">
        <div class="content">
            <h1>About Us</h1>
            <p>
                PetSafe Registry helps communities manage pet information, monitor stray animal reports,
                and promote responsible pet ownership through an easy-to-use web system.
            </p>
        </div>
    </section>

    <section id="ordinances">
        <div class="content">
            <h1>Pet Ordinances</h1>

            <div class="card">
                <h3>Responsible Pet Ownership</h3>
                <p>Pet owners are encouraged to register their pets and keep them properly supervised.</p>
            </div>

            <div class="card">
                <h3>Anti-Rabies Vaccination</h3>
                <p>Dogs and cats should receive proper vaccination to help prevent rabies transmission.</p>
            </div>

            <div class="card">
                <h3>Stray Animal Reporting</h3>
                <p>Citizens may report stray animals to help the barangay maintain public safety.</p>
            </div>
        </div>
    </section>

    <section id="login">
        <div class="login-box">
            <h2>Login</h2>

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                @if (session('error'))
                    <p style="color: red; text-align: center;">
                        {{ session('error') }}
                    </p>
                @endif

                <div class="input-group">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </section>
<script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
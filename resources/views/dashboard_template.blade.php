@php
    /* Dashboard data for each role */
    $dashboards = [
        'admin' => [
            'title' => 'Admin Dashboard',
            'welcome' => 'Welcome, Admin!',
            'description' => 'Manage pet records, reports, announcements, ordinances, and users.',
            'color' => 'admin',
            'menu' => ['Dashboard', 'Pet Records', 'Reports', 'Announcements', 'Ordinances', 'Users'],
            'cards' => [
                ['title' => 'Registered Pets', 'value' => '190'],
                ['title' => 'Total Reports', 'value' => '35'],
                ['title' => 'Announcements', 'value' => '8'],
                ['title' => 'Users', 'value' => '64']
            ],
            'features' => [
                'Manage pet and owner records',
                'Review citizen reports',
                'Post announcements',
                'Update ordinances',
                'Manage user accounts'
            ]
        ],

        'officer' => [
            'title' => 'Officer Dashboard',
            'welcome' => 'Welcome, Officer!',
            'description' => 'Verify reports, monitor stray animal cases, and update field records.',
            'color' => 'officer',
            'menu' => ['Dashboard', 'Assigned Reports', 'Verify Report', 'Stray Records', 'Report History'],
            'cards' => [
                ['title' => 'Assigned Reports', 'value' => '14'],
                ['title' => 'Verified Today', 'value' => '5'],
                ['title' => 'Pending Cases', 'value' => '9'],
                ['title' => 'Completed', 'value' => '21']
            ],
            'features' => [
                'View assigned reports',
                'Verify stray animal reports',
                'Update report status',
                'Check field history',
                'Assist adoption verification'
            ]
        ],

        'citizen' => [
            'title' => 'Citizen Dashboard',
            'welcome' => 'Welcome, Citizen!',
            'description' => 'Register pets, submit reports, view announcements, and read ordinances.',
            'color' => 'citizen',
            'menu' => ['Dashboard', 'Register Pet', 'My Pets', 'Report Stray', 'Announcements', 'Ordinances'],
            'cards' => [
                ['title' => 'My Pets', 'value' => '2'],
                ['title' => 'My Reports', 'value' => '3'],
                ['title' => 'Resolved', 'value' => '2'],
                ['title' => 'Notices', 'value' => '6']
            ],
            'features' => [
                'Register your pet',
                'View your pet records',
                'Report stray animals',
                'Read announcements',
                'Check local ordinances'
            ]
        ],
    ];

    /* Get current dashboard based on role */
    $dashboard = $dashboards[$role];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $dashboard['title'] }} - PetSafe Registry</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard_template.css') }}">
</head>
<body>

<div class="layout" id="layout">

    {{-- Sidebar --}}
    <aside class="sidebar">
        {{-- Toggle button --}}
        <button class="toggle-btn" onclick="toggleSidebar()">
            ☰
        </button>

        <div class="brand">
            <div class="logo-box">
                <img src="{{ asset('images/logo.png') }}" alt="PetSafe Logo">
            </div>

            <div>
                <h2>PetSafe</h2>
                <p>Registry System</p>
            </div>
        </div>

        {{-- Menu --}}
        <nav class="menu">
            @foreach ($dashboard['menu'] as $index => $item)
                <a href="#" class="{{ $index === 0 ? 'active' : '' }}">
                    {{ $item }}
                </a>
            @endforeach
        </nav>

        <a href="{{ route('home') }}" class="logout">Back to Home</a>
    </aside>

    {{-- Main content --}}
    <main class="main">

        {{-- Topbar --}}
        <div class="topbar">
            <div>
                <h1>{{ $dashboard['welcome'] }}</h1>
                <p>{{ $dashboard['description'] }}</p>
            </div>

            <span class="role-badge {{ $dashboard['color'] }}">
                {{ ucfirst($role) }}
            </span>
        </div>

        {{-- Summary cards --}}
        <section class="cards">
            @foreach ($dashboard['cards'] as $card)
                <div class="card">
                    <p>{{ $card['title'] }}</p>
                    <h2>{{ $card['value'] }}</h2>
                </div>
            @endforeach
        </section>

        {{-- Features and actions --}}
        <section class="content-grid">

            <div class="panel">
                <h2>Main Features</h2>

                @foreach ($dashboard['features'] as $feature)
                    <div class="feature-item">
                        <span>✓</span>
                        <p>{{ $feature }}</p>
                    </div>
                @endforeach
            </div>

            <div class="panel">
                <h2>Quick Actions</h2>

                @foreach ($dashboard['menu'] as $item)
                    <button class="action-btn">{{ $item }}</button>
                @endforeach
            </div>

        </section>

    </main>

</div>

<script src="{{ asset('js/dashboard_template.js') }}"></script>
</body>
</html>
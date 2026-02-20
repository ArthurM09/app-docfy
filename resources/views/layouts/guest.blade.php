<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            :root {
                --bg: #eef3f9;
                --card: #ffffff;
                --border: #d8e0ea;
                --text: #0f172a;
                --muted: #475569;
                --primary: #0f5ea8;
                --primary-hover: #0c4f8d;
                --danger: #b91c1c;
            }

            * { box-sizing: border-box; }

            body.auth-page {
                margin: 0;
                min-height: 100vh;
                font-family: Figtree, Arial, sans-serif;
                color: var(--text);
                background:
                    radial-gradient(circle at 8% 12%, rgba(59, 130, 246, 0.18), transparent 36%),
                    radial-gradient(circle at 88% 82%, rgba(16, 185, 129, 0.15), transparent 40%),
                    var(--bg);
                display: grid;
                place-items: center;
                padding: 24px;
            }

            .auth-card {
                width: 100%;
                max-width: 480px;
                background: var(--card);
                border: 1px solid var(--border);
                border-radius: 18px;
                box-shadow: 0 18px 45px rgba(15, 23, 42, 0.10);
                padding: 28px;
            }

            .auth-logo {
                display: flex;
                justify-content: center;
                margin-bottom: 18px;
            }

            .auth-logo img {
                height: 120px;
                width: auto;
                display: block;
            }

            .auth-head {
                text-align: center;
                margin-bottom: 22px;
            }

            .auth-head h1 {
                margin: 0;
                font-size: 30px;
                line-height: 1.15;
            }

            .auth-head p {
                margin: 8px 0 0;
                color: var(--muted);
                font-size: 16px;
            }

            .auth-status {
                margin: 0 0 12px;
                color: #166534;
                font-size: 14px;
                text-align: center;
            }

            .auth-form-row {
                margin-bottom: 14px;
            }

            .auth-form-row label {
                display: block;
                margin-bottom: 6px;
                font-size: 15px;
                font-weight: 600;
            }

            .auth-input {
                width: 100%;
                height: 46px;
                border: 1px solid #94a3b8;
                border-radius: 8px;
                background: #fff;
                padding: 0 12px;
                color: var(--text);
                font-size: 15px;
                outline: none;
            }

            .auth-input:focus {
                border-color: var(--primary);
                box-shadow: 0 0 0 3px rgba(15, 94, 168, 0.18);
            }

            .auth-meta {
                margin: 6px 0 16px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 10px;
                font-size: 15px;
            }

            .auth-check {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                color: #1f2937;
            }

            .auth-link {
                color: var(--primary);
                font-weight: 600;
                text-decoration: none;
            }

            .auth-link:hover {
                color: var(--primary-hover);
                text-decoration: underline;
            }

            .auth-btn {
                width: 100%;
                height: 46px;
                border: 0;
                border-radius: 9px;
                background: var(--primary);
                color: #fff;
                font-weight: 700;
                font-size: 16px;
                cursor: pointer;
                display: inline-flex;
                align-items: center;
                justify-content: center;
            }

            .auth-btn:hover { background: var(--primary-hover); }

            .auth-btn:focus {
                outline: 0;
                box-shadow: 0 0 0 3px rgba(15, 94, 168, 0.22);
            }

            .auth-foot {
                margin-top: 16px;
                text-align: center;
                color: var(--muted);
                font-size: 16px;
            }

            .auth-error {
                margin: 6px 0 0;
                color: var(--danger);
                font-size: 13px;
            }

            @media (max-width: 540px) {
                .auth-card { padding: 22px 18px; }
                .auth-head h1 { font-size: 26px; }
                .auth-head p, .auth-foot, .auth-meta { font-size: 14px; }
            }
        </style>
    </head>
    <body class="auth-page">
        <main class="auth-card">
            <div class="auth-logo">
                <img src="{{ asset('images/logo-docfy.png') }}" alt="Docfy">
            </div>
            <div>
                {{ $slot }}
            </div>
        </main>
    </body>
</html>

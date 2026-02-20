<x-guest-layout>
    <div class="auth-head">
        <p><strong>{{ __('auth.login.subtitle') }}</strong></p>
    </div>

    <x-auth-session-status class="auth-status" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="auth-form-row">
            <label for="email">{{ __('auth.fields.email') }}</label>
            <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            @error('email')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="auth-form-row">
            <label for="password">{{ __('auth.fields.password') }}</label>
            <input id="password" class="auth-input" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="auth-meta">
            <label for="remember_me" class="auth-check">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('auth.login.remember') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="auth-link" href="{{ route('password.request') }}">
                    {{ __('auth.login.forgot_link') }}
                </a>
            @endif
        </div>

        <button type="submit" class="auth-btn">{{ __('auth.login.submit') }}</button>

        <p class="auth-foot">
            Ainda não tem conta?
            <a href="{{ route('register') }}" class="auth-link">
                {{ __('auth.login.register_link') }}
            </a>
        </p>
    </form>
</x-guest-layout>

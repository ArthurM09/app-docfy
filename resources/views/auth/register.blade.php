<x-guest-layout>
    <div class="auth-head">
        <p><strong>Preencha os dados para começar</strong></p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="auth-form-row">
            <label for="name">{{ __('auth.fields.name') }}</label>
            <input id="name" class="auth-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
            @error('name')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="auth-form-row">
            <label for="email">{{ __('auth.fields.email') }}</label>
            <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
            @error('email')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="auth-form-row">
            <label for="password">{{ __('auth.fields.password') }}</label>
            <input id="password" class="auth-input" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>

        <div class="auth-form-row">
            <label for="password_confirmation">{{ __('auth.fields.password_confirmation') }}</label>
            <input id="password_confirmation" class="auth-input" type="password" name="password_confirmation" required autocomplete="new-password">
            @error('password_confirmation')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="auth-btn">{{ __('auth.register.submit') }}</button>

        <p class="auth-foot">
            Já tem uma conta?
            <a class="auth-link" href="{{ route('login') }}">
                {{ __('auth.register.login_link') }}
            </a>
        </p>
    </form>
</x-guest-layout>

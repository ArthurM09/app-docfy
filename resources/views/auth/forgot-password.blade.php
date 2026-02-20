<x-guest-layout>
    <div class="auth-head">
        <p><strong>Informe seu e-mail para receber o link de redefinição</strong></p>
    </div>

    <x-auth-session-status class="auth-status" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="auth-form-row">
            <label for="email">{{ __('auth.fields.email') }}</label>
            <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <p class="auth-error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="auth-btn">Enviar link de recuperação</button>

        <p class="auth-foot">
            {{ __('auth.forgot_password.remembered') }}
            <a class="auth-link" href="{{ route('login') }}">
                {{ __('auth.forgot_password.back_login') }}
            </a>
        </p>
    </form>
</x-guest-layout>

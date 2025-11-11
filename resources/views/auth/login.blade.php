<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Juntaê</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    <section class="login-section">
        
        <header class="login-section__header">
            <div class="login-section__logo-container">
                <img 
                    src="{{ asset('img/logo-juntae.png') }}" 
                    alt="Ícone do Juntaê" 
                    class="login-section__logo-image"
                >
                <span class="login-section__logo-text">JuntaÊ</span>
            </div>
        </header>

        <!-- FORMULÁRIO DE LOGIN -->
        <form class="login-section__form" method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- E-mail -->
            <div class="input-group">
                <input 
                    type="email" 
                    placeholder="E-mail" 
                    class="input-field" 
                    id="login-email" 
                    name="email"
                    value="{{ old('email') }}"
                    required 
                    autofocus
                >
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <!-- Senha -->
            <div class="input-group">
                <input 
                    type="password" 
                    placeholder="Senha" 
                    class="input-field" 
                    id="login-senha" 
                    name="password"
                    required
                >
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Link para cadastro -->
            <p class="login-section__help-link">
                Não tem uma conta? 
                <a href="{{ route('register') }}">Cadastre-se</a>
            </p>

            <!-- Botão -->
            <div class="login-section__button-container">
                <button type="submit" class="button">
                    Entrar
                </button>
            </div>
            
        </form>
    </section>
    
</body>
</html>

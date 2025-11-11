<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Juntaê</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    <section class="register-section">
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

        <!-- FORMULÁRIO DE CADASTRO -->
        <form class="register-section__form" method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- Nome e CPF/CNPJ -->
            <div class="input-group input-group--side-by-side">
                <input 
                    type="text" 
                    placeholder="Nome" 
                    class="input-field" 
                    id="nome" 
                    name="name"
                    value="{{ old('name') }}"
                    required 
                    autofocus
                >
                @error('name')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                <input 
                    type="text" 
                    placeholder="CPF/CNPJ" 
                    class="input-field" 
                    id="cpf-cnpj" 
                    name="cpf_cnpj"
                    value="{{ old('cpf_cnpj') }}"
                >
                @error('cpf_cnpj')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- E-mail -->
            <div class="input-group">
                <input 
                    type="email" 
                    placeholder="E-mail" 
                    class="input-field" 
                    id="email" 
                    name="email"
                    value="{{ old('email') }}"
                    required
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
                    id="senha" 
                    name="password"
                    required
                >
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirmar Senha -->
            <div class="input-group">
                <input 
                    type="password" 
                    placeholder="Confirmar Senha" 
                    class="input-field" 
                    id="password_confirmation" 
                    name="password_confirmation"
                    required
                >
            </div>

            <!-- Tipo -->
            <div class="register-section__type-container">
                <label for="tipo" class="register-section__type-label">Tipo</label>
                <div class="select-field">
                    <select class="select-field__select" id="tipo" name="tipo">
                        <option value="curador" {{ old('tipo') == 'curador' ? 'selected' : '' }}>Cadastrar um evento (Curador/Parceiro)</option>
                        <option value="usuario" {{ old('tipo') == 'usuario' ? 'selected' : '' }}>Participar de um evento (Usuário)</option>
                    </select>
                </div>
                @error('tipo')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botão -->
            <div class="register-section__button-container">
                <button type="submit" class="button">
                    Cadastrar
                </button>
            </div>
        </form>
    </section>
    
</body>
</html>

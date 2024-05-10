<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Login</title>
    <style>
        /* Estilos simples para o exemplo */
        .menu ul {
            list-style-type: none;
            padding: 0;
        }
        .menu li {
            display: inline-block;
            margin-right: 10px;
        }
        /* Estilo padrão do botão */
        #login-button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s; /* Adiciona transição suave para mudança de cor */
        }
        /* Estilo do botão quando está em logout */
        #login-button.logout {
            background-color: red;
        }
        /* Efeito de hover */
        #login-button:hover {
            filter: brightness(85%); /* Reduz a intensidade da cor quando hover */
        }
    </style>
</head>
<body>

<div class="topo">
    <div class="logo">
        <img src="{{ asset('img/logo.png')}}">
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('site.index')}}">Principal</a></li>
            <li><a href="{{ route('site.sobrenos')}}">Sobre Nós</a></li>
            <li><a href="{{ route('site.contato')}}">Contato</a></li>
            <button id="login-button">login</button>
            <li id="clientes-link" style="display: none;"><a href="{{ route('app.clientes')}}">Clientes</a></li>
            <li id="fornecedores-link" style="display: none;"><a href="{{ route('app.fornecedores')}}">Fornecedores</a></li>
            <li id="produtos-link" style="display: none;"><a href="{{ route('app.produtos')}}">Produtos</a></li>
        </ul>
    </div>
</div>

<script>
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    var loginButton = document.getElementById('login-button');
    var clientesLink = document.getElementById('clientes-link');
    var fornecedoresLink = document.getElementById('fornecedores-link');
    var produtosLink = document.getElementById('produtos-link');

    loginButton.addEventListener('click', function () {
        if (loginButton.innerText === 'login') {
            loginButton.innerText = 'logout';
            loginButton.classList.add('logout');
            clientesLink.style.display = 'block';
            fornecedoresLink.style.display = 'block';
            produtosLink.style.display = 'block';
            setCookie('loggedIn', 'true', 1);
        } else {
            loginButton.innerText = 'login';
            loginButton.classList.remove('logout');
            clientesLink.style.display = 'none';
            fornecedoresLink.style.display = 'none';
            produtosLink.style.display = 'none';
            setCookie('loggedIn', 'false', 1);
        }
    });

    window.addEventListener('load', function () {
        var loggedIn = getCookie('loggedIn');
        if (loggedIn === 'true') {
            loginButton.innerText = 'logout';
            loginButton.classList.add('logout');
            clientesLink.style.display = 'block';
            fornecedoresLink.style.display = 'block';
            produtosLink.style.display = 'block';
        }
    });
</script>

</body>
</html>

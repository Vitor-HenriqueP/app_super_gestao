@extends('site.layouts.basico')

@section('titulo', 'Sobre Nós')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Página de clientes</h1>
        </div>

        <div class="informacao-pagina">
            <h2>Clientes</h2>
            <ul style="list-style-type: none;">
                @foreach ($clientes as $cliente)
                    <li>
                        <br>
                        <strong>Nome:</strong> {{ $cliente['nome'] }}<br>
                        <strong>Email:</strong> {{ $cliente['email'] }}
                        <br>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection

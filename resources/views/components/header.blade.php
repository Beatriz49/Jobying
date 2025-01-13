<header class="grid md:flex">
    <style>
        /* Estilos para Botões */
        .button {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px; /* Espaçamento entre os botões */
            background-color: rgb(131, 131, 236); /* Azul vibrante */
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px; /* Botão arredondado */
            font-size: 1em;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .button:hover {
            background-color: grey; /* Azul mais escuro */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            transform: scale(1.05);
        }
        /* Botão Login/Registo */
        .button5 {
            display: inline-block;
            padding: 12px 24px;
            margin: 10px; /* Espaçamento para alinhar com os outros botões */
            background-color: rgb(131, 131, 236); /* Azul vibrante */
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1em;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .button5:hover {
            background-color: #777777;
            transform: translateY(-2px); /* Elevação no hover */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
        /* Barra Superior */
        .barra-superior {
            display: flex;
            align-items: center; /* Alinha verticalmente o conteúdo */
            justify-content: space-between; /* Espaça o logo e o menu */
            width: 100%; /* Barra ocupa toda a largura */
            background-color: #b3b2b2; /* Fundo cinza */
            color: white; /* Texto branco */
            padding: 10px 20px; /* Espaçamento interno */
            z-index: 1000; /* Prioridade na renderização */
        }
        .menu {
            display: flex; /* Exibe os botões horizontalmente */
            flex-wrap: wrap; /* Garante que os botões fiquem responsivos */
            gap: 10px; /* Espaçamento entre os botões */
        }
        .logo {
            height: 50px; /* Ajuste o tamanho do logotipo */
        }
    </style>

    <div class="barra-superior">
        <!-- Logotipo -->
        <a href="/">
            <img src="/images/jobyinglogo.png" alt="Logotipo" class="logo">
        </a>

        <!-- Menu de Navegação -->
        <div class="menu">
            <a href="sobre" class="button">Sobre Nós</a>
            <a href="empregos" class="button">Procurar Empregos</a>
            <a href="candidatos" class="button">Procurar Candidatos</a>
            <a href="contacto" class="button">Contacto</a>
            <a href="register" class="button5">Registar/Login</a>
        </div>
    </div>
</header>

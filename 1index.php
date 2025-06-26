<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog Legal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Nosso CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar (Cabeçalho) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Meu Blog Legal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Alert de Boas-Vindas -->
    <div class="container mt-3">
        <div class="alert alert-success">
            Bem-vindo ao meu blog! Aqui você encontra coisas legais.
        </div>
    </div>

    <!-- Conteúdo Principal e Sidebar -->
    <div class="container mt-4">
        <div class="row">
            <!-- Conteúdo Principal (8 colunas) -->
            <main class="col-md-8">
                <?php
                // Array com as postagens do blog
                $postagens = [
                    [
                        'titulo' => 'Como Aprender PHP',
                        'data' => '15/06/2025',
                        'imagem' => 'https://via.placeholder.com/800x400',
                        'conteudo' => 'PHP é uma linguagem de programação muito usada para criar sites dinâmicos. Neste post, vamos aprender os primeiros passos com PHP e como ele pode te ajudar a criar sites incríveis.',
                        'conteudo_longo' => 'PHP é uma linguagem de script do lado do servidor que pode ser embutida no HTML. É usada para desenvolver aplicações web dinâmicas e pode ser integrada com vários bancos de dados. O PHP é fácil de aprender para iniciantes, mas também oferece muitos recursos avançados para programadores experientes.'
                    ],
                    [
                        'titulo' => 'Introdução ao Bootstrap',
                        'data' => '10/06/2025',
                        'imagem' => 'https://via.placeholder.com/800x400',
                        'conteudo' => 'Bootstrap é um framework front-end que facilita o desenvolvimento de sites responsivos. Com ele, você pode criar layouts bonitos sem precisar escrever muito CSS.',
                        'conteudo_longo' => 'Bootstrap inclui componentes de interface pré-construídos como navegação, barras de progresso, modais e muito mais. Ele usa um sistema de grid flexível que torna fácil criar layouts que se adaptam a diferentes tamanhos de tela. Além disso, o Bootstrap tem temas e estilos padrão que fazem seu site parecer profissional com pouco esforço.'
                    ],
                    [
                        'titulo' => 'Dicas para GitHub Iniciantes',
                        'data' => '05/06/2025',
                        'imagem' => 'https://via.placeholder.com/800x400',
                        'conteudo' => 'GitHub é uma plataforma incrível para desenvolvedores. Aqui estão algumas dicas para quem está começando a usar essa ferramenta poderosa.',
                        'conteudo_longo' => 'GitHub é uma plataforma de hospedagem de código para controle de versão usando Git. Ele oferece todos os recursos distribuídos de controle de versão e gerenciamento de código-fonte do Git, além de adicionar seus próprios recursos. Com o GitHub, você pode colaborar em projetos com outras pessoas, acompanhar problemas e muito mais.'
                    ]
                ];

                // Loop para mostrar cada postagem
                foreach ($postagens as $postagem) {
                    echo '
                    <div class="card mb-4">
                        <img src="' . $postagem['imagem'] . '" class="card-img-top" alt="' . $postagem['titulo'] . '">
                        <div class="card-body">
                            <h2 class="card-title">' . $postagem['titulo'] . '</h2>
                            <p class="text-muted">Postado em ' . $postagem['data'] . '</p>
                            <p class="card-text">' . $postagem['conteudo'] . '</p>
                            <button class="btn btn-primary">Leia mais...</button>
                        </div>
                    </div>
                    ';
                }
                ?>
            </main>

            <!-- Sidebar (4 colunas) -->
            <aside class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Sobre o Autor</h3>
                    </div>
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Autor">
                        <p>Olá! Meu nome é João e eu sou um desenvolvedor web apaixonado por PHP e Bootstrap. Adoro compartilhar meus conhecimentos através deste blog.</p>
                        <p>Quando não estou programando, gosto de jogar videogame e assistir séries.</p>
                        <button class="btn btn-secondary">Me siga nas redes sociais!</button>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- Rodapé com Formulário de Contato -->
    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container">
            <h3>Contato</h3>
            <div class="row">
                <div class="col-md-6">
                    <p>Email: contato@meublog.com</p>
                    <p>Telefone: (11) 98765-4321</p>
                    <p>Endereço: Rua dos Blogs, 123 - São Paulo/SP</p>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Seu Nome</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Seu Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
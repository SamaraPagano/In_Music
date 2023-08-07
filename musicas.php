<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>In Music</title>
</head>
<body>
    <header>
        <nav>
        <div class="logo">
                <img src="" alt="">
            </div>
            <div class="nav-buttons">
                <a href="cadastro.php">Cadastrar</a>
                <a href="login.php">Login</a>
            </div>
        </nav>
    </header>

    

    <section class="main-content">
        <h2>Escute Músicas</h2>
        <div class="search-and-profile">
            <div class="search-bar">
                <input type="text">

                <button type="button">Pesquisar</button>
            </div>

            <div class="user-profile">
                <img src="" alt="">
                <p>Nome do Usuário</p>
                <a href="perfil-usuario.php">Ver Perfil</a>
            </div>
        </div>

        <div class="recently-plated">
            <h3>Últimas Músicas Ouvidas</h3>
            <ul>
                <li>Nome da Música - Artista</li>
                <li>Nome da Música - Artista</li>
                <li>Nome da Música - Artista</li>
                <li>Nome da Música - Artista</li>
                <li>Nome da Música - Artista</li>
                <li>Nome da Música - Artista</li>
                <span>Nome da Música - Artista</span>
                <button onclick ="favoritarMusica(musica_id)">Favoritar</button>
            </ul>
        </div>

        <div class="user-playlists">
            <h3>Minhas Playlists</h3>

            <ul>
                
            </ul>
        </div>

        <div class="popular-content">
            <h3>Mais Populares</h3>

            <div class="popular-artists">
                <p>Nome do Artista</p>
                <p>Nome do Artista</p>
                <p>Nome do Artista</p>
                <p>Nome do Artista</p>
                <p>Nome do Artista</p>
                <p>Nome do Artista</p>
            </div>

            <h3>Músicas Populares</h3>
            <div class="popular-songs">
                <p>Nome da Música</p>
                <p>Nome da Música</p>
                <p>Nome da Música</p>
                <p>Nome da Música</p>
                <p>Nome da Música</p>
                <p>Nome da Música</p>
            </div>
        </div>

        <div class="music-player">
            <audio id="audio-player" controls>
                <source src="" type="">
                Seu navegador não suporta a reprodução de áudio.
            </audio>

            <div class="music-controls">
                <button onclick="skipPrivious()">Anterior</button>
                <button id="play-pouse-button">Play</button>
                <button onclick="skipNext()">Próximo</button>
            </div>

            <div class="volume-control">
                <input type="range"  id="volume-slider" min="0" max="1" step="0.01" value="1">
            </div>

        </div>

    </section>

    <footer>
    <div class="footer-content">
            <div class="footer-section">
                <h2>Sobre Nós</h2>
                <p>Somos apaixonados por música e estamos aqui para trazer as melhores expiêrincias musicais para você.</p>
            </div>

            <div class="footer-section">
                <h2>Contato</h2>
                <p>Email: inmuisc39@gmail.com</p>
                <p>Telefone: (123) 4567-78912</p>
            </div>

            <div class="footer-section">
                <h2>Redes Sociaias</h2>
                <a href="">Facebook</a>
                <a href="">Twitter</a>
                <a href="">Instagram</a>
            </div>
        </div>

        <div class="footer-buttom">
        <p>&copy; <?php echo date("Y"); ?> In Music. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        const audioPlayer = document.getElementById('audio-player');
        const playPouseButton = document.getElementById('play-pouse-button');
        const volumeSlider = document.getElementById('volume-slider');

        playPouseButton.addEventListener('click', function()
        {
            if (audioPlayer.paused)
            {
                audioPlayer.play();
                playPouseButton.textCintent = 'Pouse';
            }
            else
            {
                audioPlayer.pause();
                playPouseButton.textContent ='Play' ;
            }
        });

        volumeSlider.addEventListener('input', function()
        {
            audioPlayer.volume = volumeSlider.value;
        };)

        function skipPrivious ()
        {
            currentSongIndex = (currentSongIndex - 1 + songs.lenght) % songs.lenght;
            loadSong(currentSongIndex);
        }

        function skipNext ()
        {
            currentSongIndex = (currentSongIndex + 1) % songs.lenght;
            loadSong(currentSongIndex);
        }

        function loadSong(index)
        {
            audioPlayer.src = songs[index];
            audioPlayer.load();
            audioPlayer.play();
        }
    </script>
</body>
</html>
<?php
header("Content-Type: text/html; charset=utf-8");
?>
    <header>
        <nav class="nav">
            <ul>
                <li>Home</li>
                <li>Sobre Nós</li>
                <li>Produtos e Serviços</li>
                <li>Contato</li>
            </ul>
            <?php if(isset($_SESSION["username"])): ?>
                <p>Olá, <?php echo $_SESSION["username"]; ?></p>
            <?php endif; ?>
        </nav>
    </header>

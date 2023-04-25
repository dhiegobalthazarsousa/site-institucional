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
            <?php if(isset($_SESSION["username"]) && $_SESSION["image"]): ?>
                <img src="<?php echo $_SESSION["image"]; ?>" />
            <?php else: ?>
                <a href="login.php">Faça Login</a>
            <?php endif; ?>
        </nav>
    </header>

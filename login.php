<html>

<head>
    <meta charset="UTF-8">
    <title>Banco Tralala — Login</title>
</head>

<body>
    <pre>
        <?php

        require_once 'autoload.php';

        use Alura\Banco\Model\Documento;
        use Alura\Banco\Model\Funcionario\Diretor;
        use Alura\Banco\Service\Autenticador;

        $d1 = new Diretor('989.989.989-99', 'Juliana', 30000);

        $autenticador = new Autenticador();

        $autenticador->tentaLogin($d1, '1234');

        ?>
    </pre>
</body>

</html>
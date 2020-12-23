<html>

<head>
    <meta charset="UTF-8">
    <title>Banco Tralala</title>
</head>

<body>
    <pre>
        <?php
        require_once 'src/Conta.php';
        require_once 'src/Titular.php';
        require_once 'src/Documento.php';

        $c1 = new Conta(new Titular(new Documento('454.454.454-77'), 'Moquidésia'));
        $c2 = new Conta(new Titular(new Documento('787.787.787-77'), 'Irineu'));
        print_r($c1);
        echo '<hr>';
        print_r($c2);
        echo '<hr>';
        echo '<hr>';

        $c1->deposita(1000);
        print_r($c1);
        echo '<hr>';
        print_r($c2);
        echo '<hr>';
        echo '<hr>';

        $c1->saca(100);
        print_r($c1);
        echo '<hr>';
        print_r($c2);
        echo '<hr>';
        echo '<hr>';

        $c1->transfere(500, $c2);
        print_r($c1);
        echo '<hr>';
        print_r($c2);
        ?>
    </pre>
</body>

</html>
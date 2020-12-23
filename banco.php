<html>

<head>
    <meta charset="UTF-8">
    <title>Banco Tralala</title>
</head>

<body>
    <pre>
        <?php
        require_once 'src/Conta.php';
        $c1 = new Conta('999.999.999-99', 'Moquidésia');
        $c2 = new Conta('777.777.777-77', 'Irineu');
        print_r($c1);
        print_r($c2);
        $c1->deposita(2000);
        print_r($c1);
        $c1->saca(496.75);
        print_r($c1);
        $c1->deposita(200);
        print_r($c1);
        $c1->transfere(700, $c2);
        print_r($c1);
        print_r($c2);
        ?>
    </pre>
</body>

</html>
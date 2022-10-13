<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <?php
        $mhs = [
                [
                        'soal' => 'Lorem lorem lorem lorem lorem lorem',
                        'jawaban' => [
                                'a' => 'halo dek',
                                'b' => '2006',
                                'c' => 'jsf',
                        ],
                ],
                [
                        'soal' => 'Lorem lorem lorem lorem lorem lorem',
                        'jawaban' => [
                                'a' => 'halo mas',
                                'b' => '2008',
                                'c' => 'jsf',
                        ],
                ],
        ]; ?>

        <?php foreach ($mhs as $x) : ?>
                <ul>
                        <li><?= $x['soal']; ?></li>
                        <li>a <?= $x['jawaban']['a']; ?></li>
                        <li>b <?= $x['jawaban']['b']; ?></li>
                        <li>c <?= $x['jawaban']['c']; ?></li>
                </ul>
        <?php endforeach; ?>

</body>

</html>
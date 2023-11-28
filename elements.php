<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $chars = ['a', 'b', 'c'];
        echo '⚫️配列に要素を追加する', "<br>";
        $chars[]= 'd';
        array_push($chars, 'e', 'f', 'g');
        print_r($chars);

        echo '⚫️配列の最初要素を追加する', "<br>";
        array_unshift($chars, 'Z', 'Y', 'X');
        print_r($chars);

        echo '２つの配列を合成する', "<br>";
        $chars = array_merge($chars, ['h', 'i', 'j']);
        print_r($chars);

        echo '⚫️配列の先頭の要素を取り出す', "<br>";
        $heatElement = array_shift($chars);
        echo $heatElement, "<br>";
        print_r($chars);

        echo '⚫️配列の末尾の要素を取り出す', "<br>";
        $lastElement = array_pop($chars);
        echo $lastElement, "<br>";
        print_r($chars);

        echo '⚫️配列のキー番号２から５要素分、切り出す', "<br>";
        $sliced = array_slice($chars, 2, 5);
        print_r($sliced);
        print_r($chars);

        echo '⚫️配列のキー番号２の要素削除する分、(キーは詰まりません)', "<br>";
        unset($chars[2]);
        print_r($chars);

    ?>
</body>
</html>


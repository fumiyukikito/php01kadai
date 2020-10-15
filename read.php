<?php
// ファイルを開く
$openFile = fopen('./data/data.text','r');

function h($str)
{
    return htmlspecialchars($str,ENT_QUOTES);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th>名前、メール、出身</th>
          </tr>
         
          <?php while ($str = fgets ($openFile)){ 
?>
<tr>
                <td><?=h($str)?></td>
            </tr>
            <?php
            }
            ?>
          </table>

    <a href="input.php">記入に戻る</a>


</body>
</html>

<?php fclose($openFile);
?>
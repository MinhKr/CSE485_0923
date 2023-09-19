<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<table border = '1'>
        <tr>
            <th>Tên khoá học</th>
        </tr>
        <?php
        for ($i = 1 ; $i < count($arrs) ; $i++) : ?>
            <tr>
                <td><?= $arrs[$i] ?></td>
            </td>
        

        <?php endfor ; ?>
    </table>
<?php

$array = [
    'nome' => 'Leonardo',
    'idade' => 36,
    'empresa' => 'Hoop',
    'cor' => 'pardo',
    'profissao' => 'programador'
];
?>

<table border= "1">
    <?php foreach ($array as $chave => $valor): ?>
        <tr>
            <th><?php echo $chave; ?></th>
            <td><?php echo $valor; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

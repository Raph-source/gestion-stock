<?php
    $title = "Authentfcation";
    $style = ASSETS_CSS.'inventaire.css';
    require_once HEADER;
?>

<table border="1">
    <thead>
        <tr>
            <th>Nom produit</th>
            <th>Entre</th>
            <th>Sortie</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($inventaire as $produit):
                $uniteMin = $produit['uniteMin'];
                $uniteSec = $produit['uniteSec'];
                $stock = $produit['stock'];
        ?>
            <tr>
                <td><?php echo $produit['nom'];?></td>
                <td><?php echo $produit['entre'];?></td>
                <td><?php echo $produit['sortie'];?></td>
                <?php if($stock > $uniteSec):?>
                    <td class="vert"><?php echo $produit['stock'];?></td>
                <?php elseif($stock < $uniteSec && $stock > $uniteMin):?>
                    <td class="orange"><?php echo $produit['stock'];?></td>
                <?php elseif($stock <= $uniteMin):?>
                    <td class="rouge"><?php echo $produit['stock'];?></td>
                <?php endif;?>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

<?php
    require_once FOOTER;
?>
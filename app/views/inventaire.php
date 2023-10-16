<?php
    $title = "Authentfcation";
    $style = ASSETS_CSS.'invntaire.css';
    require_once HEADER;
?>
<div class="container">
    
    <table>
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
                        <td class="vert">
                            <div>
                                <span><?php echo $produit['stock'];?></span>    
                            </div>
                        </td>
                    <?php elseif($stock < $uniteSec && $stock > $uniteMin):?>
                        <td class="orange">
                            <div><span><?php echo $produit['stock'];?></span></div>
                        </td>
                    <?php elseif($stock <= $uniteMin):?>
                        <td class="rouge">
                            <div>
                                <span><?php echo $produit['stock'];?></span>
                            </div>
                            
                        </td>
                    <?php endif;?>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>
<?php
    require_once FOOTER;
?>
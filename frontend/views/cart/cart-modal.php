<?php

use yii\helpers\Html;

?>

<style>
    .del-item {
        cursor: pointer;
    }

    .modal-body {
        padding: 5px;
        overflow: scroll;
    }

    @media (max-width: 500px) {
        .hide-items{
            display: none;
        }
    }
</style>

<?php if (!empty($session['cart'])) { ?>
    <div class="modal-body" style="padding: 5px; overflow: scroll">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th class="hide-items">Фото</th>
                <th><?= Yii::t('main', 'Позиция') ?></th>
                <th><?= Yii::t('main', 'Кол-во') ?></th>
                <th><?= Yii::t('main', 'Ціна') ?></th>
                <th><?= Yii::t('main', 'Сума') ?></th>
                <th class="hide-items"><span class="del-item text-danger glyphicon glyphicon-remove" <!--data-id="--><? /*= $id */ ?>"
                    aria-hidden="true" onclick="clearCart()"></span>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($session['cart'] as $id => $item) { ?>
                <tr>
                    <td class="hide-items"><img src="/product/<?= $item['img'] ?>" alt="<?= $item['name'] ?>" width="90"></td>
                    <td><b><?= $item['name'] ?></b></td>
                    <td><?= $item['qty'] ?></td>
                    <td><?= number_format($item['price'], 2, ',', '\'') ?></td>
                    <td><?= number_format($item['price'] * $item['qty'], 2, ',', '\'') ?></td>
                    <td class="hide-items"><span class="del-item text-danger glyphicon glyphicon-remove" data-id="<?= $id ?>"
                              aria-hidden="true"></span></td>
                </tr>
            <?php } ?>
            <tr id="total-amount">
                <td collspan="2" style="border-bottom: 1px solid #ddd"><h4><?= Yii::t('main', 'Разом:') ?> </h4></td>
                <td style="border-bottom: 1px solid #ddd"><h4><?= $session['cart.qty'] ?></h4></td>
                <td class="hide-items"style="border-bottom: 1px solid #ddd"></td>
                <td style="border-bottom: 1px solid #ddd">
                    <h4><?= number_format($session['cart.sum'], 2, ',', '\'') ?></h4></td>
                <td class="hide-items" style="border-bottom: 1px solid #ddd"></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <h3 class="text-danger"><?= Yii::t('main', 'Кошик пустий') ?></h3>
<?php } ?>

<!--<script>
    if ($('#total-amount').length ) {
        $('#button-success').removeClass('hide');
        $('#button-success').addClass('shown');
    }

    /*&& $('#total-amount')[0].innerText.length > 0*/
</script>-->

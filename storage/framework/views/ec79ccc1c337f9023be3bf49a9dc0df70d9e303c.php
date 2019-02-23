<?php $__env->startSection('conteudo'); ?>
<h1>Estoque</h1>


<div class="button"><a href="<?php echo e(URL('/inventory/add')); ?>">Adicionar Produto</a></div>
<input type="text" id="busca" data-type="search_inventory" />

<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quant.</th>
        <th>Quant. Min.</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $inventory_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->name); ?></td>
            <td>R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></td>
            <td width="60" style="text-align:center"><?php echo e($product->quant); ?></td>
            <td width="90" style="text-align:center"><?php
               /* if ($product['min_quant'] > $product['quant']) {
                    echo '<span style="color:red">' . ($product['min_quant']) . '</span>';
                } else {
                    echo $product['min_quant'];
                } */
                ?></td>
            <td width="160">
                <div class="button button_small"><a href="url('/inventory/edit', $product->id)}}">Editar</a></div>

            <form method="POST" action="<?php echo e(url('/inventory/destroy', $product->id)); ?>">
                <input type="hidden" name="_method" value="DELETE">
                <?php echo e(csrf_field()); ?>

                <button class="button button_small" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
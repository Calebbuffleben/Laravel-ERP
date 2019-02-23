<?php $__env->startSection('conteudo'); ?>
<h1>Vendas</h1>

<div class="button"><a href="<?php echo e(url('/sales/add')); ?>">Adicionar Venda</a></div>

<table border="0" width="100%">
    <tr>
        <th>Nome do Cliente</th>
        <th>Data</th>
        <th>Status</th>
        <th>Valor</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $sales_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($sale_item->name); ?> </td>
            <td><?php echo date('d/m/Y', strtotime($sale_item['date_sale'])); ?></td>
            <td><?php// echo $statuses[$sale_item['status']]; ?></td>
            <td>R$ <?php echo number_format($sale_item['total_price'], 2, ',', '.'); ?></td>
            <td>
                <div class="button button_small"><a href="">Editar</a></div>
                <?php if (!empty($sale_item['nfe_key'])): ?>
                    <div class="button button_small"><a target="_blank" href="<?php// echo base_url; ?>/sales/view_nfe/<?php echo $sale_item['nfe_key']; ?>">Visualizar Nota</a></div>
                <?php else: ?>
                    <div class="button button_small"><a target="_blank" href="<?php// echo base_url; ?>/sales/generate_nfe/<?php echo $sale_item['id']; ?>">Emitir NF-e</a></div>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
</table>
<?php echo $sales_list->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
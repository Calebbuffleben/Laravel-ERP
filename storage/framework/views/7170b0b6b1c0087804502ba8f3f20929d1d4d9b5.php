<?php $__env->startSection('conteudo'); ?>
<h1>Clientes</h1>
<div class="button"><a href="<?php echo e(URL('/clients/add')); ?>">Adicionar Cliente</a></div>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th>Estrelas</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($client->name); ?></td>
        <td width="100"><?php echo e($client->phone); ?></td>
        <td width="150"><?php echo e($client->address_city); ?></td>
        <td width="70" style="text-align:center"><?php echo e($client->stars); ?></td>
        <td width="160" style="text-align:center">
            <?php // if ($edit_permission): ?>
            <div class="button button_small"><a href="<?php echo e(url('/clients/edit', $client->id)); ?>">Editar</a></div>
            <form method="POST" action="<?php echo e(url('/clients/destroy', $client->id)); ?>">
                <input type="hidden" name="_method" value="DELETE">
                <?php echo e(csrf_field()); ?>

                <button class="button button_small" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
            <?php // else: ?>
            <div class="button button_small"><a href="<?php echo e(url('/clients/show', $client->id)); ?>">Visualizar</a></div>
            <?php // endif; ?>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $clients->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
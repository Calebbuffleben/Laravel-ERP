<?php $__env->startSection('conteudo'); ?>
<h1>Fornecedores</h1>
<div class="button"><a href="<?php echo e(url('/providers/add')); ?>">Adicionar Fornecedor</a></div>

<input type="text" id="busca" data-type="search_clients" />

<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($provider->name); ?></td>
        <td width="100"><?php echo e($provider->phone); ?></td>
        <td width="150"><?php echo e($provider->email); ?></td>
        <td width="160" style="text-align:center">
            <div class="button button_small"><a href="<?php echo e(url('/providers/edit', $provider->id)); ?>">Editar</a></div>
            <form method="POST" action="<?php echo e(url('/providers/destroy', $provider->id)); ?>">
                <input type="hidden" name="_method" value="DELETE">
                <?php echo e(csrf_field()); ?>

                <button class="button button_small" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo $providers->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
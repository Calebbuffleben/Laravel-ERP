<?php $__env->startSection('conteudo'); ?>
<h1>Usuários</h1>
<div class="button"><a href="<?php echo e(URL('/users/add')); ?>">Adicionar Usuário</a></div>

<table border="0" width="100%">
    <tr>
        <th>Nome de usuário</th>
        <th>Grupo de Permissões</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
        <tr>
            <td><?php echo e($us->name); ?></td>
            <td width="200">Grupo 1</td>
            <td width="160">
                <div class="button button_small"><a href="<?php echo e(url('/users/edit', $us->id)); ?>">Editar</a></div>
                <form method="POST" action="<?php echo e(url('/users/destroy', $us->id)); ?>">
                <input type="hidden" name="_method" value="DELETE">
                <?php echo e(csrf_field()); ?>

                <button class="button button_small" type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</button>
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;
</table>
<?php echo $user->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
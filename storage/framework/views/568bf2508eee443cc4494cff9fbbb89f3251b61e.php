<?php $__env->startSection('conteudo'); ?>
<h1>Usuários - <?php echo e($title); ?></h1>
<?php if(isset($errors) && count($errors) > 0): ?> 
<div class="warn">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($error); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php if(isset($user)): ?>
<form method="POST" action="<?php echo e(url('/users/update', $user->id)); ?>">
    <?php else: ?>
    <form method="POST" action="<?php echo e(url('/users/store')); ?>">
        <?php endif; ?>
        <?php echo e(csrf_field()); ?>


        <label for="name">Email</label><br/>
        <input class="email" type="email" name="email" required value="<?php echo e(isset($user->email) ? $user->email : old('email')); ?>" /><br/><br/>

        <label for="email">Nome de usuário</label><br/>
        <input class="email" type="text" name="name" required value="<?php echo e(isset($user->name) ? $user->name : old('name')); ?>"/><br/><br/>

        <label for="password">Senha</label><br/>
        <input class="text" type="password" name="password" required value="<?php echo e(isset($user->password) ? $user->password : old('password')); ?>"/><br/><br/>

        <!-- <label for="group">Grupo de Permissões</label><br/>
         <select name="group" id="group" required>
        <?php //foreach ($group_list as $g): ?>
                 <option value="<?php // echo $g['id'];  ?>"><?php // echo $g['name'];  ?></option>
        <?php // endforeach; ?>
         </select><br/><br/> -->

        <input type="submit" value="Enviar" />

    </form>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
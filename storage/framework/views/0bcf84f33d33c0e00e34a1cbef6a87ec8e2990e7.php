<?php $__env->startSection('conteudo'); ?>
<h1>Fornecedores - <?php echo e($title); ?></h1>

<?php if(isset($errors) && count($errors) > 0): ?> 
<div class="warn">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($error); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<?php if(isset($provider)): ?>
<form method="POST" action="<?php echo e(url('/providers/update', $provider->id)); ?>">
    <?php else: ?>
    <form method="POST" action="<?php echo e(url('/providers/store')); ?>">
        <?php endif; ?>

        <?php echo e(csrf_field()); ?>

        <label for="name">Nome</label><br/>
        <input type="text" name="name" required value="<?php echo e(isset($provider->name) ? $provider->name : old('name')); ?>"/><br/><br/>
        <label for="email">Email</label><br/>
        <input type="text" name="email" required value="<?php echo e(isset($provider->provider) ? $provider->provider : old('email')); ?>"/><br/><br/>
        <label for="phone">Telefone</label><br/>
        <input type="text" name="phone" required value="<?php echo e(isset($provider->phone) ? $provider->phone : old('phone')); ?>"/><br/><br/>

        <input type="submit" value="Enviar" />
    </form>
    <script type="text/javascript" src="/assets/js/script_providers_add.js"></script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
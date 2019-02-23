<?php $__env->startSection('conteudo'); ?>
<h1>Produtos - <?php echo e($title); ?></h1>

<?php if(isset($errors) && count($errors) > 0): ?> 
<div class="warn">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($error); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<?php if(isset($inventory)): ?>

<form method="POST" action="<?php echo e(url('/inventory/update', $inventory->id)); ?>">
    <?php else: ?>
    <form method="POST" action="<?php echo e(url('/inventory/store')); ?>">
    <?php endif; ?>

    <?php echo e(csrf_field()); ?>


    <label for="name">Nome</label><br/>
    <input type="text" name="name" required value="<?php echo e(isset($inventory->name) ? $inventory->name : old('name')); ?>"/><br/><br/>

    <label for="price">Preço</label><br/>
    <input type="text" name="price" required value="<?php echo e(isset($inventory->price) ? $inventory->price : old('price')); ?>"/><br/><br/>

    <label for="quant">Quantidade em Estoque</label><br/>
    <input type="number" name="quant" required value="<?php echo e(isset($inventory->quant) ? $inventory->quant : old('quant')); ?>"/><br/><br/>

    <label for="min_quant">Quantidade Mínima em Estoque</label><br/>
    <input type="number" name="min_quant" required value="<?php echo e(isset($inventory->min_quant) ? $inventory->min_quant : old('min_quant')); ?>"/><br/><br/>

    <input type="submit" value="Adicionar" />

</form>
<script type="text/javascript" src="<?php echo base_url; ?>/assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo base_url; ?>/assets/js/script_inventory_add.js"></script>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('conteudo'); ?>
<h1>Cliente - <?php echo e($title); ?></h1>
<p><b>Nome: </b><?php echo e($client->name); ?></p>
<p><b>Email: </b><?php echo e($client->email); ?></p>
<p><b>Telefone: </b><?php echo e($client->phone); ?></p>
<p><b>Cidade: </b><?php echo e($client->address_city); ?></p>
<p><b>CEP: </b><?php echo e($client->address_citycode); ?></p>
<p><b>Estado: </b><?php echo e($client->address_state); ?></p>
<p><b>Endereço: </b><?php echo e($client->address); ?></p>
<p><b>Complemento: </b><?php echo e($client->address2); ?></p>
<p><b>Número: </b><?php echo e($client->address_number); ?></p>
<p><b>Bairro: </b><?php echo e($client->address_neighb); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('conteudo'); ?>
<h1>Clientes - <?php echo e($title); ?></h1>

<?php if(isset($errors) && count($errors) > 0): ?> 
<div class="warn">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($error); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<?php if(isset($client)): ?>
<form method="POST" action="<?php echo e(url('/clients/update', $client->id)); ?>">
<?php else: ?>
<form method="POST" action="<?php echo e(url('/clients/store')); ?>">
<?php endif; ?>

    <?php echo e(csrf_field()); ?>

    <label for="name">Nome</label><br/>
    <input type="text" name="name" required value="<?php echo e(isset($client->name) ? $client->name : old('name')); ?>"/><br/><br/>

    <label for="email">E-mail</label><br/>
    <input type="email" name="email" value="<?php echo e(isset($client->email) ? $client->email : old('email')); ?>"/><br/><br/>

    <label for="phone">Telefone</label><br/>
    <input type="text" name="phone" value="<?php echo e(isset($client->phone) ? $client->phone : old('phone')); ?>"/><br/><br/>

    <label for="stars">Estrelas</label><br/>
    <select name="stars" id="stars">
        <option value="1" <?php if(isset($client) && ($client->stars == 1)): ?> selected <?php endif; ?> >1 Estrelas</option>
        <option value="2" <?php if(isset($client) && ($client->stars == 2)): ?> selected <?php endif; ?>>2 Estrelas</option>
        <option value="3" <?php if(empty($client) || ($client->stars == 3)): ?> selected <?php endif; ?>>3 Estrelas</option>
        <option value="4" <?php if(isset($client) && ($client->stars == 4)): ?> selected <?php endif; ?> >4 Estrelas</option>
        <option value="5" <?php if(isset($client) && ($client->stars == 5)): ?> selected <?php endif; ?>>5 Estrelas</option>
    </select><br/><br/>

    <label for="internal_obs">Observações Internas</label><br/>
    <textarea name="internal_obs" id="internal_obs"></textarea><br/><br/>

    <label for="address_zipcode">CEP</label><br/>
    <input type="text" name="address_zipcode" required value="<?php echo e(isset($client->address_zipcode) ? $client->address_zipcode : old('address_zipcode')); ?>"/><br/><br/>

    <label for="address">Rua</label><br/>
    <input type="text" name="address" value="<?php echo e(isset($client->address) ? $client->address : old('address')); ?>"/><br/><br/>

    <label for="address_number">Número</label><br/>
    <input type="text" name="address_number" value="<?php echo e(isset($client->address_number) ? $client->address_number : old('address_number')); ?>"/><br/><br/>

    <label for="address2">Complemento</label><br/>
    <input type="text" name="address2" value="<?php echo e(isset($client->address2) ? $client->address2 : old('address2')); ?>"/><br/><br/>

    <label for="address_neighb">Bairro</label><br/>
    <input type="text" name="address_neighb" value="<?php echo e(isset($client->address_neighb) ? $client->address_neighb : old('address_neighb')); ?>"/><br/><br/>
    
    <label for="address_city">Cidade</label><br/>
    <input type="text" name="address_city" value="<?php echo e(isset($client->address_city) ? $client->address_city : old('address_city')); ?>"/><br/><br/>
    
    <label for="address_state">Estado</label><br/>
    <input type="text" name="address_state" value="<?php echo e(isset($client->address_state) ? $client->address_state : old('address_state')); ?>"/><br/><br/>

 <!--    <label for="address_state">Estado</label><br/>
    <select name="address_state" onchange="changeState(this)">
        <?php // foreach ($states as $state): ?>
        <option value="RS<?php //echo $state['Uf'];  ?>"><?php // echo $state['Uf']; ?></option>
        <?php // endforeach; ?>        
    </select><br/><br/> -->

 <!--   <label for="address_city">Cidade</label><br/>
    <select name="adress_city">
        <option value="Três " ></option>
    </select> -->
    <label for="address_country">País</label><br/>
    <input type="text" name="address_country" value="<?php echo e(isset($client->address_country) ? $client->address_country : old('address_country')); ?>"/><br/><br/>


    <input type="submit" value="Enviar"/>

</form>
<?php $__env->stopSection(); ?>
<script type="text/javascript" src="<?php// echo base_url; ?>/assets/js/script_clients_add.js"></script>
<?php echo $__env->make('template/template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
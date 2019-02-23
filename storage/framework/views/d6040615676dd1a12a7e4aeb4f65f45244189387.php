<?php $__env->startSection('content'); ?>
<div class="db-row row1">
    <div class="grid-1">
        <div class="db-grid-area">
            <div class="db-grid-area-count"><?php //echo $products_sold; ?></div>
            <div class="db-grid-area-legend">Produtos Vendidos</div>
        </div>
    </div>
    <div class="grid-1">
        <div class="db-grid-area">
            <div class="db-grid-area-count">R$ <?php // echo number_format($revenue, 2); ?></div>
            <div class="db-grid-area-legend">Receitas</div>
        </div>
    </div>
    <div class="grid-1">
        <div class="db-grid-area">
            <div class="db-grid-area-count">R$ <?php // echo number_format($expenses, 2); ?></div>
            <div class="db-grid-area-legend">Despesas</div>
        </div>
    </div>
</div>
<div class="db-row row2">
    <div class="grid-2">
        <div class="db-info">
            <div class="db-info-title">Despesas e Receitas dos Últimos 30 dias</div>
            <div class="db-info-body" style="height:350px">
                <canvas id="rel1"></canvas>
            </div>
        </div>
    </div>
    <div class="grid-1">
        <div class="db-info">
            <div class="db-info-title">Status de Pgto.</div>
            <div class="db-info-body" style="height:350px">
                <canvas id="rel2" height="300"></canvas>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Informe abaixo os dados do cliente
                <a href="<?php echo e(url('home')); ?>"> Listagem de Clientes!</a>
                </div>

                <div class="card-body">

                    <?php if(Session::has('Sucesso')): ?>
                        <div class="alert alert-sucess"> <?php echo e('Sucesso'); ?></div>

                    <?php endif; ?>
                  <?php echo Form::open(['url' => 'clientes/salvar']); ?>


                  <?php echo Form::label('nome','Nome'); ?>

                  <?php echo Form::input('varchar','nome', '', ['class' => 'form-control', 'autofocus']); ?>

                  

                  <?php echo Form::label('endereco','Endereco'); ?>

                  <?php echo Form::input('varchar','endereco', '', ['class' => 'form-control']); ?>



                  <?php echo Form::label('email','Email'); ?>

                  <?php echo Form::input('varchar','email', '', ['class' => 'form-control']); ?>

                  
                  <?php echo Form::submit('Salvar',['class' => 'btn btn-primary']); ?>



                  <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
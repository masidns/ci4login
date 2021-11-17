<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        testing : <?= $tess; ?>
    </div>
    <!-- /.container-fluid -->
</section>
<?= $this->endsection(); ?>
<h1>
    <?= esc($title) ?>
</h1>
<?= $this->renderSection('content') ?>
<?= $this->include('/templates/navbar_user') ?>
<div>
    <!-- knten -->
    <?= $this->section('content') ?>

</div>
<?= $this->endSection() ?>
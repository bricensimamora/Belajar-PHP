<!-- Untuk mengextend file template sebagai headaer and footer -->
<?php echo $this->extend('layout/template');?>

<!-- Untuk menunjukkan bahwa section content adalah yang dibawah -->
<?php echo $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col">    
        <h1>Hello, world!</h1>
        </div>
    </div>
</div>
<!-- Ini penutup untuk section content -->
<?php echo $this->endSection();?>
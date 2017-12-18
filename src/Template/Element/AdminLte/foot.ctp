<?= $this->Html->script("/bower/jquery/dist/jquery.min");?>
<?= $this->Html->script("/bower/bootstrap/dist/js/bootstrap.min");?>
<?= $this->Html->script("/bower/jquery-slimscroll/jquery.slimscroll.min");?>
<?= $this->Html->script("/bower/fastclick/lib/fastclick");?>
<?= $this->Html->script("/bower/admin-lte/dist/js/adminlte.min.js");?>
<?= $this->Html->script("/bower/admin-lte/dist/js/demo.js");?>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
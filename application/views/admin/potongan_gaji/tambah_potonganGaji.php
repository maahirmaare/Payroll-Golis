<form method="post" id="form">
    <div class="form-group">
        <label for="email">Pay Cuts</label>
        <input type="text" class="form-control"  name="potongan" placeholder="Enter salary deduction">
    </div>
    <div class="form-group">
        <label for="email">Total</label>
        <input type="text" class="form-control"  name="jml_potongan" placeholder="Enter Number of pay cuts">
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Add</button>
</form>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tombol_tambah").click(function(){
            var data = $('#form').serialize();
            $.ajax({
                type	: 'POST',
                url	: "<?php echo base_url(); ?>admin/potongan_gaji/simpanPotongan",
                data: data,
                cache	: false,
                success	: function(data){
                    $('#tampil').load("<?php echo base_url(); ?>admin/potongan_gaji/tampilPotongan");
                }
            });
        });
    });
</script> 
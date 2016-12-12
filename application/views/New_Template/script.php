<script type="text/javascript">
  $(document).ready(function(){
    $('#time').bootstrapMaterialDatePicker
    ({
      date: false,
      shortTime: false,
      format: 'HH:mm'
    });
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myLogIn').focus()
	})

  });

</script>


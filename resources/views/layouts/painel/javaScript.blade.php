
<!--INCLUSÃO DE ARQUIVOS JAVA SCRIPT -->
<!-- jQuery -->
<script src="{{ asset('template_Admin_lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template_Admin_lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template_Admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('template_Admin_lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('template_Admin_lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('template_Admin_lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('template_Admin_lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('template_Admin_lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('template_Admin_lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('template_Admin_lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('template_Admin_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('template_Admin_lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template_Admin_lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template_Admin_lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('template_Admin_lte/dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template_Admin_lte/dist/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('template_Admin_lte/dist/js/bootstrap-multiselect.js')}}"></script>



<script type="text/javascript">
  $(document).ready(function(){
      $('#colors').multiselect({
        buttonWidth:'470px',
        includeSelectAllOption:true,
        
      });
  });
</script>

<script>
  var incrementButton=getElementsByClassName('inc');
  var decrementButton=getElementsByClassName('dec');

  // console.log(incrementButton);
  // console.log(decrementButton);

  for(var i; i<incrementButton.length; i++){
      var button=incrementButton[i];
      button.addEventListener('click', function(event){
        var buttonClicked= event.target;
        // console.log(buttonClicked);
        var input=buttonClicked.parentElement.children[01]
        var inputValue=input.value;
        var newValue=parseInt(inputValue) + 1; 
        input.value=newValue;
      })
  }
</script>
<footer class="cm-footer"><span class="pull-left"></span><span class="pull-right">&copy;Energy Market Expertise</span></footer>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.cookie.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/clearmin.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/home.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/summernote.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-multiselect.js"></script>
        <script type="text/javascript" src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">
           $.noConflict();
            $(document).ready(function(){
                $('#myTable').DataTable();
                $('#userMultislct').multiselect();
            });
        </script>
        <script type="text/javascript">
          $( function() {
             $.noConflict();
            $("#datepicker").datepicker({minDate: 0});
            $('.roundTimeExample').timepicker({
             timeFormat:'H:i'});
                CKEDITOR.replace('content');

          } );
        </script>
    </body>
</html>

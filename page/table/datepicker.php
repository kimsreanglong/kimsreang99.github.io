

        
        <form action="process_date.php" method="post">
            <div class="form-group">
                <label for="datepicker" class="form-label">Select Date of Birth</label>
                <input type="text" class="form-control" id="datepicker" name="txtDOB">
            </div>
  


    <script>
        $(document).ready(function(){
            $('#datepicker').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>





<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Datepicker -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js' type='text/javascript'></script>

<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release-datepicker" name="release_date" placeholder="Select Release Date">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#release-datepicker').datepicker(); 
    });
</script>
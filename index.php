<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="dist/animate-css/animate.css">
    <style type="text/css">
      .headers{
        font-size: 50px;
        margin: 90px 20px 10px 20px;
        font-family: 'corbel';
      }
      label{
        color: white;
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
      }
      h2{
         color: white;
        font-weight: bold;
        text-shadow: 3px 3px 4px #000000;
      }
      table{
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
      }
      .footer {
      position: fixed;
      bottom: 0px;
      width: 100%;
      height: 30px; /* Set the fixed height of the footer here */
      line-height: 30px; /* Vertically center the text there */
      background-color: #ccffff;
    }
    </style>
  </head>
  <body style="background-color: #008080">
    <div class="container">
    <h2 class="headers text-center">Normal Probability Distribution</h2>
       <div class="row">

          <div class="col-lg-5 col-md-5 col-sm-12"  style="margin-top:80px">
          <form id="compute" autocomplete="off">
            <div class="form-group">
              <label  id="label_mean">Mean</label>
              <input type="text" onkeypress="return numberOnly(event)" name="m" class="form-control" placeholder="Enter Mean">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label id="label_sd">Standard Deviation</label>
              <input type="text" onkeypress="return numberOnly(event)" name="sd" class="form-control" placeholder="Enter Standard Deviation">
            </div>
          <div class="row">
             <div class="col-lg-5">
              <div class="form-group">
              <label style="font-size: 13px">Above | Below | Between</label>
              <select name="option" id="select" class="form-control">
                <option></option>
                <option value="Above">Above</option>
                <option value="Below">Below</option>
                <option value="Between">Between</option>
              </select>
            </div>
           </div>
           <div class="col-lg-7">
               <div class="form-group" id="more">
                <label id="show_label">Label</label>
                <input type="text" onkeypress="return numberOnly(event)" name="p" class="form-control">
               </div>
               <div class="row" id="between-input">
                 <div class="col-lg-6" style="margin-top: 0px">
                 <label id="show_labels"></label>
                   <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">z</span>
                      </div>
                      <input type="text" class="form-control text-center" name="z1">
                    </div>
                 </div>
                 <div class="col-lg-6" style="margin-top: 31px">
                   <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">z</span>
                      </div>
                      <input type="text" class="form-control text-center" name="z2">
                    </div>
                 </div>
               </div>
           </div>
          </div>
            <br>
           <button type="submit" class="btn btn-primary">Submit</button>
           <button type="reset" class="btn btn-warning" style="margin-left: 10px;padding: 6px 20px 6px 20px">Reset</button>
          </form>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="show_me text-center" style="margin-top:80px">
                   <h2 class="lead" style="margin-top:100px;padding: 50px;font-size: 23px">Value in the table correspond to the area under the curve of a standard normal variable for a value at or below z<br><br>
                   <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                    Instruction
                  </button></h2> 
                   

            </div>
          </div>
        </div>
    </div>
    <footer class="footer">
     <div class="container">
       <span class="text-primary"><b>Members : [</b> <b>Franze Marie Bermejo</b> | <b> Raymart Ruiz</b> |<b> Michael Flora ]</b></span>
       <span class="text-info" style="float: right;"><b>BSIT-2B</b></span>
     </div>
    </footer>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Instruction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        User must input a number for <b>mean</b>, <b>standard deviation</b>, and <b>x</b>. But the number for mean and standard deviation should not be a negative number. And must select if x is above, below, or between z.
For between: the range of <b>Z-Table</b> is only from <b>0.0</b> to <b>3.49</b> only.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.js"></script>
    
    <script type="text/javascript">
    function numberOnly(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)) 
                return false;
            return true;
        }
    $('#between-input').hide();
     $('button[type="reset"]').on('click',function(){
          $('.show_me').hide();
      });
     $('#select').on('change',function(){
          if (this.value!='') {
            $('#show_label').text(this.value);
          }else{
             $('#show_label').text("Label");
          }
      });
      $('#select').on('change',function(){
          if (this.value=="Between") {
               $('#more').hide();
               $('#show_labels').text(this.value);
               $('#between-input').show();
               $('input[name="m"]').prop('disabled',true);
               $('input[name="sd"]').prop('disabled',true);
               $('input[name="m"]').val('');
               $('input[name="sd"]').val('');
               $('input[name="p"]').val('');
          }
          if (this.value=="Below" || this.value=="Above") {
               $('#more').show();
               $('#between-input').hide();
               $('input[name="m"]').prop('disabled',false);
               $('input[name="sd"]').prop('disabled',false);
          }
      });
      $('#compute').on('submit',(function(e){
        e.preventDefault();
         $.ajax({
            url: "process.php",   
            type: "POST",                     
            data: new FormData(this),        
            contentType: false,        
            cache: false,                  
            processData:false,        
            success: function(data){
            $('.show_me').show();
            $('.show_me').html(data);
          },
        });
      }));    
    </script>
  </body>
</html>

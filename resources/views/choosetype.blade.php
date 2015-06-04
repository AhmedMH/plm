  @extends('common')

  @section('content')
  <style type="text/css">
    .btn-radio {
    width: 100%;
    margin-bottom: 5px;
  }
  .img-radio {
    opacity: 0.4;
    margin-bottom: 5px;
    cursor: pointer;
  /*  height: 291px;
    width: 291px;*/
  }
  .div-radio
  {

    min-height:200px;
  }


  </style>
  <script type="text/javascript">
    
    $(function () {
       $('.btn-radio').children('i').hide(); 
     $('.img-radio').click(function(e) {
       $(this).siblings('button').trigger('click');
     });
      $('.btn-radio').click(function(e) {
        $('#cont').removeClass('disabled');
        $('.btn-radio').not(this).addClass('btn-info');
        $('.btn-radio').not(this).children('i').hide();  
          $('.btn-radio').not(this).removeClass('active')
              .siblings('div .img-radio').css('opacity','0.5');
        $(this).removeClass('btn-info');
        $(this).addClass('active btn-primary')
                .siblings('div .img-radio').css('opacity','1');
                $('#typeid').val($(this).attr('data-type'));
                $('#typename').html(' a '+$(this).attr('data-name'));
                  $(this).children('i').show();  
      });
  });
  </script>


      <div class="row" >
          <div class="col-md-7 center-block" style="float:none;">
           <h2 class="sign-up-title" style="color:dimgray; text-align: center">You are<span id="typename">! Choose your user type</span></h2>
          <hr style="height: 5px;
    border-top: 0;
    background: #669AE1;
    border-radius: 5px;">
             <form  action="{{ url('/choosetype') }}" autocomplete="off" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden"  name="type" id="typeid">
              <div class="row">
                <div class="col-xs-6">
                  <button type="button" data-type="1"  data-name="Professor" class="btn btn-info btn-lg btn-radio"><i class="fa fa-check" style=""></i> Professor</button>
                </div>
                <div class="col-xs-6">
                  <button type="button" data-type="2" data-name="Student" class="btn btn-info btn-lg btn-radio"><i class="fa fa-check" style=""></i> Student</button>
                </div>
              </div>
              <div class="row" style="margin-top:30px;">
                <div class="col-xs-6 relative img-responsive  div-radio">                
                  <img src="https://cdn4.iconfinder.com/data/icons/LUMINA/education_icons/png/400/teacher.png"  class="img-responsive img-radio">
                </div>
                <div class="col-xs-6 relative img-responsive  div-radio ">
                  <img src="https://cdn4.iconfinder.com/data/icons/SIGMA/education_icons/png/400/elementary_school.png" class="img-responsive img-radio">
                </div>
              </div>
             <br>
              </div>
              <div class="col-md-4 col-md-offset-4">
              <button class="btn btn-lg btn-success btn-block disabled" id="cont" type="submit">Save & Continue <i class="fa fa-arrow-right"></i></button>
              </div>
            </form>
          </div>
      </div>
  <!-- {{ old('role') }} -->
  @endsection

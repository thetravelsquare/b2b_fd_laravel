<style>
  .error {
      position: relative;
      text-align: left
  }
  .error span {
      position: fixed;
      font-weight: bold;
      font-size: 20px;
      padding: 10px;
      width: 400px;
  }
  .error .fading-error-span  {
      top: 10%; 
      right: 0; 
      background-color:#e63946;
      display: none;
  }
  .error .error-span {
      z-index: 999;
      top: 20%;
      right: -120%; 
      background-color: #ff0000;
      border-radius; 5px;
      padding: 15px;
      color: #fff;
      font-size: 16px;
      border-left: 5px solid #3e4d42;
  }
  .error .success-error-span {
      z-index: 999;
      top: 20%;
      right: -120%; 
      background-color: #36bf5a;
      border-radius; 5px;
      padding: 10px;
      color: #fff;
      font-size: 16px;
      border-left: 5px solid #3e4d42;
  }
  .error .warning-error-span {
      z-index: 999;
      top: 20%;
      right: -120%; 
      background-color: #ffc800;
      border-radius; 5px;
      padding: 15px;
      color: #fff;
      font-size: 16px;
      border-left: 5px solid #3e4d42;
  }
  .error .info-error-span {
      z-index: 999;
      top: 20%;
      right: -120%; 
      background-color: #36bf5a;
      border-radius; 5px;
      padding: 15px;
      color: #fff;
      font-size: 16px;
      border-left: 5px solid #3e4d42;
  }
</style>


<div class="error">
    <span class="fading-error-span">Error with Fading</span>

      @if ($message = Session::get('error'))
        <span class="error-span"><img style="margin-left: 15px; width: 30px; height: 30px;" src="{{ asset('assets/images/icons/un-verified.png') }}"> {{ $message }}</span>
      @endif

      @if ($message = Session::get('success'))
        <span class="success-error-span"><img style="margin-left: 15px; width: 30px; height: 30px;" src="{{ asset('assets/images/icons/success.gif') }}"> {{ $message }}</span>
      @endif
         
      @if ($message = Session::get('warning'))
        <span class="warning-error-span"><img style="margin-left: 15px; width: 30px; height: 30px;" src="{{ asset('assets/images/icons/warning.png') }}"> {{ $message }}</span>
      @endif
         
      @if ($message = Session::get('info'))
        <span class="info-error-span"><img style="margin-left: 15px; width: 30px; height: 30px;" src="{{ asset('assets/images/icons/failed.gif') }}"> {{ $message }}</span>
      @endif
        
      @if ($errors->any())
      <div class="alert alert-danger">
          <!-- <button type="button" class="close" data-dismiss="alert">×</button>     -->
          <!-- Please check the form below for errors -->
      </div>
      @endif
  </div>


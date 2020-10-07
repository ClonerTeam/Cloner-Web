<!DOCTYPE html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title  -->
        <title>Cloner.xyz</title>

        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('img/favicon.png') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    </head>

    <div class="block block-fx-pop">
      <div class="block-content block-content-full">
          <form method="post">
              @csrf
              <div class="form-group row text-center">
                  <div class="col-20">
                      <label>Tokens</label>
                      <textarea  class="form-control text-center" name="tokens" rows="10" cols="100"></textarea>
                  </div>
              </div>
              <center><button type="submit" name="modify" class="btn btn-hero-sm btn-hero-primary mt-2">Add</button></center>
          </form>
      </div>
  </div>

  <script src="{{ asset('js/jquery/jquery-3.3.1.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
      $(document).ready(function() {
          toastr.options.closeButton = true;
          toastr.options.closeMethod = 'fadeOut';
          toastr.options.closeDuration = 500;
          toastr.options.closeEasing = 'swing';
          @if(session('success'))
              toastr.success("{{ session('success') }}", "Succès !")
          @endif

          @if(session('error'))
              toastr.error("{{ session('error') }}", "Erreur !")
          @endif
      });
  </script>

</html>

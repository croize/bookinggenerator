<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @if(Session::get('message') != NULL)
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          https://api.whatsapp.com/send?phone=6287878788088&text=*Saya%20minat%20untuk%20order%20paket%20Beautysky*%0D%0A%0D%0ANama%20:%0D%0AAlamat:%0D%0AKode%20pos:%0D%0AKecamatan:%0D%0AKabupaten:%0D%0AProvinsi:%0D%0ANo%20HP:%0D%0AJenis%20paket:%20Acne%20series%20/%20Whitening%20care%0D%0AJumlah%20paket:{{ Session::get('message') }}
    </div>
    @endif
    <form class="" action="/test" method="post">
      {{csrf_field()}}
      <input type="text" name="name" value="">
      <input type="submit" name="" value="Submit">
    </form>
  </body>
</html>

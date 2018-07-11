<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="/booking/create" method="post">
      {{csrf_field()}}
      Date
      <input type="date" name="date" value=""><br>
      Activity
      <select class="" name="activity_id">
        @foreach($as as $uu)
          <option value="{{$uu->id}}">{{$uu->name_activity}}</option>
        @endforeach
      </select>
      
    </form>

  </body>
</html>

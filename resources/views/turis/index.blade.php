@extends('layouts.utama')

@section('css')
<link rel="stylesheet" href="{{url('assetdashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{url('assetdashboard/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{url('assetdashboard/bower_components/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">
@endsection

@section('js')
<script src="{{url('assetdashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('assetdashboard/bower_components/moment/moment.js')}}"></script>
<script src="{{url('assetdashboard/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<!-- Page script -->
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd',
    })
  })
</script>
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : [
        @foreach($status as $ce)
        {
          title          : '{{$ce->activity['name']}}',
          start          : new Date({{date('Y',strtotime($ce->tanggal)) }}, {{date('n',strtotime($ce->tanggal))-1 }}, {{date('j',strtotime($ce->tanggal)) }}),
          allDay         : false,
          backgroundColor: @if($ce->batas_orang == $ce->total_turis)'red'@elseif($ce->batas_orang < $ce->total_turis)'green'@endif, //Blue
          borderColor    : @if($ce->batas_orang == $ce->total_turis)'red'@elseif($ce->batas_orang < $ce->total_turis)'green'@endif //Blue
        },
        @endforeach
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
@endsection

@section('title')
  Book Activity
@endsection

@section('content')
<div class="row">
  <div class="col-md-4">
    <!-- Box Comment -->
    <div class="box box-widget">
      <div class="box-header with-border">
        <div class="user-block">
          <img class="img-circle" src="{{url('assetdashboard/dist/img/user1-128x128.jpg')}}" alt="User Image">
          <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
          <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
            <i class="fa fa-circle-o"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <img class="img-responsive pad" src="http://pranasanti.com/yoga/wp-content/uploads/2015/01/luh-manis36.jpg" alt="Photo">

        <p>I took this photo this morning. What do you guys think?</p>
      </div>
      <div class="box-footer">
        <form action="#" method="post">
          <img class="img-responsive img-circle img-sm" src="{{url('assetdashboard/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push">
            <input type="text" class="form-control input-sm" placeholder="Coming Soon"  disabled>
          </div>
        </form>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
  <div class="col-md-4">
    <!-- Box Comment -->
    <div class="box box-widget">
      <div class="box-header with-border">
        <div class="user-block">
          <img class="img-circle" src="{{url('assetdashboard/dist/img/user1-128x128.jpg')}}" alt="User Image">
          <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
          <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
            <i class="fa fa-circle-o"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <img class="img-responsive pad" src="http://pranasanti.com/yoga/wp-content/uploads/2017/07/hand.jpg" alt="Photo">

        <p>I took this photo this morning. What do you guys think?</p>
      </div>
      <div class="box-footer">
        <form action="#" method="post">
          <img class="img-responsive img-circle img-sm" src="{{url('assetdashboard/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push">
            <input type="text" class="form-control input-sm" placeholder="Coming Soon"  disabled>
          </div>
        </form>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
  <div class="col-md-4">
    <!-- Box Comment -->
    <div class="box box-widget">
      <div class="box-header with-border">
        <div class="user-block">
          <img class="img-circle" src="{{url('assetdashboard/dist/img/user1-128x128.jpg')}}" alt="User Image">
          <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
          <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>
        <!-- /.user-block -->
        <div class="box-tools">
          <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
            <i class="fa fa-circle-o"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <img class="img-responsive pad" src="{{url('assetdashboard/dist/img/photo2.png')}}" alt="Photo">

        <p>I took this photo this morning. What do you guys think?</p>
      </div>
      <div class="box-footer">
        <form action="#" method="post">
          <img class="img-responsive img-circle img-sm" src="{{url('assetdashboard/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
          <!-- .img-push is used to add margin to elements next to floating images -->
          <div class="img-push">
            <input type="text" class="form-control input-sm" placeholder="Coming Soon" disabled>
          </div>
        </form>
      </div>
      <!-- /.box-footer -->
    </div>
    <!-- /.box -->
  </div>
</div>
<div class="row">
  <div class="col-md-7">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Booking Activity</h3><br>
        <i>You can only select available date. Check date status in calendar before select your date of activity</i>
        @if(Session::get('success') != NULL)
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Alert!</h4>
          {{Session::get('success')}}
        </div>
        @elseif(Session::get('error') != NULL)
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-warning"></i> Alert!</h4>
          {{Session::get('error')}}
        </div>
        @endif
      </div>
      <div class="box-body">
        <form class="" action="/turis/book" method="post">
          {{csrf_field()}}
        <!-- Date -->
          <div class="form-group">
            <label>Date:</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" name="tanggal" id="datepicker">
            </div>
            <!-- /.input group -->
          </div>
          <div class="form-group">
            <label>Activity:</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-ticket"></i>
              </div>
              <select class="form-control pull-right" name="activity">
                <option value="">-select activity</option>
                @foreach($data as $ci)
                  <option value="{{$ci->id}}">{{$ci->name}}</option>
                @endforeach
              </select>
            </div>
            <!-- /.input group -->
          </div>
          <div class="form-group">
            <label>Guest:</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-users"></i>
              </div>
              <input type="number" min="1" name="jumlah_orang" class="form-control pull-right">
            </div>
            <!-- /.input group -->
          </div>
          <input type="submit" class="btn btn-primary" class="pull-right" name="" value="Submit">
          <!-- /.form group -->
        </form>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <div class="col-md-5">
    <div class="box box-primary">
      <div class="box-body">
        <!-- THE CALENDAR -->
        <div id="calendar"></div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /. box -->
  </div>
</div>
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Latest Orders</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="table-responsive">
      <table class="table no-margin">
        <thead>
        <tr>
          <th>Book ID</th>
          <th>Activity</th>
          <th>Booking Date</th>
          <th>Total Person</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach($cekorder as $book)
        <tr>
          <td>BK-{{$book->bookid}}</a></td>
          <td>{{$book->activity['name']}}</td>
          <td>{{date('l,j M Y',strtotime($ce->tanggal)) }}</td>
          <td>{{$book->jumlah_orang}} Guest</td>
          <td>@if($book->status == "0")<span class="label label-warning">Pending</span>@elseif($book->status == "1")<span class="label label-success">Success</span>@endif</td>
          <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20"> <a href="/turis/show/{{$book->bookid}}" class="label label-primary"> <i class="fa fa-eye"></i>  View </a> </div>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
  <!-- /.box-body -->
  <div class="box-footer clearfix">
    <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
    <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
  </div>
  <!-- /.box-footer -->
</div>
@endsection

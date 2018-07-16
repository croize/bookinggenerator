<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/paper-bootstrap-wizard/wizard-create-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Jul 2018 11:45:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="http://pranasanti.com/yoga/wp-content/uploads/2016/02/favicon-1.png" />
	<title>Booking Pranasanti Activity</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

	<!-- CSS Files -->
    <link href="{{url('assetsform/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{url('assetsform/css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{url('assetsform/css/demo.css')}}" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="../../netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="{{url('assetsform/css/themify-icons.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{url('assetdashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{url('assetdashboard/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{url('assetdashboard/bower_components/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">
	</head>

	<body>
	<!-- End Google Tag Manager (noscript) -->
	<div class="full-width" style="">
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container" id="formpage">
		                <div class="card wizard-card" data-color="red" id="wizardProfile">
		                    <form action="/pendaftaran" method="post" enctype="multipart/form-data">
													{{csrf_field()}}
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Booking Pranasanti Activity</h3>
									<p class="category">Please input your data correctly</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="2" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Booking Data
											</a>
										</li>
			                            <li>
											<a href="#ortu" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-money"></i>
												</div>
												Payment
											</a>
										</li>

			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Booking Pranasanti Activity.</h5>
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
                      <div class="col-sm-10 col-sm-offset-1">
                        <div id="calendar"></div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Name <small>(required)</small></label>
													<input name="name" type="text" class="form-control" placeholder="Name">
												</div>
											</div>
                      <div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Guest <small>(required)</small></label>
													<input name="jumlah_orang" type="number" min="1" max="8" class="form-control" placeholder="Guest">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Activity <small>(required)</small></label><br>
													<select class="form-control" name="jk" required>
														<option value="">-choose an activity-</option>
                            @foreach($data as $u)
														<option value="{{$u->id}}">{{$u->name}}</option>
                            @endforeach
													</select>
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Phone Number<small>(required)</small></label>
													<input name="phone" type="number" class="form-control" min="0" placeholder="Nomor Handphone" required>
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Date <small>(required)</small></label>
													<input type="text" class="form-control pull-right" name="tanggal" placeholder="Date" id="datepicker" required>
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="ortu">
		                                <h5 class="info-text"> Ayah</h5>
		                                <div class="row">
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nama <small>(required)</small></label>
																					<input name="nama_ayah" type="text" class="form-control" placeholder="Email">
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nomor Handphone <small>(required)</small></label>
																					<input name="nomor_ayah" type="number" class="form-control" placeholder="Nomor Handphone" required>
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Alamat <small>(required)</small></label>
																					<textarea name="alamat_ayah" class="form-control" rows="8" cols="80" required></textarea>
																				</div>
																			</div>
		                                </div>
																		<h5 class="info-text"> Ibu</h5>
		                                <div class="row">
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nama <small>(required)</small></label>
																					<input name="nama_ibu" type="text" class="form-control" placeholder="Email">
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nomor Handphone <small>(required)</small></label>
																					<input name="nomor_ibu" type="number" class="form-control" placeholder="Nomor Handphone" required>
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Alamat <small>(required)</small></label>
																					<textarea name="alamat_ibu" class="form-control" rows="8" cols="80" required></textarea>
																				</div>
																			</div>
		                                </div>
																		<h5 class="info-text">Wali</h5>
																		<h6 class="info-text">Kosongkan jika tidak ada</h6>
		                                <div class="row">
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nama <small>(required)</small></label>
																					<input name="nama_wali" type="text" class="form-control" placeholder="Email">
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nomor Handphone <small>(required)</small></label>
																					<input name="nomor_wali" type="number" class="form-control" placeholder="Nomor Handphone" >
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Alamat <small>(required)</small></label>
																					<textarea name="alamat_wali" class="form-control" rows="8" cols="80" ></textarea>
																				</div>
																			</div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{url('assetsform/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assetsform/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assetsform/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{url('assetsform/js/demo.js')}}" type="text/javascript"></script>
	<script src="{{url('assetsform/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="{{url('assetsform/js/jquery.validate.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assetdashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('assetdashboard/bower_components/moment/moment.js')}}"></script>
  <script src="{{url('assetdashboard/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
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
          {
            title          : 'cicak cicak',
            start          : new Date(2018, 6, 27),
            allDay         : false,
            backgroundColor: 'green', //Blue
            borderColor    : 'green' //Blue
          },
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


<!-- Mirrored from demos.creative-tim.com/paper-bootstrap-wizard/wizard-create-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Jul 2018 11:45:52 GMT -->
</html>

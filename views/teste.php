
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html DIR='LTR' xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
 <META http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title></title>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="Tue, 04 May 2021 21:56:24 GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="stylesheet" type="text/css" href="/scriptcase/prod/third/jquery_plugin/fullcalendar-3.4.0/fullcalendar.min.css" />
 <link rel="stylesheet" type="text/css" href="/scriptcase/prod/third/jquery_plugin/thickbox/thickbox.css" media="screen" />
 <link rel="stylesheet" type="text/css" href="/scriptcase/app/previsoesProjIntegrado/_lib/css/Sc9_SweetBlue/Sc9_SweetBlue_appcalendar.css" />
 <link rel="stylesheet" type="text/css" href="/scriptcase/app/previsoesProjIntegrado/_lib/css/Sc9_SweetBlue/Sc9_SweetBlue_appcalendarLTR.css" />
 <link rel="stylesheet" type="text/css" href="/scriptcase/app/previsoesProjIntegrado/_lib/buttons/scriptcase9_SweetBlue/scriptcase9_SweetBlue.css" />
 <link rel="stylesheet" type="text/css" href="/scriptcase/prod/third/font-awesome/css/all.min.css" />
 <script type="text/javascript">
  var sc_pathToTB = '/scriptcase/prod/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "Close";
  var sc_tbLangEsc = "or Esc key";
  var sc_userSweetAlertDisplayed = false;
 </script>
 <script type="text/javascript" src="/scriptcase/prod/third/jquery/js/jquery.js"></script>
 <script type="text/javascript" src="/scriptcase/prod/third/jquery_plugin/fullcalendar-3.4.0/lib/moment.min.js"></script>
 <script type="text/javascript" src="/scriptcase/prod/third/jquery/js/jquery-ui.js"></script>
 <script type="text/javascript" src="/scriptcase/prod/third/jquery_plugin/fullcalendar-3.4.0/fullcalendar.min.js"></script>
 <script type="text/javascript" src="/scriptcase/prod/third/jquery_plugin/fullcalendar-3.4.0/gcal.min.js"></script>
 <script type="text/javascript" src="/scriptcase/prod/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<script type="text/javascript">
  function calendarGoBack() {
    document.F6.action = "";
    document.F6.submit();
  }
</script>
<style type="text/css">

@media (max-width: 1200px) {
    .fc-toolbar .fc-center{
        display:none;
    }
}

@media (max-width: 1150px) {
    .fc-toolbar .fc-center{
        display:inline-block !important;
    }

    button.fc-today-button,
    button.fc-print-button,
    button.fc-importGoogle-button,
    button.fc-exportGoogle-button,
    button.fc-month-button,
    button.fc-agendaWeek-button,
    button.fc-agendaDay-button,
    button.fc-listMonth-button {
        background-repeat: no-repeat;
        background-size: 24px;
        background-position: center;
        text-indent: -9999px;
    }

    button.fc-today-button {
        background-image: url(../_lib/img/scriptcase__NM__ico__NM__sc_cal_today.png)!important;
    }

    button.fc-print-button {
        background-image: url(../_lib/img/scriptcase__NM__ico__NM__sc_cal_print.png)!important;
    }

    button.fc-importGoogle-button {
        background-image: url(../_lib/img/scriptcase__NM__ico__NM__sc_cal_down.png)!important;
    }

    button.fc-exportGoogle-button {
        background-image: url(../_lib/img/scriptcase__NM__ico__NM__sc_cal_up.png)!important;
    }

    button.fc-month-button {
        background-image: url(../_lib/img/scriptcase__NM__ico__NM__sc_cal_month.png)!important;
    }

    button.fc-agendaWeek-button {
        background-image: url(../_lib/img/scriptcase__NM__ico__NM__sc_cal_week.png)!important;
    }

    button.fc-agendaDay-button {
        background-image: url(../_lib/img/scriptcase__NM__ico__NM__sc_cal_day.png)!important;
    }

    button.fc-listMonth-button {
        background-image: url(../_lib/img/scriptcase__NM__ico__NM__sc_cal_list.png)!important;
    }
}

@media (max-width: 670px) {
    button.fc-print-button{
        display:none !important;
    }
}

@media (max-width: 853px) {
    .fc-toolbar .fc-center{
        display:none !important;
    }
    button.fc-prev-button,
    button.fc-next-button{
        padding: 2px 5px!important;
    }
}
</style>
 <script type="text/javascript">
  function sc_session_redir(url_redir)
  {
      if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
      {
          window.parent.sc_session_redir(url_redir);
      }
      else
      {
          if (window.opener && typeof window.opener.sc_session_redir === 'function')
          {
              window.close();
              window.opener.sc_session_redir(url_redir);
          }
          else
          {
              window.location = url_redir;
          }
      }
  }
  function calendar_reload() {
    $('#calendar').fullCalendar('refetchEvents');
  }
  function calendar_print() {
      $.ajax({
          url: 'calendar_appointments_staff.php',
          type: 'GET',
          dataType: 'json',
          data: {
              nmgp_opcao: 'calendar_print',
              start: $('#calendar').fullCalendar('getView').start.format(),
              end: $('#calendar').fullCalendar('getView').end.format()
          }
      }).done(function(data) {
          if ('html' == data.outputFormat) {
              var newWindow = window.open('');
              newWindow.document.write(data.printHtml);
              newWindow.document.close();
              newWindow.focus();
          }
          else {
              var newWindow = window.open(data.fileHtml);
          }
          //newWindow.print();
      });
  }
  $(document).ready(function() {
    $('#calendar').fullCalendar({
      monthNames: ["January","February","March","April","May","June","July","August","September","October","November","December"],
      monthNamesShort: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
      dayNames: ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
      dayNamesShort: ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],
      allDayText: "Full day",
      allDayHtml: "Full day",
      noEventsMessage: "No events to display",
      buttonText: {
        today: "Today",
        month: "Month",
        week: "Week",
        day: "Day",
        agenda: "Schedule",
        print: "Print",
        listMonth: "Schedule",
      },
      views: {
        month: {titleFormat: 'MMMM YYYY', columnFormat: 'ddd', timeFormat: 'H:mm',slotLabelFormat: ['ddd','H:mm'],},
        week: {titleFormat: 'MMM D YYYY', columnFormat: 'ddd M/D', timeFormat: 'H:mm',slotLabelFormat: ['ddd M/D','H:mm'],},
        day: {titleFormat: 'dddd[,] MMM D[,] YYYY', columnFormat: 'dddd M/D', timeFormat: 'H:mm',slotLabelFormat: ['dddd M/D','H:mm'],},
      },
      firstDay: 0,
      header: {
        left: 'prev,next today print',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listMonth'
      },
      customButtons: {
        goBack: {
          text: "Back",
          click: function() {
            calendarGoBack();
          }
        },
        print: {
          text: "Print",
          click: function() {
            calendar_print();
          }
        }
      },
      editable: true,
      slotDuration: "00:30:00",
      snapDuration: "00:05:00",
      nextDayThreshold: "00:00:00",
      eventStartEditable: true,
      allDaySlot: false,
      minTime: "08:00",
      maxTime: "18:00",
      noEventsMessage: "No events to display",
      events: 'calendar_appointments_staff.php?script_case_init=9108&nmgp_opcao=calendar_fetch' + getCategory(false),
      eventRender: function (event, element, view) {
        if(event.hasOwnProperty('description') && event.description != '')
        {
            element.find('.fc-title').append('<div class="hr-line-solid-no-margin"></div><span style="font-size: 80%;">'+event.description+'</span></div>');
        }
      },
      dayClick: function(date, jsEvent, view) {
      },
      eventClick: function(calEvent, jsEvent, view) {
        tb_show('', 'calendar_appointments_staff.php?nmgp_opcao=igual_calendar&appointments_id=' + calEvent.id + '&__orig_appointments_id=' + calEvent.id + '&script_case_init=9108&nmgp_outra_jan=true&nmgp_url_saida=modal&TB_iframe=true&modal=true&height=500&width=700', '');
      },
      eventDrop: function(event, delta, revertFunc) {
        $.ajax({
          url: 'calendar_appointments_staff.php',
          type: 'POST',
          dataType: 'json',
          data: { 'script_case_init': '9108', 'nmgp_opcao': 'calendar_drop', 'sc_event_id': event.id, 'sc_day_delta': delta._data.days, 'sc_time_delta': (delta._data.hours * 60) + delta._data.minutes, 'sc_all_day': event.allDay, 'sc_fullcal_start': (event._start && event._start._d ? event._start._d.toISOString() : ''), 'sc_fullcal_end': (event._end && event._end._d ? event._end._d.toISOString() : '') },
          originalEvent: event,
          success: function(data) {
            var bChanged = false;
            if (typeof data['status'] !== "undefined" && false == data['status']) {
              revertFunc();
            }
            else {
              if (typeof data['backgroundColor'] !== "undefined" && '' != data['backgroundColor']) {
                if (this.originalEvent.backgroundColor != data['backgroundColor']) {
                  bChanged = true;
                }
                this.originalEvent.backgroundColor = data['backgroundColor'];
              }
              if (typeof data['borderColor'] !== "undefined" && '' != data['borderColor']) {
                if (this.originalEvent.borderColor != data['borderColor']) {
                  bChanged = true;
                }
                this.originalEvent.borderColor = data['borderColor'];
              }
              if (this.originalEvent.allDay || this.originalEvent.originalAllDay || bChanged) {
                $('#calendar').fullCalendar('refetchEvents');
              }
              else {
                $('#calendar').fullCalendar('updateEvent', this.originalEvent);
              }
            }
            if (typeof data['message'] !== "undefined" && '' != data['message']) {
              alert(data['message']);
            }
          }
        });
      },
      eventResize: function(event, delta, revertFunc) {
        $.post(
          'calendar_appointments_staff.php',
          { 'script_case_init': '9108', 'nmgp_opcao': 'calendar_resize', 'sc_event_id': event.id, 'sc_day_delta': delta._data.days, 'sc_time_delta': (delta._data.hours * 60) + delta._data.minutes, 'sc_fullcal_start': (event._start && event._start._d ? event._start._d.toISOString() : ''), 'sc_fullcal_end': (event._end && event._end._d ? event._end._d.toISOString() : '') },
          function(data) {
            if (false == data['status']) {
              revertFunc();
            }
            if (typeof data['message'] !== "undefined" && '' != data['message']) {
              alert(data['message']);
            }
          },
          'json'
        );
      },
      defaultView: 'month',
    });
  });
  function scAddNewEvent(sDate, sTime, allDay) {
    $("#sc-ui-nmgp_opcao").val("edit_novo");
    $("#sc-ui-click-date").val(sDate);
    $("#sc-ui-click-time").val(sTime);
    $("#sc-ui-click-allday").val(allDay);
    $("#sc-ui-form").submit();
  }
  function scEditEvent(sEventId) {
    $("#sc-ui-nmgp_opcao").val("igual");
    $("#sc-ui-event-id").val(sEventId);
    $("#sc-ui-form").submit();
  }

        function filterCategory(category) {
                if ($("#id_calendar_category_" + category).hasClass('scCalendarCategoryItemActive')) {
                        $("#id_calendar_category_" + category).removeClass('scCalendarCategoryItemActive');
                }
                else {
                        $("#id_calendar_category_" + category).addClass('scCalendarCategoryItemActive');
                }

                refreshFilterCategories();
        }

        function refreshFilterCategories() {
                $('#calendar').fullCalendar('removeEventSource', 'calendar_appointments_staff.php?script_case_init=9108&nmgp_opcao=calendar_fetch' + getCategory(false));

                setCategory();

                $('#calendar').fullCalendar('addEventSource', 'calendar_appointments_staff.php?script_case_init=9108&nmgp_opcao=calendar_fetch' + getCategory(false));
        }

        function setCategory() {
                var selectedCategories = $(".scCalendarCategoryItemActive"), categoryList = new Array(), i;

                for (i = 0; i < selectedCategories.length; i++) {
                        categoryList.push($(selectedCategories[i]).attr("id").substr(21));
                }

                $("#category_filter").val(categoryList.join(")SCCL)"))
        }

        function getCategory(isPrint) {
                var categoryFilter = $("#category_filter");

                if (!categoryFilter.length) {
                        return "";
                }
                else if (isPrint) {
                        return categoryFilter.val();
                }
                else {
                        return "&category=" + categoryFilter.val();
                }
        }
 </script>
</head>
<body class="scAppCalendarPage" style="">
<style type="text/css">
.sc-cal-page-container {
    display: flex;
    flex-direction: row;
}
.sc-cal-side-container {
    display: flex;
    flex-direction: column;
    min-width: 250px;
    max-width: 300px;
}
.sc-cal-calendar-container {
    display: flex;
}
.sc-cal-button-container {
    display: flex;
    margin: 0 0 5px 0;
}
.sc-cal-categories-container {
    overflow: hidden;
    white-space: nowrap;
}
a#id_bcalendargoogleimport {
    white-space: nowrap;
}
a#id_bcalendargoogleexport {
    white-space: nowrap;
}
</style>
<div class='scCalendarBorder sc-cal-page-container'>
    
    <div class="sc-cal-calendar-container">
    <div id="calendar" style=""></div>
    </div>
</div>
<form name="F6" method="post" action="./" target="_self">
  <input type="hidden" name="script_case_init" value="9108" />
</form>
</body>
</html>

<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>

<script src="{{ asset('js/countdown.js') }}"></script>
<script src="{{ asset('js/moments.js') }}"></script>
<script src="{{ asset('js/moment-timezone-with-data.js') }}"></script>



<script>

  var nextYear = moment.tz("2020-03-15 00:00", "Asia/Manila");

  $('#clock').countdown(nextYear.toDate(), function(event) {
  $(this).html(event.strftime('%D DAYS %H HOURS %M MINS %S SECS'));
  });
</script>

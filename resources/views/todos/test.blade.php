<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
div.c {
    font-size: 100px;

}
</style>
</head>
<body>
    <div id="clock" class="c"></div>

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
</body>
</html>

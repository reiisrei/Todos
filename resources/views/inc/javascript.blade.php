<script>
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous">
</script>

<script src="{{ asset('js/countdown.js') }}"></script>
<script src="{{ asset('js/moments.js') }}"></script>
<script src="{{ asset('js/moment-timezone-with-data.js') }}"></script>

<script>

    $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        $this.html(event.strftime(''
        + '<span style="color:black; font-size: 40px; font-weight: 1000;">%-D</span> day%!d '
        + '<span style="color:black; font-size: 40px; font-weight: 900;">%H</span> hr '
        + '<span style="color:black; font-size: 40px; font-weight: 900;">%M</span> min '
        + '<span style="color:black; font-size: 40px; font-weight: 900;">%S</span> sec'));
      });
    });
    </script>


<!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/freelancer.min.js') }}"></script>



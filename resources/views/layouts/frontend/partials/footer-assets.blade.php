


<script>
    var snd; // Declare the audio variable globally

    function sound() {
        if (!snd) {
            snd = new Audio('/khacademy/frontend/assets/letitsnow.mp3'); // wav is also supported
        }

        if (snd.paused) {
            snd.play(); // plays the sound
        } else {
            snd.pause(); // pauses the sound
            snd.currentTime = 0; // resets the audio to the beginning
        }
    }
</script>

    <script>
        function displayMenu() {
            let element = document.getElementById("menu");
            element.classList.toggle("display-menu");
        }
    </script>

  <script>
    const colorRange = document.getElementById('color-range');
    const hero = document.querySelector('.hero');

    // Function to change the background color of the hero div based on the range input
    function changeHeroBackgroundColor() {
      const hue = colorRange.value;
      hero.style.backgroundColor = `hsl(${hue}, 100%, 50%)`;
    }

    colorRange.addEventListener('input', changeHeroBackgroundColor);
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
        
        </script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="{{ URL::asset('frontend/assets/js/script.js') }}"></script>
@stack('js')   
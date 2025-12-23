 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script>
     // Scroll Reveal Script
     window.addEventListener('scroll', reveal);

     function reveal() {
         var reveals = document.querySelectorAll('.reveal');

         for (var i = 0; i < reveals.length; i++) {
             var windowheight = window.innerHeight;
             var revealtop = reveals[i].getBoundingClientRect().top;
             var revealpoint = 150;

             if (revealtop < windowheight - revealpoint) {
                 reveals[i].classList.add('active');
             }
         }
     }

     // Trigger once on load
     reveal();
 </script>

 <script>
     function loadVideo(element, videoId) {
         // 1. Add 'playing' class to hide info cards and buttons
         element.classList.add('playing');

         // 2. Create the iframe
         var iframe = document.createElement('iframe');
         iframe.setAttribute('src', 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0');
         iframe.setAttribute('width', '100%');
         iframe.setAttribute('height', '100%');
         iframe.setAttribute('frameborder', '0');
         iframe.setAttribute('allow',
             'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
         iframe.setAttribute('allowfullscreen', '');

         // 3. Style the iframe to fill the card
         iframe.style.position = 'absolute';
         iframe.style.top = '0';
         iframe.style.left = '0';
         iframe.style.zIndex = '10'; // On top of image

         // 4. Append to the card
         element.appendChild(iframe);
     }
 </script>

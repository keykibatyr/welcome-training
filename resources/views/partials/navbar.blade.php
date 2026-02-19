<nav id="navbar" class="fixed top-0 left-0 w-full bg-sky-600 text-white transition-colors duration-300 z-50">
  <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
    
    <div class="flex gap-6 font-medium">
      <a href="#" class="hover:text-sky-200">Vacancies</a>
      <a href="#" class="hover:text-sky-200">Links</a>
    </div>

    <div class="absolute left-1/2 -translate-x-1/2">
      <img src="/images/KMGE-logo.png" alt="Logo" class="h-11">
    </div>

    <div class="flex gap-4 text-2xl" >
      <a href="#" aria-label="Instagram">
       <i class="fa fa-instagram"></i>
      </a>
      <a href="#" aria-label="Facebook">
        <i class="fa fa-facebook"></i>
      </a>
      <a href="#" aria-label="LinkedIn">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="#" aria-label="YouTube">
        <i class="fa fa-youtube-play"></i>
      </a>
    </div>

  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
      navbar.classList.toggle('bg-sky-900', window.scrollY > 50);
      navbar.classList.toggle('bg-sky-600', window.scrollY <= 50);
    });
  });

//   console.log(window.scrollY);
</script>

@extends('layouts.app')

@section('content')
  {{-- Hero --}}
  <section class="h-screen bg-cover bg-center bg-fixed" style="background-image:url('/images/kmg_engineering_cover.jpeg')">
    <div class="h-screen flex flex-col bg-black/40 text-center">
      <div class="h-screen pt-16 flex-grow flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold text-white">
          WelcomeTraining Platform
        </h1>
        <p class="text-white/90 max-w-xl mx-auto">
          Internal onboarding, vacancies, and useful resources in one place.
        </p>
      </div>

    <div class="h-full flex flex-col justify-center items-center pb-10">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-11 h-11 text-white">
      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
    </svg>
  </div>

    </div>
  </section>

  {{-- Content below --}}
  <section id="about" class="bg-white py-16">
    <div class="max-w-5xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-sky-700 mb-6">About KMGE</h2>

      <div class="prose max-w-none">
        {{-- Our Mission --}}
        <div class="bg-sky-50 p-6 rounded-lg mb-6">
          <h3 class="text-xl font-semibold text-sky-700 mb-3">Our Mission</h3>
          <p class="text-gray-700">
            KMGE is dedicated to excellence in development and innovation. We strive to create
            cutting-edge solutions while fostering a collaborative and inclusive work environment
            where every team member can thrive and grow.
          </p>
        </div>

        {{-- Vision and Values Grid --}}
        <div class="grid md:grid-cols-2 gap-6 mb-6">
          <div class="bg-gradient-to-br from-sky-600 to-sky-700 text-white p-6 rounded-lg opacity-75">
            <h4 class="font-semibold text-lg mb-2 opacity-100">Our Vision</h4>
            <p class="text-sky-50">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.
            </p>
          </div>
          <div class="bg-gradient-to-br from-sky-600 to-sky-700 text-white p-6 rounded-lg opacity-75">
            <h4 class="font-semibold text-lg mb-2">Our Values</h4>
            <p class="text-sky-50">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.
            </p>
          </div>
        </div>

        {{-- Company History --}}
        <h3 class="text-xl font-semibold text-sky-700 mb-3">Company History</h3>
        <p class="text-gray-700 mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum
          dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.
        </p>

        {{-- Statistics Grid --}}
        <div class="grid md:grid-cols-3 gap-4 mt-8">
          <div class="text-center p-4 bg-sky-50 rounded-lg">
            <div class="text-3xl font-bold text-sky-600 mb-1">500+</div>
            <div class="text-sm text-gray-600">Projects Completed</div>
          </div>
          <div class="text-center p-4 bg-sky-50 rounded-lg">
            <div class="text-3xl font-bold text-sky-600 mb-1">100+</div>
            <div class="text-sm text-gray-600">Team Members</div>
          </div>
          <div class="text-center p-4 bg-sky-50 rounded-lg">
            <div class="text-3xl font-bold text-sky-600 mb-1">15+</div>
            <div class="text-sm text-gray-600">Years Experience</div>
          </div>
        </div>
      </div>
    </div>
  </section>


<section id = "content">
    <!-- Component: Colored Activity feed -->
<div class = "flex items-center justify-center bg-gray-200/75">
<ul aria-label="Colored activity feed" role="feed" class="relative flex flex-col gap-12 py-12 pl-8 before:absolute before:top-0 before:left-8 before:h-full before:border before:-translate-x-1/2 before:border-slate-200 before:border-dashed after:absolute after:top-6 after:left-8 after:bottom-6 after:border after:-translate-x-1/2 after:border-slate-200 ">
  <a href="#" class="block">
  <li role="article" class="relative pl-8 ">
    <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-10 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-sky-600 hover:bg-sky-900">
      1
    </span>
    <div class="flex flex-col flex-1 gap-0">
      <h4 class="text-base font-medium text-slate-700"> UI/UX project created </h4>
      <p class="text-sm text-slate-500">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
    </div>
  </li>
  </a>
  <a href="#" class="block">
  <li role="article" class="relative pl-8 ">
    <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-10 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-sky-600 hover:bg-sky-900 ">
        2
    </span>
    <div class="flex flex-col flex-1 gap-0">
      <h4 class="text-base font-medium text-slate-700"> Task list created for project</h4>
      <p class="text-sm text-slate-500">"Lorem ipsum dolor sit amet, consectet magna aliqua. Ut enim ad minim veniam</p>
    </div>
  </li>
</a>
<a href="#" class="block">
  <li role="article" class="relative pl-8 ">
    <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-10 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-sky-600 hover:bg-sky-900 ">
        3
    </span>
    <div class="flex flex-col flex-1 gap-0">
      <h4 class="text-base font-medium text-slate-700"> Warning! Project name cannot be empty </h4>
      <p class="text-sm text-slate-500">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
    </div>
  </li>
  </a>
  <a href="#" class="block">
  <li role="article" class="relative pl-8 ">
    <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-10 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-sky-600 hover:bg-sky-900 ">
        4
    </span>
    <div class="flex flex-col flex-1 gap-0">
      <h4 class="text-base font-medium text-slate-700"> New user added </h4>
      <p class="text-sm text-slate-500">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididux</p>
    </div>
  </li>
  </a>
  <a href="#" class="block">
  <li role="article" class="relative pl-8 ">
    <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-10 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-sky-600 hover:bg-sky-900 ">
          5
    </span>
    <div class="flex flex-col flex-1 gap-0">
      <h4 class="text-base font-medium text-slate-700"> Warning! Project is going to be expired </h4>
      <p class="text-sm text-slate-500">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor i
        ncididunt </p>
    </div>
  </li>
  </a>
  <a href="#" class="block">
  <li role="article" class="relative pl-8 ">
    <span class="absolute left-0 z-10 flex items-center justify-center w-10 h-10 text-white -translate-x-1/2 bg-sky-600 hover:bg-sky-900 rounded-full ring-2 ring-white ">
          6
    </span>
    <div class="flex flex-col flex-1 gap-0">
      <h4 class="text-base font-medium text-slate-700"> Project deleted </h4>
      <p class="text-sm text-slate-500">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
    </div>
  </li>
  </a>
</ul>
</div>
<!-- End Colored Activity feed -->
</section>


<!-- <section 
  class="h-[75vh] bg-cover bg-center bg-no-repeat bg-fixed"
  style="background-image: url('{{ asset('images/KMGE_bg2.png') }}');">
</section> -->


<section class="min-h-[125vh] flex flex-col items-center justify-center bg-neutral-50">

<div class= "flex flex-col items-center justify-center w-1/2 mb-20 pb-20">
<h2 class="text-3xl font-bold text-sky-700 mb-15">About KMGE THE LIST</h2>

<p class="text-body text-l text-slate-500 p-4 md:p-5">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
  ullamco laboris nisi ut 
  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
  in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
  sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
</p>
</div>

<div id="accordion-card" class = "w-1/2 ">
  <h2 id="accordion-card-heading-1">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body rounded-xl shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none" data-accordion-target="#accordion-card-body-1" aria-expanded="false" aria-controls="accordion-card-body-1">
      <span>What is Flowbite?</span>
      <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0 transition-transform duration-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
    </button>
  </h2>
  <div id="accordion-card-body-1" class="border border-t-0 border-b-0 border-default rounded-none max-h-0 overflow-hidden transition-all duration-700" aria-labelledby="accordion-card-heading-1">
    <div class="p-4 md:p-5">
      <p class="mb-2 text-body">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
      <p class="text-body">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-fg-brand hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
    </div>
  </div>
  <h2 id="accordion-card-heading-2" class="mt-4">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body rounded-xl shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none" data-accordion-target="#accordion-card-body-2" aria-expanded="false" aria-controls="accordion-card-body-2">
      <span>Is there a Figma file available?</span>
      <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
    </button>
  </h2>
  <div id="accordion-card-body-2" class="border border-t-0 border-b-0 border-default rounded-none max-h-0 overflow-hidden transition-all duration-700" aria-labelledby="accordion-card-heading-2">
    <div class="p-4 md:p-5">
      <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
      <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
    </div>
  </div>
  <h2 id="accordion-card-heading-3" class="mt-4">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body rounded-xl shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none" data-accordion-target="#accordion-card-body-3" aria-expanded="false" aria-controls="accordion-card-body-3">
      <span>What are the differences between Flowbite and Tailwind UI?</span>
      <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
    </button>
  </h2>
  <div id="accordion-card-body-3" class="border border-t-0 border-b-0 border-default rounded-none max-h-0 overflow-hidden transition-all duration-700" aria-labelledby="accordion-card-heading-3">
    <div class="p-4 md:p-5">
      <p class="mb-2 text-body">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
      <p class="mb-2 text-body">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
      <p class="mb-2 text-body">Learn more about these technologies:</p>
      <ul class="ps-5 text-body list-disc">
        <li><a href="https://flowbite.com/pro/" class="text-fg-brand hover:underline">Flowbite Pro</a></li>
        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-fg-brand hover:underline">Tailwind UI</a></li>
      </ul>
    </div>
  </div>
    <h2 id="accordion-card-heading-4" class="mt-4">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body rounded-xl shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none" data-accordion-target="#accordion-card-body-4" aria-expanded="false" aria-controls="accordion-card-body-4">
      <span>Is there a Figma file available?</span>
      <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
    </button>
  </h2>
  <div id="accordion-card-body-4" class="border border-t-0 border-b-0 border-default rounded-none max-h-0 overflow-hidden transition-all duration-700" aria-labelledby="accordion-card-heading-4">
    <div class="p-4 md:p-5">
      <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
      <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
    </div>
  </div>
    <h2 id="accordion-card-heading-5" class="mt-4">
    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-body rounded-xl shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none" data-accordion-target="#accordion-card-body-5" aria-expanded="false" aria-controls="accordion-card-body-5">
      <span>Is there a Figma file available?</span>
      <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/></svg>
    </button>
  </h2>
  <div id="accordion-card-body-5" class="border border-t-0 border-b-0 border-default rounded-none max-h-0 overflow-hidden transition-all duration-700" aria-labelledby="accordion-card-heading-5">
    <div class="p-4 md:p-5">
      <p class="mb-2 text-body">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
      <p class="text-body">Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
    </div>
  </div>
</div>
</section>

<section>
        <div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/MJ_3Xmb5J3g?si=wmRJ3zFve4iCxNtR" title="YouTube video player"
   frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
</sections>

<script>
  document.querySelectorAll('[data-accordion-target]').forEach(button => {
  button.addEventListener('click', function() {
    const target = document.querySelector(this.dataset.accordionTarget);
    const icon = this.querySelector('[data-accordion-icon]');

    const isExpanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !isExpanded);
    
    target.classList.toggle('max-h-0');
    target.classList.toggle('max-h-96');
    target.classList.toggle('rounded-b-xl');
    target.classList.toggle('border-b-1');
    icon.classList.toggle('rotate-180');
  });
});
</script>

@endsection

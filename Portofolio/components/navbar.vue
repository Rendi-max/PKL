<template>
<nav id="nav-menu" class="border-b-2 bg-black border-yellow-400 sticky top-0 z-50">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="flex flex-1 sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="font-extrabold text-white rounded-md px-3 py-3 text-3xl" aria-current="page">Rendi</a>
           
          </div>
        </div>
      </div>
      <div class=" pr-2 inset-y-0 right-0 justify-center d-flex items-center sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <NuxtLink to="#home" class="text-white active:text-yellow-400 active:border-b-yellow-400 active:border-b-2 hover:border-b-yellow-400 hover:border-b-2 hover:text-yellow font-extrabold px-4 py-2 text-[11px] sm:text-xl">Home</NuxtLink>
            <NuxtLink to="#about" class="text-white active:text-yellow-400 active:border-b-yellow-400 active:border-b-2 hover:border-b-yellow-400 hover:border-b-2 hover:text-yellow font-extrabold px-4 py-2 text-[11px] sm:text-xl">About</NuxtLink>
            <NuxtLink to="#resume" class="text-white active:text-yellow-400 active:border-b-yellow-400 active:border-b-2 hover:border-b-yellow-400 hover:border-b-2 hover:text-yellow font-extrabold px-4 py-2 text-[11px] sm:text-xl">Resume</NuxtLink>
            <NuxtLink to="#project" class="text-white active:text-yellow-400 active:border-b-yellow-400 active:border-b-2 hover:border-b-yellow-400 hover:border-b-2 hover:text-yellow font-extrabold px-4 py-2 text-[11px] sm:text-xl">Project</NuxtLink>
            <NuxtLink to="#contact" class="text-white active:text-yellow-400 active:border-b-yellow-400 active:border-b-2 hover:border-b-yellow-400 hover:border-b-2 hover:text-yellow font-extrabold px-4 py-2 text-[11px] sm:text-xl">Contact</NuxtLink>
      </div>
    </div>
  </div>
</nav>
</template>
<script>
    
    export default{
        name:'navbar',
       
    }

</script>

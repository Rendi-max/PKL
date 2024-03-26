@extends('Layout.Users')
@section('content')
    <div class="text-white space-y-4 py-10 sm:mx-10 bg-gray-800 bg-opacity-40 rounded-xl">
        <h2 class="text-center font-bold text-2xl sm:text-4xl underline italic mt-0">Welcome To SLink</h2>
        <div class="mx-5 sm:mx-16 rounded-lg min-h-[200px] mt-5 bg-gradient-to-r from-gray-500 to-gray-700 text-white">
                <div class="flex flex-col sm:flex-row px-5 py-5 sm:py-6 sm:px-6 space-y-4 sm:space-y-0 sm:justify-between">
                    <div class="space-y-3 sm:px-5 py-2 flex flex-col">
                        <div class="space-y-1 mb-auto">
                            <h1 class="font-bold text-3xl sm:text-4xl underline">Free Bundle</h1>
                            <p class="text-[12px] sm:text-sm">Create your own shortlink for free 😋.</p>
                            <p class="text-sm sm:text-lg">Make your link more shorter and <span class="font-bold underline">easy to remember</span> 😄.</p>
                        </div>
                        <div class="">
                            <a href="/register" class="font-bold bg-gradient-to-r from-red-600 to-red-700 rounded-xl py-2 px-4 focus:outline-none focus:border-4 focus:border-red-400 focus:bg-red-300 hover:border-4 hover:border-red-300 hover:bg-gradient-to-br">Get Started ( Free 😋 )</a>
                        </div>
                    </div>
                    <div class="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRP3IJw3TInQUUDBs7lBKPzPYqWrO30qC_AGg&s" class="scale-100 rounded-xl" alt="">
                    </div>
                </div>
        </div>
        <div class="mx-5 sm:mx-16 rounded-lg min-h-[200px] mt-5 bg-gradient-to-r from-gray-500 to-gray-700 text-white">
                <div class="flex flex-col sm:flex-row px-5 py-5 sm:py-6 sm:px-6 space-y-4 sm:space-y-0 sm:justify-between">
                    <div class="space-y-3 sm:px-5 py-2 flex flex-col">
                        <div class="space-y-1 mb-auto">
                            <h1 class="font-bold text-3xl sm:text-4xl underline">Premium Bundle</h1>
                            <p class="text-[12px] sm:text-sm">Create your own shortlink with extra features 😋.</p>
                            <div class="text-[11px] sm:text-[12px]"> 
                                <p>> Create unlimited short link.</p>
                                <p>> Unlimited link visitor.</p>
                                <p>> And other features</p>
                            </div>
                        </div>
                        
                        <div class="">
                            <a href="" class="font-bold bg-gradient-to-r from-red-600 to-red-700 rounded-xl py-2 px-4 focus:outline-none focus:border-4 focus:border-red-400 focus:bg-red-300 hover:border-4 hover:border-red-300 hover:bg-gradient-to-br">IDR 109.900</a>
                        </div>
                    </div>
                    <div class="">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDp7wa8nEYW6aGBgzrRQyEzB63rQTtydFmgQ&s" class="scale-100 rounded-xl" alt="">
                    </div>
                </div>
        </div>
    </div>
    <div id="about" class="text-white space-y-1 py-10 sm:mx-10 bg-gray-800 bg-opacity-30 rounded-xl">
        <h2 class="text-center font-bold text-2xl sm:text-4xl underline italic mt-0">About</h2>
        <div class="rounded-lg min-h-[200px] mx-5 sm:mx-16 bg-gradient-to-r from-gray-500 to-gray-700 p-5 text-justify">
            <p class="text-sm sm:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, pariatur voluptatum. Dolor necessitatibus quis ipsa possimus adipisci, temporibus, quod animi, quas eos aliquam incidunt. Esse autem repudiandae architecto obcaecati non ullam accusantium possimus maiores dicta nemo, tempore maxime facere libero aspernatur culpa! Quas eius doloremque aspernatur officiis ad sit quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis omnis, error delectus laborum optio qui doloribus? Amet quasi labore cumque.</p>
        </div>
    </div>
    <div id="faq" class="text-white space-y-1 py-10 sm:mx-10 bg-gray-800 bg-opacity-40 rounded-xl">
        <h2 class="text-center font-bold text-2xl sm:text-4xl underline italic">Frequently Asked Question</h2>
        <div class="mx-5 sm:mx-16 text-white">   
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-white border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span class="text-white">What is SLink?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis accusantium distinctio nobis quia a, nesciunt obcaecati est, beatae eligendi ipsum sunt veniam? Iusto, laudantium reiciendis eos deserunt totam doloremque. Dicta.</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-white border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span class="text-white">Is this website is trusted?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus sed tenetur dolores.</p>
                </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-white border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span class="text-white">What are the differences between SLink and Other Website?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <p class="mb-2 text-white">Gatau bang wkwk</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
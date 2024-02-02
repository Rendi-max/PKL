<template>
    <div id="home" class="d-flex flex-wrap border-b-2 border-yellow-400 lg:p-20">
        <div class="lg:columns-2">
            <div class=" text-center lg:mt-28 lg:text-start">
                <h3 class="text-yellow-400">Hello!</h3>
                <h1 class="lg:text-5xl mx-auto lg:mx-0 space-x-3 text-center lg:text-start my-4 text-3xl font-bold text-yellow-400" style="width: 300px;"><span class="text-white">I'm</span> Rendi Firman Syah</h1>
                <div class="row">
                    <button class="rounded-full bg-yellow-400 px-8 py-2 hover:text-white hover:animate-bounce font-semibold">Hire me</button>
                    <a href="#project"><button class="rounded-full bg-none border-gray-400 border font-semibold text-white px-8 py-2 hover:animate-bounce hover:bg-purple-500 hover:border-none hover:text-black" href="#project">My Works</button></a>
                </div>
            </div>
            <div class="">
                <img src="../assets/profile.jpg" class="scale-75 lg:scale-75 rounded-3xl lg:w-full" alt="">
              
            </div>
        </div>
    </div>
</template>
<script>
export default{
    name : 'home'
}
</script>
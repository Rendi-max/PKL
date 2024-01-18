<template>
    <div class="d-flex flex-wrap mt-10 border-b-2 border-yellow-400 sm:p-20">
        <div id="home" class="sm:columns-2">
            <div class=" text-center sm:mt-28 sm:text-start">
                <h3 class="text-yellow-400">Hello!</h3>
                <h1 class="sm:text-5xl mx-auto sm:mx-0 space-x-3 text-center sm:text-start my-4 text-3xl font-bold text-yellow-400" style="width: 300px;"><span class="text-white">I'm</span> Rendi Firman Syah</h1>
                <div class="row">
                    <button class="rounded-full bg-yellow-400 px-8 py-2 hover:text-white">Hire me</button>
                    <button class="rounded-full bg-none border-gray-400 border text-white px-8 py-2 hover:bg-purple-500 hover:border-none hover:text-black">My Works</button>
                </div>
            </div>
            <div class="">
                <img src="../assets/profile.jpg" class="scale-75 sm:scale-75 rounded-3xl sm:w-full" alt="">
              
            </div>
        </div>
    </div>
</template>
<script>
export default{
    name : 'home'
}
</script>
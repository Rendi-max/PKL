<template>
    <div class="flex my-20 justify-center">
        <div class="h-[300px] w-[600px]">
            <LMap
            ref="map"
            :bounds="bounds"
            :zoom.sync="ZOOM"
            :center="[-7.434421899509192, 109.53605175018312]"
            >
                <LTileLayer
                url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
                layer-type="base"
                name="OpenStreetMap"
                />
                <LGeoJson :geojson="geojson"></LGeoJson>
                <LMarker 
                :draggable="true"
                :visible="true"
                :lat-lng="marker.position"
                v-model:lat-lng="marker.position"
                @click="show(marker)"
                ></LMarker>
            </LMap>
        </div>
        <div class="px-4 py-4 space-y-2 bg-slate-100"
        >
            <form action="" v-model="marksModel">

                <div class="">
                    <p class="text-sm font-bold">Name</p>
                    <input type="text" class="rounded-lg px-2 border-2 w-full">
                </div>
                <div class="">
                    <p class="text-sm font-bold">Phone</p>
                    <input type="text" class="rounded-lg px-2 border-2 w-full">
                </div>
                <div class="">
                    <p class="text-sm font-bold">Alamat</p>
                    <input type="text" class="rounded-lg px-2 border-2 w-full">
                </div>
            <div class="">
                <p class="text-sm  font-bold">Latitude & Longitude</p>
                <input type="number" name="langitude" class="rounded-lg px-2 border-2" :value="marker.position.lat">
                <input type="number" name="longitude" class="rounded-lg px-2 border-2" :value="marker.position.lng">
            </div>
            <div class="flex">
                <button type="submit" class="px-3 py-2 text-white font-bold bg-blue-400" >Save</button>
                <button class="px-3 py-2 text-white font-bold bg-yellow-400">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</template>

<script setup>
    import { ref } from "vue";
    const ZOOM = ref(5)
    const geojson = await import('~/assets/indonesia.json')

    let marker = ref({
        name:"alamak",
        alamat:"Alamat gweh aseli",
        position:{ lat:-7.434421899509192, lng: 109.53605175018312 },
    })

    function show(item) {
        alert(JSON.stringify(item))
        
    }
    
</script>
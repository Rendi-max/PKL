<template>
    <div class="" style="height:100vh; width:200vh;" >
        <LMap
        ref="map"
        :zoom="ZOOM"
        :center="[4.16, 112.49]"
        >
            <LTileLayer
             url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
             layer-type="base"
             name="OpenStreetMap"
            />
            <LGeoJson :geojson="geojson"></LGeoJson>
            <LGeoJson :geojson="myGeo"></LGeoJson>
        </LMap>
    </div>
</template>

<script setup>
    import { ref } from "vue";
    const ZOOM = ref(5)
    const geojson = await import('~/assets/indonesia.json')
    const myGeo = await import('~/assets/AlamatGweh.json')
</script>
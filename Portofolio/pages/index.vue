<template>
    <navbar />
    <home />
    <about />
    <resume />
    <projects />
    <contact />
    
</template>
<script>
    import navbar from "~/components/navbar.vue";
    import home from "~/components/home.vue";
    import about from "~/components/about.vue";
    import resume from "~/components/resume.vue";
    import projects from '~/components/project.vue';
    import contact from '~/components/contact.vue';
    import footer from "~/components/footer.vue";
    import portofolio from "../layouts/portofolio.vue";
    export default{
        layout: portofolio,
        components: {
            navbar,
            home,
            about,
            resume,
            projects,
            contact,
            footer,
        }
    }
</script>
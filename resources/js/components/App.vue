<template>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <Sidebar/>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <Topbar/>

                <router-view></router-view>

            </div>

            <Copyright/>

        </div>

    </div>
    <!-- End of Page Wrapper -->

    <ScrollToTopButton/>
    <LogoutModal/>
</template>

<script>
import Topbar from "./Topbar.vue";
import Sidebar from "./Sidebar.vue";
import ScrollToTopButton from "./ScrollToTopButton.vue";
import LogoutModal from "./LogoutModal.vue";
import Copyright from "./Copyright.vue";

export default {
    components: {
        Topbar,
        Sidebar,
        ScrollToTopButton,
        LogoutModal,
        Copyright,
    },
    name: "App",
    watch: {
        $route: {
            immediate: true,
            handler(to, from) {
                document.title = to.meta.title || 'Travelnow';
            }
        },
    }
}
</script>

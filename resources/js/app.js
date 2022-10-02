import './bootstrap';
import { createApp } from 'vue';
import AppComponent from './components/App.vue';
import router from './router/index';

const app = createApp(AppComponent)
app.mount("#app")
app.use(router)

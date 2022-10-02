import Dashboard from "../components/Dashboard.vue";
import Comments from "../components/Comments.vue";

const routes = [
    {
        path: '/admin/',
        name: 'Dashboard',
        component: Dashboard,
        meta: {
            title: 'Dashboard',
        }
    },
    {
        path: '/admin/comments',
        name: 'Comments',
        component: Comments,
        meta: {
            title: 'Comments',
        }
    },
];

export default routes;

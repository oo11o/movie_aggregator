require('./bootstrap');

import { createApp } from 'vue';

import Post from './components/Posts/Index';

const app = createApp({
    components: {
        Post
    }
});

app.mount("#app");

<template>
    <div>
        <table class=" table table-hover text-nowrap>">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>H1</th>
                    <th>count films</th>
                    <th>status id</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post of posts">
                    <td>{{ post.id }}</td>
                    <td>{{ post.h1 }}</td>
                    <td>{{ post.count_films }}</td>
                    <td>{{ post.status_id }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
       data() {
           return {
               posts: []
           }
       },
        mounted() {
           axios.get('/api/posts').then(res => {
               this.posts = res.data.data
           })
        }
    }
</script>

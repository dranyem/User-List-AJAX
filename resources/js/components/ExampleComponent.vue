<template>
    <div class="container" >
        <p @click="getUsers">Click me for users!</p>
        <h3 v-for="user in users" :key="user.id">{{user.name}}</h3>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                users: [

                ],
            }
        },
        methods: {
            getUsers(){
                let ajax = new XMLHttpRequest();
                let compData  = this;
                ajax.onreadystatechange = function(){
                    if(this.status == 200 && this.readyState == 4){
                        compData.users = JSON.parse(JSON.parse(ajax.responseText));
                    }
                };
                ajax.open("GET", "/get-users", true);
                ajax.send();
            },
        },
    }
</script>

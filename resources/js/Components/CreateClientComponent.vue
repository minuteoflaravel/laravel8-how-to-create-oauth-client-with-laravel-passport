<template>
    <div>
        <h1 class="text-center">Create Client</h1>
        <div class="flex items-center w-6/12 m-auto py-2">
            <input v-model="clientName" class="appearance-none bg-transparent border-gray-200 w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Client name">
            <button @click="createClient" class="flex-shrink-0 bg-blue-500 hover:bg-blue-700 text-white font-bold text-sm  py-1 px-2 rounded" type="button">
                Create
            </button>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
            clientName: ''
        }
    },
    methods: {
        createClient() {
            const data = {
                name: this.clientName,
                redirect: 'https://my.redirect.url'
            };

            axios.post('/oauth/clients', data)
                .then(response => {
                    console.log(response.data);
                })
                .catch (response => {
                    // List errors on response...
                });
        }
    }
}
</script>

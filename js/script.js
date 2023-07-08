const { createApp } = Vue;
createApp({
    data() {
        return {
            toDoItem: null,
            toDoList: [],
            apiUrl: 'server.php',
            obj: null,
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            console.log(response.data);
            this.toDoList = response.data;
        });
    },
    methods: {
        updateList() {
            const data = {
                toDoItem: this.toDoItem
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.toDoItem = '';
                this.toDoList = response.data;
            });
        }
    }

}).mount('#App')
const { createApp } = Vue;
createApp({
    data() {
        return {
            hello: 'hello',
            todoItem: "",
            toDoList: null,
            apiUrl: 'server.php',
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            console.log(response.data);
            this.toDoList = response.data;
        });
    },


}).mount('#App')
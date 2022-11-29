const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: []
        };
    },
    created() {
        axios.get("server.php").then((resp) => {
            this.todoList = resp.data;
        });
    }
}).mount("#app");
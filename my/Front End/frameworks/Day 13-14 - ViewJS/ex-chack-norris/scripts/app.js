
const app=Vue.createApp({
    data(){
        return{
           categories:[],
           text: "" 
        }
    },
    methods:{
        async getCategories(){
            const res=await fetch("https://api.chucknorris.io/jokes/categories");
            const result=await res.json();
            console.log(result);
            this.categories=result;

        },
        async getJoke(a){
            const res=await fetch("https://api.chucknorris.io/jokes/random?category="+a);
            const result=await res.json();
            this.text=result.value;
        }
    }
});
app.mount("#app");


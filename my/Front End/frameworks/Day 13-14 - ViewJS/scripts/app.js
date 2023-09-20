//create a variable, from where my app will be created
const app=Vue.createApp({//method that contains an object
   // template: "",

    data(){ //method (becuse of {}) everything here is used in our 
        return{
        firstName:"John",  //inside return. In vuejs we can use that DATA() in a declarative rendering by using {{}}
        lastName:"LeDoe",
        email:"john.ledoe@mail.com",
        gender:"male",
        picture:"https://randomuser.me/api/portraits/men/1.jpg"
        //now we have some data to use in our html

    }
    }, ///end of data()
    methods:{
        async getUser(){
            const res=await fetch("https://randomuser.me/api");
            const {results}=await res.json();
            console.log(results);
            //we can access any data by using the keyword "THIS"
            //console.log(this.firstName);
            // this.firstName="Igor";
            // this.lastName="LordOft-R-a-I-ni-NGS";
            // this.email="igor.marty@cap4lab.com";
            // this.gender="female";
            // this.picture="https://randomuser.me/api/portraits/women/1.jpg" //changed the url --> women
            this.firstName=results[0].name.first;
             this.lastName=results[0].name.last;
             this.email=results[0].email;
             this.gender=results[0].gender;
             this.picture=results[0].picture.large;

        }
    }
});   //END - Vue.createApp > inside is where the magic will happen

app.mount("#app"); //if i want to mount this script to our div id=app, i will need to type/create the app.mount() method and i pass it to the selector

// create a variable from where your app will be "create"
const app = Vue.createApp({

    // template: '<h1>Hello {{firstName}} </h1>',


    data() {
        return {
            firstName: 'John',
            // in vuejs we can use that DATA() in a declarativ rendering by using {{}}
            lastName: 'LeDoe',
            email: 'john.ledoe@mail.com',
            gender: 'male',
            picture: 'https://randomuser.me/api/portraits/men/10.jpg'
            // now we have some Data to use in our html
        }
    }, // END of data()

    methods: {
        async getUser() {

            const res = await fetch('https://randomuser.me/api')
            const { results } = await res.json()
            console.log(results);
            // What is this : const { results }
            // This line of code does the same thing as 
            // const results, but then it goes a step 
            // further by using destructuring assignment to 
            // extract the result property from the JSON object directly.

            // we can access any data by using the keyword "THIS"
            // console.log(this.firstName);
            this.firstName = results[0].name.first;
            this.lastName = results[0].name.last;
            this.email = results[0].email;
            this.gender = results[0].gender;
            this.picture = results[0].picture.large
            // I changed in the URL the men > women

        }
    }




}) //END - Vue.createApp > inside is where the magic will happen

// If you want to mount this script to our div id=app
// you will need to type/create the app.mount() methid 
// and you pass it to the selector
app.mount('#app')
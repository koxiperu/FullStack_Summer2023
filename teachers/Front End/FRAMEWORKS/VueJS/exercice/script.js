const app = Vue.createApp({
  data() {
    return {
      joke: 'empty',
      categories: [],
      selectedCat: '',
    };
  },

  methods: {
    async getRndJoke() {
      // FETCH ( call -> convert to JSON -> extract )
      const res = await fetch('https://api.chucknorris.io/jokes/random');
      const result = await res.json();
      this.joke = result.value;
    },
    async loadCategories() {
      // FETCH ( call -> convert to JSON -> extract )
      const res = await fetch('https://api.chucknorris.io/jokes/categories');
      const result = await res.json();
      this.categories = result;
      console.log(result);
    },
    // click on categorie
    async getJokeCat(catParam) {
      console.log(catParam);
      // FETCH ( call -> convert to JSON -> extract )
      const res = await fetch(
        'https://api.chucknorris.io/jokes/random?category=' + catParam
      );
      const result = await res.json();
      this.joke = result.value;

      // I update the data corresponding to the selected categorie
      this.selectedCat = catParam;
    },
  },
  // when component loads
  mounted() {
    this.loadCategories();
    this.getRndJoke();
  },
});
app.mount('#app');

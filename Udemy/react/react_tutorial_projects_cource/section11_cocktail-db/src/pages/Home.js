import React from 'react';
import CocktailList from '../components/CocktailList';
import SearchForm from '../components/SearchForm';

const Home = () => {
  const [loading,setLoading] = React.useState(false);
  const [searchTerm,setSearchTerm] = React.useState("a");
  const [cocktail,setCocktail] = React.useState([]);

  React.useEffect(() => {
    setLoading(true);
    async function getDrinks() {
      try {
        const res = await fetch(`https://www.thecocktaildb.com/api/json/v1/1/search.php?s=${searchTerm}`)
        const data = await res.json();
        const {drinks} = data;
        if(drinks) {
          const newCocktails = drinks.map(drink => {
            // console.log(drink);
            const {idDrink,strDrink,strDrinkThumb,strAlcoholic,strGlass} = drink;
            return {id:idDrink,name:strDrink,image:strDrinkThumb,info:strAlcoholic,glass:strGlass}
          })
          
          setCocktail(newCocktails)
        } else {
          setCocktail([])
        }
      } catch (e) {
        console.log(e);
      }
      setLoading(false);
    }
    getDrinks()
  },[searchTerm]);

  return (
    <main>
      <SearchForm setSearchTerm={setSearchTerm} />
      <CocktailList loading={loading} cocktail={cocktail} />
    </main>
  )
}

export default Home

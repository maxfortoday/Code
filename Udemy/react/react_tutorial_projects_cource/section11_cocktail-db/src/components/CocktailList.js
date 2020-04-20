import React from 'react';
import Cocktail from './Cocktail';

const CocktailList = ({cocktail,loading}) => {
  if(loading) {
    return <h2 className="section-title">Loading...</h2>
  }
  if(cocktail.length < 1) {
    return <h2 className="section-title">No cocktails match for your search</h2>
  }
  return (
    <section className="section">
      <h2 className="section-title">cocktails</h2>
      <div className="cocktails-center">
        {
          cocktail.map(item => {
            return <Cocktail key={item.id} {...item} />
          })
        }
      </div>
    </section>
  )
}

export default CocktailList

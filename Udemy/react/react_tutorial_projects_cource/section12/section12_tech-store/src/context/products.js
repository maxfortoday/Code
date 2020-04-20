import React from 'react';
import axios from 'axios';
import url from '../utils/URL';
import {featuredProducts,flattenProducts} from '../utils/helpers';
export const ProductContext = React.createContext();

const ProductProvidor = ({children}) => {
 
 const [loading, setLoading] = React.useState(false);
 const [products, setProducts] = React.useState([]);
 const [featured, setFeatured] = React.useState([]);

 React.useEffect(() => {
  setLoading(true)
  axios.get(`${url}/products`)
   .then(res => {
    const feature = featuredProducts(flattenProducts(res.data));
    const products = flattenProducts(res.data);
    setProducts(products)
    setFeatured(feature)
    setLoading(false)
   })
  return () => {

  }
 },[])

 return (
  <ProductContext.Provider value={{loading,products,featured}}>
   {children}
  </ProductContext.Provider>
 )
}

export default ProductProvidor

import React from "react";
import Counter from "./Counter";
import {createStore,combineReducers,applyMiddleware} from 'redux';
import {Provider} from 'react-redux';
import { composeWithDevTools } from 'redux-devtools-extension';
// reducers
import countReducer from './countReducer'
import productReducer from './productReducer'
import modalReducer from './modalReducer'
import thunk from 'redux-thunk'
// get components
import Modal from './Modal';
import Products from './Products';
const middlware = [thunk]
// setup store
const store = createStore(
  combineReducers({
    countState: countReducer,
    modalState: modalReducer,
    productState: productReducer,
  }),
  composeWithDevTools(applyMiddleware(...middlware))
  );

const App = () => {
  return (
  <Provider store={store}>
    <Counter random="random value"/>
    <Modal />  
    <Products/>
  </Provider>);
};

export default App;

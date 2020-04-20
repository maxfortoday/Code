import React from "react";
import ReactDOM from "react-dom";
import "./index.css";
import App from "./App";
import ProductProvidor from './context/products';
import {CartProvider} from './context/cart';
import {UserProvidor} from './context/user';


ReactDOM.render(
  <UserProvidor>
    <ProductProvidor>
      <CartProvider>
        <App />
      </CartProvider>
    </ProductProvidor>
  </UserProvidor>
  , document.getElementById("root"));

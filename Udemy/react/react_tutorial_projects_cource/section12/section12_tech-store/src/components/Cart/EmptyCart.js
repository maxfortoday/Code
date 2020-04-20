import React from "react";
import {Link} from 'react-router-dom';

export default function EmptyCart() {
  return (
    <section className="empty-cart section">
      <h4>empty cart...</h4>
      <Link to="/products" className="btn btn-primary">fill it</Link>
    </section>
  )
}

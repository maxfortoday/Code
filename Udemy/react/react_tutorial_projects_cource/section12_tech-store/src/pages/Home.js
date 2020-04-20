import React from "react";
import Hero from '../components/Hero';
import {Link} from 'react-router-dom';
import FeaturedProducts from '../components/Products/FeaturedProducts';

export default function Home() {
  return (
    <>
      <Hero>
        <Link to="/priducts" className="btn btn-primary btn-hero">our products</Link>
      </Hero>
      <FeaturedProducts/>
    </>
  );
}

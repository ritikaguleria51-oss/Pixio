import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Header from "./Header";
import Footer from "./Footer";
import "./App.css";

import Home from "./Pages/Home";
import Blog from "./Pages/Blog";
import BlogArchive from "./Pages/BlogArchive";
import Shop from "./Pages/Shop";
import ReferencePage from "./Pages/ReferencePage";
import PortfolioDetails1 from "./Pages/PortfolioDetails1";

function App() {
  return (
    <BrowserRouter>
      <div className="App">

        <Header />

        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/blog" element={<Blog />} />
          <Route path="/blog/archive" element={<BlogArchive />} />
          <Route path="/shop" element={<Shop />} />
          <Route path="/shop/standard" element={<Shop />} />
          <Route path="/portfolio/details-1" element={<PortfolioDetails1 />} />
          <Route path="*" element={<ReferencePage />} />
        </Routes>

        <Footer />

      </div>
    </BrowserRouter>
  );
}

export default App;
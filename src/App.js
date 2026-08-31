import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";

import Header from "./Header";
import Footer from "./Footer";
import "./App.css";

import Home from "./Pages/Home";
// import Shop from "./Pages/Shop";

function App() {
  return (
    <BrowserRouter>
      <div className="App">

        <Header />

        <Routes>
          <Route path="/" element={<Home />} />
          {/* <Route path="/shop" element={<Shop />} /> */}
        </Routes>

        <Footer />

      </div>
    </BrowserRouter>
  );
}

export default App;
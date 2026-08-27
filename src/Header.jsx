import React, { useState } from "react";
import { LuSparkle, LuX, LuMenu } from "react-icons/lu";
import { BsCartDash } from "react-icons/bs";
import { IoIosSearch , IoMdHeartEmpty  } from "react-icons/io";


import { Link } from '@inertiajs/react';
import { route } from 'ziggy-js';


import "./Header.css";
import Logo from "./assets/images/logo (1).svg"

function Header() {
  const [mobileMenu, setMobileMenu] = useState(false);

  return (
    <header className="header">
      <div className="header-container">

        {/* Logo */}
        <div className="logo">
          <div className="logo-icon">
            <img src={Logo} alt="" />
          </div>
        </div>

        {/* Desktop Navigation */}
        <nav className="nav-menu">
          <a href="#">Home <LuSparkle size={13} /></a>
          <a href="#">Shop <LuSparkle size={13} /></a>
          <a href="#">Blog <LuSparkle size={13} /></a>
          <a href="#">Post Layout <LuSparkle size={13} /></a>
          <a href="#">Portfolio <LuSparkle size={13} /></a>
          <a href="#">Pages <LuSparkle size={13} /></a>
        </nav>

        {/* Right Side */}
        <div className="header-right">

          <a href="http://127.0.0.1:8000/login">
    Login
</a>

<a href="http://127.0.0.1:8000/register">
    Register
</a>

          <IoIosSearch  className="header-icon" size={25} />

          <IoMdHeartEmpty  className="header-icon" size={25} />

          <div className="cart">
            <BsCartDash  className="header-icon" size={25} />
            <span>5</span>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="menu-btn"
            onClick={() => setMobileMenu(!mobileMenu)}
          >
            {mobileMenu ? <LuX  size={30} /> : <LuMenu  size={32} />}
          </button>

        </div>
      </div>

      {/* Mobile Navigation */}
      {mobileMenu && (
        <nav className="mobile-menu">
          <a href="#">Home</a>
          <a href="#">Shop</a>
          <a href="#">Blog</a>
          <a href="#">Post Layout</a>
          <a href="#">Portfolio</a>
          <a href="#">Pages</a>
          <a href="#">Login / Register</a>
        </nav>
      )}
    </header>
  );
}

export default Header;
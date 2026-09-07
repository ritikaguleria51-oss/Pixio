import React, { useState } from "react";
import { LuSparkle, LuX, LuMenu } from "react-icons/lu";
import { BsCartDash } from "react-icons/bs";
import { IoIosSearch , IoMdHeartEmpty  } from "react-icons/io";


// import { Link } from '@inertiajs/react';
// import { route } from 'ziggy-js';


import "./Header.css";
import Logo from "./assets/images/logo (1).svg"
import MegaMenuImage from "./assets/images/banner-media1.png";
import BlogImageOne from "./assets/images/banner-media1.png";
import BlogImageTwo from "./assets/images/banner-media2.png";
import BlogImageThree from "./assets/images/banner-media3.png";

const backendUrl = process.env.REACT_APP_BACKEND_URL || "http://127.0.0.1:8000";

function Header() {
  const [mobileMenu, setMobileMenu] = useState(false);
  const [openMegaMenu, setOpenMegaMenu] = useState(null);

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
          <a href="/">Home <LuSparkle size={13} /></a>
          <div
            className="shop-nav-item"
            onMouseEnter={() => setOpenMegaMenu("shop")}
            onFocus={() => setOpenMegaMenu("shop")}
          >
            <a href="/shop" aria-haspopup="true">Shop <LuSparkle size={13} /></a>
            <div className={`mega-menu ${openMegaMenu === "shop" ? "is-open" : ""}`} role="menu">
              <button className="mega-menu-close" type="button" onClick={() => setOpenMegaMenu(null)} aria-label="Close Shop menu">
                <LuX size={18} />
              </button>
              <div className="mega-menu-links">
                <div className="mega-menu-column">
                  <h3>Shop Structure</h3>
                  <a href="/shop">Shop Standard</a>
                  <a href="/shop/list">Shop List</a>
                  <a href="/shop/category">Shop With Category</a>
                  <a href="/shop/filters">Shop Filters Top Bar</a>
                  <a href="/shop/sidebar">Shop Sidebar</a>
                  <a href="/shop/style-1">Shop Style 1</a>
                  <a href="/shop/style-2">Shop Style 2</a>
                </div>
                <div className="mega-menu-column">
                  <h3>Product Structure</h3>
                  <a href="/product/default">Default</a>
                  <a href="/product/thumbnail">Thumbnail</a>
                  <a href="/product/grid-media">Grid Media</a>
                  <a href="/product/carousel">Carousel</a>
                  <a href="/product/full-width">Full Width</a>
                </div>
                <div className="mega-menu-column">
                  <h3>Shop Pages</h3>
                  <a href="/wishlist">Wishlist</a>
                  <a href="/cart">Cart</a>
                  <a href="/checkout">Checkout</a>
                  <a href="/compare">Compare</a>
                  <a href="/order-tracking">Order Tracking</a>
                  <a href={`${backendUrl}/login`}>Login</a>
                  <a href={`${backendUrl}/register`}>Registration</a>
                  <a href={`${backendUrl}/forgot-password`}>Forget Password</a>
                </div>
                <div className="mega-menu-promo">
                  <img src={MegaMenuImage} alt="New season fashion" />
                </div>
              </div>
              <div className="mega-menu-deal">
                <div>
                  <h3>Deal of the month</h3>
                  <p>Yes! Send me exclusive offers, personalised, and unique gift ideas, tips for shopping on Pixio</p>
                  <a href="/shop">View All Products</a>
                </div>
                <div className="mega-menu-countdown" aria-label="Deal countdown">
                  <div><strong>30</strong><span>DAYS</span></div>
                  <div><strong>12</strong><span>HOURS</span></div>
                  <div><strong>18</strong><span>MINUTES</span></div>
                  <div><strong>29</strong><span>SECONDS</span></div>
                </div>
              </div>
            </div>
          </div>
          <div
            className="blog-nav-item"
            onMouseEnter={() => setOpenMegaMenu("blog")}
            onFocus={() => setOpenMegaMenu("blog")}
          >
            <a href="/blog" aria-haspopup="true">Blog <LuSparkle size={13} /></a>
            <div className={`blog-mega-menu ${openMegaMenu === "blog" ? "is-open" : ""}`} role="menu">
              <button className="mega-menu-close" type="button" onClick={() => setOpenMegaMenu(null)} aria-label="Close Blog menu">
                <LuX size={18} />
              </button>
              <div className="blog-mega-column">
                <h3>Blog Dark Style</h3>
                <a href="/blog/2-column">Blog 2 Column</a>
                <a href="/blog/2-column-sidebar">Blog 2 Column Sidebar</a>
                <a href="/blog/3-column">Blog 3 Column</a>
                <a href="/blog/half-image">Blog Half Image</a>
                <h3>Blog Light Style</h3>
                <a href="/blog/light-2-column">Blog 2 Column</a>
                <a href="/blog/light-2-column-sidebar">Blog 2 Column Sidebar</a>
                <a href="/blog/light-half-image">Blog Half Image</a>
                <a href="/blog/exclusive">Blog Exclusive</a>
              </div>
              <div className="blog-mega-column">
                <h3>Blog List Sidebar</h3>
                <a href="/blog/no-sidebar">No Sidebar <span>NEW</span></a>
                <a href="/blog/left-sidebar">Left Sidebar <span>NEW</span></a>
                <a href="/blog/right-sidebar">Right Sidebar <span>NEW</span></a>
                <a href="/blog/both-sidebar">Both Sidebar <span>NEW</span></a>
                <h3>Blog Grid Sidebar</h3>
                <a href="/blog/grid-no-sidebar">No Sidebar <span>NEW</span></a>
                <a href="/blog/grid-left-sidebar">Left Sidebar <span>NEW</span></a>
                <a href="/blog/grid-right-sidebar">Right Sidebar <span>NEW</span></a>
                <a href="/blog/grid-both-sidebar">Both Sidebar <span>NEW</span></a>
                <a href="/blog/grid-wide-sidebar">Wide Sidebar <span>NEW</span></a>
              </div>
              <div className="blog-mega-column">
                <h3>Blog Page</h3>
                <a href="/blog/archive">Blog Archive</a>
                <a href="/blog/author">Author</a>
                <a href="/blog/category">Blog Category</a>
                <a href="/blog/tag">Blog Tag</a>
              </div>
              <div className="blog-recent-posts">
                <h3>Recent Posts</h3>
                <a href="/blog/cozy-knit-cardigan">
                  <img src={BlogImageOne} alt="Cozy knit cardigan sweater" />
                  <span><strong>Cozy Knit Cardigan Sweater</strong><small>July 23, 2024</small></span>
                </a>
                <a href="/blog/sophisticated-swagger-suit">
                  <img src={BlogImageTwo} alt="Sophisticated swagger suit" />
                  <span><strong>Sophisticated Swagger Suit</strong><small>July 23, 2024</small></span>
                </a>
                <a href="/blog/athletic-mesh-leggings">
                  <img src={BlogImageThree} alt="Athletic mesh sports leggings" />
                  <span><strong>Athletic Mesh Sports Leggings</strong><small>July 23, 2024</small></span>
                </a>
                <a href="/blog/satin-wrap-blouse">
                  <img src={BlogImageOne} alt="Satin wrap party blouse" />
                  <span><strong>Satin Wrap Party Blouse</strong><small>July 23, 2024</small></span>
                </a>
              </div>
            </div>
          </div>
          <div
            className="post-nav-item"
            onMouseEnter={() => setOpenMegaMenu("post")}
            onFocus={() => setOpenMegaMenu("post")}
          >
            <a href="/post-layout" aria-haspopup="true">Post Layout <LuSparkle size={13} /></a>
            <div className={`post-mega-menu ${openMegaMenu === "post" ? "is-open" : ""}`} role="menu">
              <button className="mega-menu-close" type="button" onClick={() => setOpenMegaMenu(null)} aria-label="Close Post Layout menu">
                <LuX size={18} />
              </button>
              <div className="post-mega-column">
                <h3>Post Types</h3>
                <a href="/post-layout/text">Text Post <span>NEW</span></a>
                <a href="/post-layout/image">Image Post <span>NEW</span></a>
                <a href="/post-layout/video">Video Post</a>
                <a href="/post-layout/link">Link Post</a>
                <a href="/post-layout/audio">Audio Post</a>
                <a href="/post-layout/quote">Post Quote</a>
                <a href="/post-layout/tutorial">Tutorial Post <span>NEW</span></a>
                <a href="/post-layout/catalogue">Catalogue Post <span>NEW</span></a>
              </div>
              <div className="post-mega-column">
                <h3>Multiple Media</h3>
                <a href="/post-layout/banner">Banner</a>
                <a href="/post-layout/slider">Slider</a>
                <a href="/post-layout/gallery">Gallery</a>
                <a href="/post-layout/status-slider">Status Slider <span>NEW</span></a>
                <h3>Post Layout Type</h3>
                <a href="/post-layout/standard">Standard Post</a>
                <a href="/post-layout/corner">Corner Post</a>
                <a href="/post-layout/side">Side Post <span>NEW</span></a>
              </div>
              <div className="post-mega-column">
                <h3>Side Bar</h3>
                <a href="/post-layout/left-sidebar">Left Sidebar</a>
                <a href="/post-layout/right-sidebar">Right Sidebar</a>
                <a href="/post-layout/both-sidebar">Both Sidebar</a>
                <a href="/post-layout/no-sidebar">No Sidebar</a>
              </div>
            </div>
          </div>
          <div
            className="portfolio-nav-item"
            onMouseEnter={() => setOpenMegaMenu("portfolio")}
            onFocus={() => setOpenMegaMenu("portfolio")}
          >
            <a href="/portfolio" aria-haspopup="true">Portfolio <LuSparkle size={13} /></a>
            <div className={`portfolio-mega-menu ${openMegaMenu === "portfolio" ? "is-open" : ""}`} role="menu">
              <button className="mega-menu-close" type="button" onClick={() => setOpenMegaMenu(null)} aria-label="Close Portfolio menu">
                <LuX size={18} />
              </button>
              <div className="portfolio-layout-grid">
                {[
                  ["portfolio-tiles", "Portfolio Tiles", "/portfolio/tiles"],
                  ["collage-one", "Collage Style 1", "/portfolio/collage-1"],
                  ["collage-two", "Collage Style 2", "/portfolio/collage-2"],
                  ["masonry-grid", "Masonry Grid", "/portfolio/masonry"],
                  ["cobble-one", "Cobble Style 1", "/portfolio/cobble-1"],
                  ["cobble-two", "Cobble Style 2", "/portfolio/cobble-2"],
                  ["portfolio-thumbs", "Portfolio Thumbs Slider", "/portfolio/thumbs-slider"],
                  ["film-strip", "Portfolio Film Strip", "/portfolio/film-strip"],
                  ["carousel-showcase", "Carousel Showcase", "/portfolio/carousel"],
                  ["split-slider", "Portfolio Split Slider", "/portfolio/split-slider"],
                ].map(([style, label, href]) => (
                  <a className="portfolio-layout-item" href={href} key={label}>
                    <span className={`portfolio-layout-preview ${style}`} aria-hidden="true"><i /><i /><i /><i /><i /><i /></span>
                    <span>{label}</span>
                  </a>
                ))}
              </div>
              <div className="portfolio-details-column">
                <h3>Portfolio Details</h3>
                <a href="/portfolio/details-1">Portfolio Details 1</a>
                <a href="/portfolio/details-2">Portfolio Details 2</a>
                <a href="/portfolio/details-3">Portfolio Details 3</a>
                <a href="/portfolio/details-4">Portfolio Details 4</a>
                <a href="/portfolio/details-5">Portfolio Details 5</a>
              </div>
            </div>
          </div>
          <div
            className="pages-nav-item"
            onMouseEnter={() => setOpenMegaMenu("pages")}
            onFocus={() => setOpenMegaMenu("pages")}
          >
            <a href="/pages" aria-haspopup="true">Pages <LuSparkle size={13} /></a>
            <div className={`pages-mega-menu ${openMegaMenu === "pages" ? "is-open" : ""}`} role="menu">
              <button className="mega-menu-close" type="button" onClick={() => setOpenMegaMenu(null)} aria-label="Close Pages menu">
                <LuX size={18} />
              </button>
              <div className="pages-mega-column">
                <h3>Pages</h3>
                <a href="/pages/about-us">About Us</a>
                <a href="/pages/about-me">About Me</a>
                <a href="/pages/pricing-table">Pricing Table</a>
                <a href="/pages/gift-vouchers">Our Gift Vouchers</a>
                <a href="/pages/what-we-do">What We Do</a>
                <a href="/pages/faqs-1">Faqs 1</a>
                <a href="/pages/faqs-2">Faqs 2</a>
                <a href="/pages/our-team">Our Team</a>
              </div>
              <div className="pages-mega-column">
                <h3>Contact Us</h3>
                <a href="/pages/contact-1">Contact Us 1</a>
                <a href="/pages/contact-2">Contact Us 2</a>
                <a href="/pages/contact-3">Contact Us 3</a>
                <h3>Web Pages</h3>
                <a href="/pages/error-404-1">Error 404 1</a>
                <a href="/pages/error-404-2">Error 404 2</a>
                <a href="/pages/coming-soon">Coming Soon</a>
                <a href="/pages/under-construction">Under Construction</a>
              </div>
              <div className="pages-mega-column">
                <h3>Banner Style</h3>
                <a href="/pages/banner-bg-color">Banner With BG Color</a>
                <a href="/pages/banner-image">Banner With Image</a>
                <a href="/pages/banner-video">Banner With Video</a>
                <a href="/pages/banner-kanbern">Banner With Kanbern</a>
                <a href="/pages/banner-small">Banner Small</a>
                <a href="/pages/banner-medium">Banner Medium</a>
                <a href="/pages/banner-large">Banner Large</a>
              </div>
              <div className="pages-mega-column">
                <h3>Header Style</h3>
                <a href="/pages/header-1">Header Style 1</a>
                <a href="/pages/header-2">Header Style 2</a>
                <a href="/pages/header-3">Header Style 3</a>
                <a href="/pages/header-4">Header Style 4</a>
                <a href="/pages/header-5">Header Style 5</a>
                <a href="/pages/header-6">Header Style 6</a>
                <a href="/pages/header-7">Header Style 7</a>
                <a className="pages-menu-cta" href="/pages/menu-styles">Menu Styles <span>›</span></a>
              </div>
              <div className="pages-mega-column">
                <h3>Footer Style</h3>
                <a href="/pages/footer-1">Footer Style 1</a>
                <a href="/pages/footer-2">Footer Style 2</a>
                <a href="/pages/footer-3">Footer Style 3</a>
                <a href="/pages/footer-4">Footer Style 4</a>
                <a href="/pages/footer-5">Footer Style 5</a>
                <a href="/pages/footer-6">Footer Style 6</a>
                <a href="/pages/footer-7">Footer Style 7</a>
              </div>
              <div className="pages-mega-column">
                <h3>Dashboard</h3>
                <a href="/pages/dashboard">Dashboard</a>
                <a href="/pages/orders">Orders</a>
                <a href="/pages/order-details">Orders Details</a>
                <a href="/pages/order-confirmation">Orders Confirmation</a>
                <a href="/pages/downloads">Downloads</a>
                <a href="/pages/return-request">Return Request</a>
                <a href="/pages/return-request-detail">Return Request Detail</a>
                <a href="/pages/return-request-confirmed">Return Request Confirmed</a>
              </div>
            </div>
          </div>
        </nav>

        {/* Right Side */}
        <div className="header-right">

          <a href={`${backendUrl}/login`}>Login</a>

          <a href={`${backendUrl}/register`}>Register</a>

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
          <a href="/">Home</a>
          <a href="/shop">Shop</a>
          <a href="/blog">Blog</a>
          <a href="/post-layout">Post Layout</a>
          <a href="/portfolio">Portfolio</a>
          <a href="/pages">Pages</a>
          <a href={`${backendUrl}/login`}>Login / Register</a>
        </nav>
      )}
    </header>
  );
}

export default Header;
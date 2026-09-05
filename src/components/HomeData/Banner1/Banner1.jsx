import React from "react";
import "./Banner1.css";

function Banner1() {
  return (
    <section className="banner1">

      {/* Left Content */}
      <div className="banner1-content">

        <span className="banner1-small-title">
          NEW SEASON 2026
        </span>

        <h1>
          Define Your
          <span> Style.</span>
        </h1>

        <p>
          Discover effortless fashion made for every moment.
          Explore our latest collection and find your perfect look.
        </p>

        <div className="banner1-buttons">
          <button className="banner1-primary-btn">
            SHOP WOMEN
            <span>→</span>
          </button>

          <button className="banner1-secondary-btn">
            SHOP MEN
            <span>→</span>
          </button>
        </div>

        <div className="banner1-features">
          <div>
            <strong>100+</strong>
            <span>New Styles</span>
          </div>

          <div>
            <strong>50%</strong>
            <span>Season Sale</span>
          </div>

          <div>
            <strong>Free</strong>
            <span>Shipping</span>
          </div>
        </div>

      </div>


      {/* Right Image */}
      <div className="banner1-image">

        <img
          src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=1200&q=80"
          alt="Fashion Collection"
        />

        <div className="banner1-sale">
          <span>UP TO</span>
          <strong>50%</strong>
          <span>OFF</span>
        </div>

        <div className="banner1-image-label">
          <span>THE LATEST</span>
          <strong>COLLECTION 01233</strong>
        </div>

      </div>

    </section>
  );
}

export default Banner1;
import React from "react";
import "./Hero.css";

function Banner() {
  return (
    <section className="dual-banner-section">
      <div className="dual-banner-container">

        {/* Left Promo Card */}
        <div className="promo-card left-promo">

          <img
            src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=1200&auto=format&fit=crop"
            alt="Summer 2024"
            className="promo-image"
          />

          <div className="promo-overlay"></div>

          <div className="promo-content">

            <span className="sale-badge">
              Sale Up to 50% Off
            </span>

            <h2>
              Summer <span>2024</span>
            </h2>

            <p>
              Level up your warm-weather wardrobe with vibrant silhouettes
              and breathable staples.
            </p>

            <div className="button-wrapper">
              <a href="#popular" className="shop-btn outline-btn">
                Shop Now
              </a>
            </div>

          </div>
        </div>


        {/* Right Promo Card */}
        <div className="promo-card right-promo">

          <img
            src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?q=80&w=1200&auto=format&fit=crop"
            alt="New Summer Collection"
            className="promo-image"
          />

          <div className="promo-overlay"></div>

          <div className="promo-content">

            <span className="sale-badge white-badge">
              Sale Up to 50% Off
            </span>

            <h2>
              New Summer Collection
            </h2>

            <p>
              Discover iconic cuts, modern tailoring, and refreshing colors
              crafted for every occasion.
            </p>

            <div className="button-wrapper">
              <a href="#popular" className="shop-btn filled-btn">
                Shop Now
              </a>
            </div>

          </div>
        </div>

      </div>
    </section>
  );
}

export default Banner;
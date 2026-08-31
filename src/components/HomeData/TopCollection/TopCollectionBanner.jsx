import React from "react";
import "./TopCollectionBanner.css";

export const TopCollectionBanner = () => {
  return (
    <section className="top-collection-banner">

      {/* Floating Image - Top Left */}
      <div className="floating-image floating-top-left">
        <img
          src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=300&auto=format&fit=crop"
          alt=""
        />
      </div>

      {/* Floating Image - Top Right */}
      <div className="floating-image floating-top-right">
        <img
          src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=300&auto=format&fit=crop"
          alt=""
        />
      </div>

      {/* Floating Image - Bottom Left */}
      <div className="floating-image floating-bottom-left">
        <img
          src="https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=300&auto=format&fit=crop"
          alt=""
        />
      </div>

      {/* Floating Image - Bottom Right */}
      <div className="floating-image floating-bottom-right">
        <img
          src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=300&auto=format&fit=crop"
          alt=""
        />
      </div>

      {/* Central Content */}
      <div className="top-collection-content">

        <span className="exclusive-badge">
          Exclusive Showcase
        </span>

        <h2>
          Upgrade your style with our top-notch collection.
        </h2>

        <div className="collection-button-wrapper">
          <a href="#popular" className="all-collections-btn">
            All Collections
          </a>
        </div>

      </div>

    </section>
  );
};
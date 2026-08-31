import React from "react";
import { ArrowUpRight } from "lucide-react";
import "./PromoGridSection.css";

export const PromoGridSection = () => {
  return (
    <section className="promo-section">
      <div className="promo-container">
        <div className="promo-grid">

          {/* Left: Big Woman Collection Banner */}
          <div className="woman-banner-wrapper">
            <div className="promo-card woman-banner">
              <img
                src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1000&auto=format&fit=crop"
                alt="Woman Collection"
              />

              <div className="banner-button-wrapper">
                <a href="#popular" className="collection-btn">
                  Woman collection
                </a>
              </div>
            </div>
          </div>

          {/* Right: Text + 2 Cards */}
          <div className="promo-right">

            {/* Heading + Description */}
            <div className="promo-content">
              <div className="heading-row">
                <h2>
                  Set your wardrobe with our amazing selection!
                </h2>

                <a href="#popular" className="arrow-btn">
                  <ArrowUpRight size={24} />
                </a>
              </div>

              <p>
                Discover effortless sophistication with our handpicked season
                staples, designed for ultimate comfort and contemporary elegance.
              </p>
            </div>

            {/* Two Cards */}
            <div className="small-cards">

              {/* Child Fashion */}
              <div className="promo-card small-card">
                <img
                  src="https://images.unsplash.com/photo-1503944583220-79d8926ad5e2?q=80&w=600&auto=format&fit=crop"
                  alt="Child Fashion"
                />

                <div className="banner-button-wrapper">
                  <a href="#popular" className="collection-btn small-btn">
                    Child Fashion
                  </a>
                </div>
              </div>

              {/* Man Collection */}
              <div className="promo-card small-card">
                <img
                  src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=600&auto=format&fit=crop"
                  alt="Man Collection"
                />

                {/* Sale Badge */}
                <div className="sale-badge">
                  <span>50%</span>
                  <span>Sale</span>
                </div>

                <div className="banner-button-wrapper">
                  <a href="#popular" className="collection-btn small-btn">
                    Man collection
                  </a>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
  );
};
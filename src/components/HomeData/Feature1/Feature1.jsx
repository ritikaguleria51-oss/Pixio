import React, { useState } from "react";
import "./Feature1.css";

function Feature1() {
  const categories = [
    {
      name: "Shirts",
      image:
        "https://images.unsplash.com/photo-1596755389378-c31d21fd1273?auto=format&fit=crop&w=500&q=80",
    },
    {
      name: "Shorts",
      image:
        "https://images.unsplash.com/photo-1591195853828-11db59a44f6b?auto=format&fit=crop&w=500&q=80",
    },
    {
      name: "T-Shirt",
      image:
        "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=500&q=80",
    },
    {
      name: "Jeans",
      image:
        "https://images.unsplash.com/photo-1542272604-787c3835535d?auto=format&fit=crop&w=500&q=80",
    },
    {
      name: "Jackets",
      image:
        "https://images.unsplash.com/photo-1551028719-00167b16eac5?auto=format&fit=crop&w=500&q=80",
    },
    {
      name: "Dresses",
      image:
        "https://images.unsplash.com/photo-1595777457583-95e059d581b8?auto=format&fit=crop&w=500&q=80",
    },
    {
      name: "Hoodies",
      image:
        "https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=500&q=80",
    },
    {
      name: "Sneakers",
      image:
        "https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=500&q=80",
    },
  ];

  const [startIndex, setStartIndex] = useState(0);

  const visibleCategories = categories.slice(
    startIndex,
    startIndex + 4
  );

  const nextCategories = () => {
    if (startIndex + 4 < categories.length) {
      setStartIndex(startIndex + 4);
    } else {
      setStartIndex(0);
    }
  };

  const previousCategories = () => {
    if (startIndex - 4 >= 0) {
      setStartIndex(startIndex - 4);
    } else {
      setStartIndex(4);
    }
  };

  return (
    <section className="feature1">

      {/* =====================================
          LEFT YELLOW AREA
      ====================================== */}

      <div className="feature1-left">

        {/* Top Decorative Wave */}
        <div className="feature1-top-wave">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>

        {/* Decorative Elements */}
        <div className="feature1-circle-decoration"></div>
        <div className="feature1-dot"></div>

        <div className="feature1-products-wrapper">

          {/* Products */}
          <div className="feature1-products">

            {visibleCategories.map((category, index) => (
              <div
                className="feature1-product"
                key={category.name}
              >

                <div className="feature1-image-circle">
                  <img
                    src={category.image}
                    alt={category.name}
                  />
                </div>

                <button className="feature1-category-btn">
                  {category.name}
                </button>

              </div>
            ))}

          </div>


          {/* =================================
              ARROWS UNDER IMAGES
          ================================= */}

          <div className="feature1-arrows">

            <button
              className="feature1-arrow-btn"
              onClick={previousCategories}
              aria-label="Previous categories"
            >
              ←
            </button>

            <div className="feature1-slide-count">
              <span>
                {startIndex === 0 ? "01" : "02"}
              </span>
              <i></i>
              <span>02</span>
            </div>

            <button
              className="feature1-arrow-btn"
              onClick={nextCategories}
              aria-label="Next categories"
            >
              →
            </button>

          </div>

        </div>

      </div>


      {/* =====================================
          RIGHT BLACK AREA
      ====================================== */}

      <div className="feature1-right">

        {/* Explore Circle */}
        <div className="feature1-explore">

          <div className="feature1-explore-circle">

            <div className="feature1-circle-ring">
              EXPLORE • MORE • COLLECTION •
            </div>

          </div>

        </div>


        {/* Content */}
        <div className="feature1-content">

          <span className="feature1-mini-title">
            TRENDING NOW
          </span>

          <h2>
            Featured
            <br />
            Categories
          </h2>

          <p>
            Discover the most trending
            <br />
            products in Pixio.
          </p>

          <div className="feature1-line"></div>

        </div>

      </div>

    </section>
  );
}

export default Feature1;
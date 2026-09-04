import React from "react";
import "./NearbySection.css";

function NearbySection() {
  const products = [
    {
      title: "Cozy Knit Cardigan Sweater",
      discount: "Up To 79% Off",
      image:
        "https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=500&q=80",
    },
    {
      title: "Sophisticated Swagger Suit",
      discount: "Up To 79% Off",
      image:
        "https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=500&q=80",
    },
    {
      title: "Sports Leggings",
      discount: "Up To 79% Off",
      image:
        "https://images.unsplash.com/photo-1506629905607-d9a3c7b2a2f5?auto=format&fit=crop&w=500&q=80",
    },
    {
      title: "Classic Denim Collection",
      discount: "Up To 79% Off",
      image:
        "https://images.unsplash.com/photo-1542272604-787c3835535d?auto=format&fit=crop&w=500&q=80",
    },
  ];

  return (
    <section className="nearby-section">

      {/* MAP BACKGROUND */}
      <div className="nearby-map">
        <div className="map-lines map-line-1"></div>
        <div className="map-lines map-line-2"></div>
        <div className="map-lines map-line-3"></div>
        <div className="map-lines map-line-4"></div>
        <div className="map-lines map-line-5"></div>

        <div className="map-road road-1"></div>
        <div className="map-road road-2"></div>
        <div className="map-road road-3"></div>
      </div>


      {/* LEFT PRODUCT CARD */}
      <div className="nearby-left-card">

        <div className="nearby-left-image">
          <img
            src={products[0].image}
            alt={products[0].title}
          />
        </div>

        <div className="nearby-left-info">
          <h3>{products[0].title}</h3>

          <span>{products[0].discount}</span>
        </div>

      </div>


      {/* BLURRED CENTER CARD */}
      <div className="nearby-blur-card">

        <div className="blur-image"></div>

        <div className="blur-content">
          <span></span>
          <span></span>
          <span></span>
        </div>

      </div>


      {/* PIN A */}
      <div className="map-pin map-pin-a">

        <div className="pin-circle">
          A
        </div>

        <div className="pin-tail"></div>

      </div>


      {/* PIN B */}
      <div className="map-pin map-pin-b">

        <div className="pin-circle">
          B
        </div>

        <div className="pin-tail"></div>

      </div>


      {/* DISTANCE */}
      <div className="distance-label">
        <span>35.4</span>
        <small>km</small>
        <i></i>
      </div>


      {/* RIGHT CONTENT */}
      <div className="nearby-content">

        <div className="nearby-header">

          <div className="nearby-title">

            <h2>
              Discovering The
              <br />
              Hottest Nearby
              <br />
              Destinations In Your
              <br />
              Area
            </h2>

            <div className="nearby-offer">
              79% Off + Up To $107 Cashback
            </div>

          </div>


          <button className="nearby-see-all">
            See All
            <span>›</span>
          </button>

        </div>


        {/* PRODUCT CARDS */}
        <div className="nearby-products">

          {/* CARD 1 */}
          <div className="nearby-product-card tilted">

            <img
              src={products[1].image}
              alt={products[1].title}
            />

            <div className="nearby-product-info">

              <h3>{products[1].title}</h3>

              <span>{products[1].discount}</span>

            </div>

          </div>


          {/* CARD 2 */}
          <div className="nearby-product-card">

            <img
              src={products[2].image}
              alt={products[2].title}
            />

            <div className="nearby-product-info">

              <h3>{products[2].title}</h3>

              <span>{products[2].discount}</span>

            </div>

          </div>


          {/* CARD 3 */}
          <div className="nearby-product-card">

            <img
              src={products[3].image}
              alt={products[3].title}
            />

            <div className="nearby-product-info">

              <h3>{products[3].title}</h3>

              <span>{products[3].discount}</span>

            </div>

          </div>

        </div>

      </div>

    </section>
  );
}

export default NearbySection;
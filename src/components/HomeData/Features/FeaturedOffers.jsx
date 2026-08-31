import React from "react";
import { Swiper, SwiperSlide } from "swiper/react";
import { Autoplay } from "swiper/modules";
import { ChevronRight } from "lucide-react";

import "swiper/css";
import "./FeaturedOffers.css";

const OFFERS = [
  {
    id: 1,
    tag: "20% Off",
    title: "Luxury Bras",
    bgClass: "offer-pink",
    image:
      "https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?q=80&w=600&auto=format&fit=crop",
  },
  {
    id: 2,
    tag: "Sale Up to 50% Off",
    title: "Summer 2024",
    bgClass: "offer-blue",
    image:
      "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=600&auto=format&fit=crop",
  },
  {
    id: 3,
    tag: "20% Off",
    title: "Swimwear Sale",
    bgClass: "offer-light-pink",
    image:
      "https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=600&auto=format&fit=crop",
  },
  {
    id: 4,
    tag: "30% Off",
    title: "Party Dresses",
    bgClass: "offer-gray",
    image:
      "https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=600&auto=format&fit=crop",
  },
];

const FeaturedOffers = () => {
  return (
    <section className="featured-section">
      <div className="featured-container">

        {/* Header */}
        <div className="featured-header">

          <div>
            <span className="featured-subtitle">
              Handpicked
            </span>

            <h2>Featured offer for you</h2>
          </div>

          <a href="#popular" className="see-all">
            See All
            <ChevronRight size={18} />
          </a>

        </div>


        {/* Slider */}
        <Swiper
          modules={[Autoplay]}
          autoplay={{
            delay: 3500,
            pauseOnMouseEnter: true,
          }}
          spaceBetween={24}
          slidesPerView={1}
          breakpoints={{
            640: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 3,
            },
          }}
        >

          {OFFERS.map((offer) => (
            <SwiperSlide key={offer.id}>

              <div className={`offer-card ${offer.bgClass}`}>

                {/* Image */}
                <div className="offer-image">
                  <img
                    src={offer.image}
                    alt={offer.title}
                  />
                </div>

                {/* Content */}
                <div className="offer-content">

                  <div>
                    <span className="offer-tag">
                      {offer.tag}
                    </span>

                    <h3>{offer.title}</h3>
                  </div>

                  <a href="#popular" className="collect-btn">
                    Collect Now
                  </a>

                </div>

              </div>

            </SwiperSlide>
          ))}

        </Swiper>

      </div>
    </section>
  );
};

export default FeaturedOffers;
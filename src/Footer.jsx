import React from "react";
import {
  ArrowRight,
  Instagram,
  ShoppingCart,
  Headphones,
  ArrowUp,
} from "lucide-react";
import "./Footer.css";

const Footer = () => {
  const recentPosts = [
    {
      image:
        "https://images.unsplash.com/photo-1548883354-7622d03aca27?q=80&w=300&auto=format&fit=crop",
      title: "Cozy Knit Cardigan Sweater",
      date: "July 23, 2024",
    },
    {
      image:
        "https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=300&auto=format&fit=crop",
      title: "Sophisticated Swagger Suit",
      date: "July 23, 2024",
    },
    {
      image:
        "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=300&auto=format&fit=crop",
      title: "Athletic Mesh Sports Leggings",
      date: "July 23, 2024",
    },
  ];

  const stores = [
    "New York",
    "London SF",
    "Edinburgh",
    "Los Angeles",
    "Chicago",
    "Las Vegas",
  ];

  const usefulLinks = [
    "Privacy Policy",
    "Returns",
    "Terms & Conditions",
    "Contact Us",
    "Latest News",
    "Our Sitemap",
  ];

  const footerMenu = [
    "Instagram Profile",
    "New Collection",
    "Woman Dress",
    "Contact Us",
    "Latest News",
  ];

  return (
    <>
      <footer className="pixio-footer">

        <div className="footer-container">

          {/* ================= LEFT COLUMN ================= */}
          <div className="footer-brand">

            <div className="footer-logo">
              <span className="logo-icon">P</span>
              <span className="logo-text">Pixio</span>
            </div>

            <div className="contact-info">
              <p>
                <strong>Address :</strong> 451 Wall Street, UK, London
              </p>

              <p>
                <strong>E-mail :</strong> example@info.com
              </p>

              <p>
                <strong>Phone :</strong> (064) 332-1233
              </p>
            </div>

            <h3>Subscribe To Our Newsletter</h3>

            <form className="newsletter">
              <input
                type="email"
                placeholder="Your Email Address"
              />

              <button type="submit">
                <ArrowRight size={24} />
              </button>
            </form>
          </div>


          {/* ================= RECENT POSTS ================= */}
          <div className="footer-column recent-posts">

            <h3>Recent Posts</h3>

            {recentPosts.map((post, index) => (
              <div className="recent-post" key={index}>

                <img src={post.image} alt={post.title} />

                <div className="post-content">
                  <h4>{post.title}</h4>
                  <span>{post.date}</span>
                </div>

              </div>
            ))}

          </div>


          {/* ================= OUR STORES ================= */}
          <div className="footer-column">

            <h3>Our Stores</h3>

            <ul>
              {stores.map((store, index) => (
                <li key={index}>
                  <a href="#store">{store}</a>
                </li>
              ))}
            </ul>

          </div>


          {/* ================= USEFUL LINKS ================= */}
          <div className="footer-column">

            <h3>Useful Links</h3>

            <ul>
              {usefulLinks.map((link, index) => (
                <li key={index}>
                  <a href="#link">{link}</a>
                </li>
              ))}
            </ul>

          </div>


          {/* ================= FOOTER MENU ================= */}
          <div className="footer-column">

            <h3>Footer Menu</h3>

            <ul>
              {footerMenu.map((link, index) => (
                <li key={index}>
                  <a href="#menu">{link}</a>
                </li>
              ))}
            </ul>

          </div>

        </div>


        {/* ================= BOTTOM FOOTER ================= */}
        <div className="footer-bottom">

          <div className="copyright">
            © 2026{" "}
            <span>DexignZone</span>{" "}
            Theme. All Rights Reserved.
          </div>

          <div className="payment-section">

            <strong>We Accept:</strong>

            <div className="payment-cards">
              <span>VISA</span>
              <span>◢</span>
              <span>MC</span>
              <span>◉</span>
              <span>▰</span>
              <span>MC</span>
            </div>

          </div>

        </div>

      </footer>


      {/* ================= FLOATING BUTTONS ================= */}

      <div className="floating-buttons">

        <button className="support-btn">
          <Headphones size={25} />
        </button>

        <button className="cart-btn">
          <ShoppingCart size={25} />
        </button>

      </div>


      {/* Scroll To Top */}

      <button
        className="scroll-top"
        onClick={() =>
          window.scrollTo({
            top: 0,
            behavior: "smooth",
          })
        }
      >
        <ArrowUp size={24} />
      </button>

    </>
  );
};

export default Footer;
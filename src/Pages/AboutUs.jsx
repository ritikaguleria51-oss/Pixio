import { ArrowRight, Play } from "lucide-react";
import { BsInstagram } from "react-icons/bs";
import BannerOne from "../assets/images/banner-media1.png";
import BannerTwo from "../assets/images/banner-media2.png";
import BannerThree from "../assets/images/banner-media3.png";
import "./AboutUs.css";

const stats = [
  ["50+", "Items Sale"],
  ["400%", "Return On Investment"],
  ["95%", "Happy Customers"],
];

function AboutUs() {
  return (
    <main className="about-page">
      <section className="about-hero">
        <div className="about-hero-copy">
          <p className="about-kicker">About Pixio</p>
          <h1>Your Fashion Journey Starts Here. Discover Style At Pixio.</h1>
          <div className="about-breadcrumb"><a href="/">Home</a><span>/</span><span>About Us</span></div>
        </div>
        <div className="about-hero-figure">
          <img src={BannerTwo} alt="Woman wearing a summer look" />
          <span className="about-hero-sticker">Style<br />with<br />purpose</span>
        </div>
      </section>

      <section className="about-stats" aria-label="Pixio highlights">
        {stats.map(([number, label]) => (
          <div className="about-stat" key={label}>
            <strong>{number}</strong>
            <span>{label}</span>
          </div>
        ))}
      </section>

      <section className="about-story about-section">
        <div className="about-story-images">
          <img className="about-story-main" src={BannerOne} alt="Pixio fashion collection" />
          <img className="about-story-small" src={BannerThree} alt="Floral dress from the Pixio collection" />
          <span className="about-image-label">Since<br /><b>2012</b></span>
        </div>
        <div className="about-story-copy">
          <p className="about-kicker">Why Pixio?</p>
          <h2>We believe style is a way to say who you are without having to speak.</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. At Pixio, every collection is designed to make everyday dressing feel personal, confident, and effortless.</p>
          <p>From timeless essentials to expressive seasonal pieces, we bring together quality, comfort, and the freedom to find your own look.</p>
          <a className="about-text-link" href="/shop">Explore the collection <ArrowRight size={18} /></a>
        </div>
      </section>

      <section className="about-experience about-section">
        <div className="about-experience-copy">
          <p className="about-kicker">The Pixio experience</p>
          <h2>Elevate your style with a unique fashion experience.</h2>
          <p>We're dedicated to creating an exclusive fashion destination that transcends the ordinary. Our passion for style, quality, and individuality drives our mission.</p>
          <p>Our website is designed with your convenience in mind, offering secure transactions and a responsive customer support team to assist you every step of the way.</p>
          <div className="about-signature"><strong>Kenneth Fong</strong><span>CEO and founder</span></div>
        </div>
        <div className="about-video-card">
          <img src={BannerThree} alt="Model wearing a floral dress" />
          <button type="button" aria-label="Play Pixio story video"><Play size={24} fill="currentColor" /></button>
          <span>Our story in motion</span>
        </div>
      </section>

      <section className="about-cta">
        <div>
          <p className="about-kicker">Questions?</p>
          <h2>Our experts will help find the gear that's right for you.</h2>
        </div>
        <a href="/pages/contact-1">Get In Touch <ArrowRight size={19} /></a>
      </section>

      <section className="about-social">
        <BsInstagram size={20} /> <span>Follow the journey</span> <b>@pixio.style</b>
      </section>
    </main>
  );
}

export default AboutUs;
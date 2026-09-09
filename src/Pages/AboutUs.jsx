import { useEffect, useState } from "react";
import { ArrowRight, Play } from "lucide-react";
import { BsInstagram } from "react-icons/bs";
import BannerOne from "../assets/images/banner-media1.png";
import BannerTwo from "../assets/images/banner-media2.png";
import BannerThree from "../assets/images/banner-media3.png";
import "./AboutUs.css";

const API_URL = process.env.REACT_APP_API_URL || "http://127.0.0.1:8000";
const defaultContent = {
  hero_kicker: "About Pixio", hero_title: "Your Fashion Journey Starts Here. Discover Style At Pixio.", stat_one_number: "50+", stat_one_label: "Items Sale", stat_two_number: "400%", stat_two_label: "Return On Investment", stat_three_number: "95%", stat_three_label: "Happy Customers", story_kicker: "Why Pixio?", story_title: "We believe style is a way to say who you are without having to speak.", story_paragraph_one: "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. At Pixio, every collection is designed to make everyday dressing feel personal, confident, and effortless.", story_paragraph_two: "From timeless essentials to expressive seasonal pieces, we bring together quality, comfort, and the freedom to find your own look.", story_link_text: "Explore the collection", story_link_url: "/shop", experience_kicker: "The Pixio experience", experience_title: "Elevate your style with a unique fashion experience.", experience_paragraph_one: "We're dedicated to creating an exclusive fashion destination that transcends the ordinary. Our passion for style, quality, and individuality drives our mission.", experience_paragraph_two: "Our website is designed with your convenience in mind, offering secure transactions and a responsive customer support team to assist you every step of the way.", signature_name: "Kenneth Fong", signature_role: "CEO and founder", cta_kicker: "Questions?", cta_title: "Our experts will help find the gear that's right for you.", instagram_handle: "@pixio.style",
};

function imageUrl(path, fallback) { return path ? (path.startsWith("http") ? path : `${API_URL}/storage/${path}`) : fallback; }

function AboutUs() {
  const [content, setContent] = useState(defaultContent);
  const stats = [1, 2, 3].map((number) => [content[`stat_${number}_number`], content[`stat_${number}_label`]]);

  useEffect(() => {
    const controller = new AbortController();
    fetch(`${API_URL}/api/about-us`, { signal: controller.signal }).then((response) => response.ok ? response.json() : null).then((data) => data && setContent((current) => ({ ...current, ...data }))).catch((error) => { if (error.name !== "AbortError") return undefined; return undefined; });
    return () => controller.abort();
  }, []);

  return (
    <main className="about-page">
      <section className="about-hero">
        <div className="about-hero-copy">
          <p className="about-kicker">{content.hero_kicker}</p>
          <h1>{content.hero_title}</h1>
          <div className="about-breadcrumb"><a href="/">Home</a><span>/</span><span>About Us</span></div>
        </div>
        <div className="about-hero-figure">
          <img src={imageUrl(content.hero_image, BannerTwo)} alt={content.hero_title} />
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
          <img className="about-story-main" src={imageUrl(content.story_image, BannerOne)} alt="Pixio fashion collection" />
          <img className="about-story-small" src={imageUrl(content.detail_image, BannerThree)} alt="Floral dress from the Pixio collection" />
          <span className="about-image-label">Since<br /><b>2012</b></span>
        </div>
        <div className="about-story-copy">
          <p className="about-kicker">{content.story_kicker}</p>
          <h2>{content.story_title}</h2>
          <p>{content.story_paragraph_one}</p>
          <p>{content.story_paragraph_two}</p>
          <a className="about-text-link" href={content.story_link_url}>{content.story_link_text} <ArrowRight size={18} /></a>
        </div>
      </section>

      <section className="about-experience about-section">
        <div className="about-experience-copy">
          <p className="about-kicker">{content.experience_kicker}</p>
          <h2>{content.experience_title}</h2>
          <p>{content.experience_paragraph_one}</p>
          <p>{content.experience_paragraph_two}</p>
          <div className="about-signature"><strong>{content.signature_name}</strong><span>{content.signature_role}</span></div>
        </div>
        <div className="about-video-card">
          <img src={imageUrl(content.detail_image, BannerThree)} alt="Model wearing a floral dress" />
          <button type="button" aria-label="Play Pixio story video"><Play size={24} fill="currentColor" /></button>
          <span>Our story in motion</span>
        </div>
      </section>

      <section className="about-cta">
        <div>
          <p className="about-kicker">{content.cta_kicker}</p>
          <h2>{content.cta_title}</h2>
        </div>
        <a href="/pages/contact-1">Get In Touch <ArrowRight size={19} /></a>
      </section>

      <section className="about-social">
        <BsInstagram size={20} /> <span>Follow the journey</span> <b>{content.instagram_handle}</b>
      </section>
    </main>
  );
}

export default AboutUs;
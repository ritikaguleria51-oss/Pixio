import { ArrowRight, Mail } from "lucide-react";
import { BsInstagram } from "react-icons/bs";
import BannerOne from "../assets/images/banner-media1.png";
import BannerTwo from "../assets/images/banner-media2.png";
import "./AboutMe.css";

function AboutMe() {
  return (
    <main className="about-me-page">
      <section className="about-me-hero">
        <div className="about-me-hero-copy">
          <p className="about-me-kicker">The person behind Pixio</p>
          <h1>About Me</h1>
          <nav aria-label="Breadcrumb"><a href="/">Home</a><span>/</span><span>About Me</span></nav>
        </div>
        <div className="about-me-hero-image"><img src={BannerOne} alt="Pixio founder in a bright fashion studio" /></div>
      </section>

      <section className="about-me-intro">
        <div className="about-me-portrait"><img src={BannerTwo} alt="Portrait from the Pixio fashion collection" /><span>01 / 03</span></div>
        <div className="about-me-copy">
          <p className="about-me-kicker">Hello, I'm Kenneth</p>
          <h2>Pixio. Your style, quality, individuality. Redefining fashion together.</h2>
          <p>At Pixio, we are on a mission to redefine fashion by blending style, quality, and individuality into every garment we offer. I believe that what you wear is an extension of your unique personality, and it should reflect your values and aspirations.</p>
          <p>Every collection starts with a simple question: how can clothing help you feel more like yourself? The answer lives in the details, the fit, and the freedom to make a look your own.</p>
          <div className="about-me-signature"><strong>Kenneth Fong</strong><span>Founder & creative director</span></div>
        </div>
      </section>

      <section className="about-me-values">
        <p className="about-me-kicker">What I believe</p>
        <div className="about-me-value-grid">
          <article><b>01</b><h3>Style should feel personal.</h3><p>Trends are an invitation, never a rule. The best wardrobe is the one that sounds like you.</p></article>
          <article><b>02</b><h3>Quality earns its place.</h3><p>Good materials, thoughtful construction, and pieces made to stay in rotation matter.</p></article>
          <article><b>03</b><h3>Shopping can feel human.</h3><p>Clear advice, considered service, and a little delight should be part of every order.</p></article>
        </div>
      </section>

      <section className="about-me-quote">
        <span>“</span>
        <blockquote>Clothes are not the answer to who we are. They are a beautiful way to ask the question.</blockquote>
        <a href="/shop">Explore my latest edit <ArrowRight size={18} /></a>
      </section>

      <section className="about-me-contact">
        <div><p className="about-me-kicker">Stay in touch</p><h2>Have a thought, a question, or a great outfit idea?</h2></div>
        <div className="about-me-contact-links"><a href="mailto:hello@pixio.style"><Mail size={18} /> hello@pixio.style</a><a href="/pages/contact-1"><BsInstagram size={18} /> @pixio.style</a></div>
      </section>
    </main>
  );
}

export default AboutMe;
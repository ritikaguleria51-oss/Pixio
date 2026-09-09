import { useEffect, useState } from "react";
import { ArrowRight, Mail } from "lucide-react";
import { BsInstagram } from "react-icons/bs";
import BannerOne from "../assets/images/banner-media1.png";
import BannerTwo from "../assets/images/banner-media2.png";
import "./AboutMe.css";

const API_URL = process.env.REACT_APP_API_URL || "http://127.0.0.1:8000";

const defaultContent = {
  hero_kicker: "The person behind Pixio",
  hero_title: "About Me",
  intro_kicker: "Hello, I'm Kenneth",
  intro_title: "Pixio. Your style, quality, individuality. Redefining fashion together.",
  intro_paragraph_one: "At Pixio, we are on a mission to redefine fashion by blending style, quality, and individuality into every garment we offer. I believe that what you wear is an extension of your unique personality, and it should reflect your values and aspirations.",
  intro_paragraph_two: "Every collection starts with a simple question: how can clothing help you feel more like yourself? The answer lives in the details, the fit, and the freedom to make a look your own.",
  signature_name: "Kenneth Fong",
  signature_role: "Founder & creative director",
  values_kicker: "What I believe",
  value_one_title: "Style should feel personal.",
  value_one_description: "Trends are an invitation, never a rule. The best wardrobe is the one that sounds like you.",
  value_two_title: "Quality earns its place.",
  value_two_description: "Good materials, thoughtful construction, and pieces made to stay in rotation matter.",
  value_three_title: "Shopping can feel human.",
  value_three_description: "Clear advice, considered service, and a little delight should be part of every order.",
  quote: "Clothes are not the answer to who we are. They are a beautiful way to ask the question.",
  contact_kicker: "Stay in touch",
  contact_title: "Have a thought, a question, or a great outfit idea?",
  contact_email: "hello@pixio.style",
  instagram_handle: "@pixio.style",
};

function imageUrl(path, fallback) {
  if (!path) return fallback;
  return path.startsWith("http") ? path : `${API_URL}/storage/${path}`;
}

function instagramUrl(handle) {
  return `https://www.instagram.com/${handle.replace(/^@/, "")}`;
}

function AboutMe() {
  const [content, setContent] = useState(defaultContent);
  const values = [1, 2, 3].map((number) => ({
    number: String(number).padStart(2, "0"),
    title: content[`value_${number}_title`],
    description: content[`value_${number}_description`],
  }));

  useEffect(() => {
    const controller = new AbortController();

    fetch(`${API_URL}/api/about-me`, { signal: controller.signal })
      .then((response) => {
        if (!response.ok) throw new Error("Unable to load About Me content");
        return response.json();
      })
      .then((data) => data && setContent((current) => ({ ...current, ...data })))
      .catch((error) => {
        if (error.name !== "AbortError") return undefined;
        return undefined;
      });

    return () => controller.abort();
  }, []);

  return (
    <main className="about-me-page">
      <section className="about-me-hero">
        <div className="about-me-hero-copy">
          <p className="about-me-kicker">{content.hero_kicker}</p>
          <h1>{content.hero_title}</h1>
          <nav aria-label="Breadcrumb"><a href="/">Home</a><span>/</span><span>About Me</span></nav>
        </div>
        <div className="about-me-hero-image"><img src={imageUrl(content.hero_image, BannerOne)} alt={content.hero_title} /></div>
      </section>

      <section className="about-me-intro">
        <div className="about-me-portrait"><img src={imageUrl(content.portrait_image, BannerTwo)} alt={content.signature_name} /><span>01 / 03</span></div>
        <div className="about-me-copy">
          <p className="about-me-kicker">{content.intro_kicker}</p>
          <h2>{content.intro_title}</h2>
          <p>{content.intro_paragraph_one}</p>
          <p>{content.intro_paragraph_two}</p>
          <div className="about-me-signature"><strong>{content.signature_name}</strong><span>{content.signature_role}</span></div>
        </div>
      </section>

      <section className="about-me-values">
        <p className="about-me-kicker">{content.values_kicker}</p>
        <div className="about-me-value-grid">
          {values.map((value) => (
            <article key={value.number}><b>{value.number}</b><h3>{value.title}</h3><p>{value.description}</p></article>
          ))}
        </div>
      </section>

      <section className="about-me-quote">
        <span>“</span>
        <blockquote>{content.quote}</blockquote>
        <a href="/shop">Explore my latest edit <ArrowRight size={18} /></a>
      </section>

      <section className="about-me-contact">
        <div><p className="about-me-kicker">{content.contact_kicker}</p><h2>{content.contact_title}</h2></div>
        <div className="about-me-contact-links"><a href={`mailto:${content.contact_email}`}><Mail size={18} /> {content.contact_email}</a><a href={instagramUrl(content.instagram_handle)} target="_blank" rel="noreferrer"><BsInstagram size={18} /> {content.instagram_handle}</a></div>
      </section>
    </main>
  );
}

export default AboutMe;
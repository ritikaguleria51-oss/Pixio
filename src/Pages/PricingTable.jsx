import { useEffect, useState } from "react";
import { ArrowRight } from "lucide-react";
import { BsCheckLg, BsX } from "react-icons/bs";
import BannerThree from "../assets/images/banner-media3.png";
import "./PricingTable.css";

const API_URL = process.env.REACT_APP_API_URL || "http://127.0.0.1:8000";
const defaultContent = { hero_kicker: "Find your fit", hero_title: "Pricing Table", hero_description: "Choose a plan that gives your style journey the right amount of room to grow.", intro_kicker: "A plan for every point of view", intro_title: "Style support that works at your pace.", intro_description: "Start simply, grow into more, or choose the complete Pixio experience. Every plan is designed to make discovering your style feel clear and enjoyable.", monthly_label: "Monthly", yearly_label: "Yearly", yearly_badge: "Save 20%", note_title: "Not sure which plan is right for you?", note_description: "Our style team can help you choose a starting point.", note_link_text: "Talk to an expert", note_link_url: "/pages/contact-1", plans: [
  { name: "Starter Plan", price: "19", currency: "$", period_label: "/Month", description: "A simple beginning for discovering your everyday Pixio rhythm.", button_text: "Try For Free", button_url: "/pages/contact-1", features: [{ name: "Access to all features", included: true }, { name: "Assisted onboarding support", included: true }, { name: "Personal style notes", included: true }, { name: "Monthly edit review", included: false }, { name: "Priority styling support", included: false }] },
  { name: "Popular Plan", price: "39", currency: "$", period_label: "/Month", description: "For shoppers ready to make their wardrobe feel more intentional.", popular: true, button_text: "Try For Free", button_url: "/pages/contact-1", features: [{ name: "Access to all features", included: true }, { name: "Assisted onboarding support", included: true }, { name: "Personal style notes", included: true }, { name: "Monthly edit review", included: true }, { name: "Priority styling support", included: false }] },
  { name: "Atelier Plan", price: "79", currency: "$", period_label: "/Month", description: "A considered, personal service for the full Pixio experience.", button_text: "Try For Free", button_url: "/pages/contact-1", features: [{ name: "Access to all features", included: true }, { name: "Assisted onboarding support", included: true }, { name: "Personal style notes", included: true }, { name: "Monthly edit review", included: true }, { name: "Priority styling support", included: true }] },
] };

function imageUrl(path) { return path ? (path.startsWith("http") ? path : `${API_URL}/storage/${path}`) : BannerThree; }

function PricingTable() {
  const [content, setContent] = useState(defaultContent);
  const [billing, setBilling] = useState("monthly");

  useEffect(() => {
    const controller = new AbortController();
    fetch(`${API_URL}/api/pricing`, { signal: controller.signal }).then((response) => response.ok ? response.json() : null).then((data) => data && setContent((current) => ({ ...current, ...data }))).catch((error) => { if (error.name !== "AbortError") return undefined; return undefined; });
    return () => controller.abort();
  }, []);

  return (
    <main className="pricing-page">
      <section className="pricing-hero">
        <div className="pricing-hero-copy">
          <p className="pricing-kicker">{content.hero_kicker}</p>
          <h1>{content.hero_title}</h1>
          <p>{content.hero_description}</p>
          <nav aria-label="Breadcrumb"><a href="/">Home</a><span>/</span><span>Pricing Table</span></nav>
        </div>
        <div className="pricing-hero-image"><img src={imageUrl(content.hero_image)} alt={content.hero_title} /><span>Made for<br /><b>your next chapter</b></span></div>
      </section>

      <section className="pricing-intro">
        <p className="pricing-kicker">{content.intro_kicker}</p>
        <h2>{content.intro_title}</h2>
        <p>{content.intro_description}</p>
        <div className="pricing-toggle" role="group" aria-label="Billing period"><button className={billing === "monthly" ? "is-active" : ""} type="button" onClick={() => setBilling("monthly")}>{content.monthly_label}</button><button className={billing === "yearly" ? "is-active" : ""} type="button" onClick={() => setBilling("yearly")}>{content.yearly_label} <small>{content.yearly_badge}</small></button></div>
      </section>

      <section className="pricing-grid" aria-label="Pricing plans">
        {content.plans.map((plan) => (
          <article className={`pricing-card ${plan.popular ? "is-popular" : ""}`} key={plan.name}>
            {plan.popular && <span className="pricing-badge">Most popular</span>}
            <p className="pricing-card-label">{plan.name}</p>
            <h3><sup>{plan.currency}</sup>{plan.price}<span>{plan.period_label}</span></h3>
            <p className="pricing-card-description">{plan.description}</p>
            <a className="pricing-button" href={plan.button_url}>{plan.button_text} <ArrowRight size={17} /></a>
            <div className="pricing-features"><h4>{plan.feature_heading || "Key Features:"}</h4>{plan.features.map((feature) => <div className={`pricing-feature ${feature.included ? "included" : "excluded"}`} key={feature.name}>{feature.included ? <BsCheckLg /> : <BsX />}<span>{feature.name}</span></div>)}</div>
          </article>
        ))}
      </section>

      <section className="pricing-note"><strong>{content.note_title}</strong><span>{content.note_description}</span><a href={content.note_link_url}>{content.note_link_text} <ArrowRight size={17} /></a></section>
    </main>
  );
}

export default PricingTable;
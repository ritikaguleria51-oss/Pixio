import { ArrowRight } from "lucide-react";
import { BsCheckLg, BsX } from "react-icons/bs";
import BannerThree from "../assets/images/banner-media3.png";
import "./PricingTable.css";

const plans = [
  {
    name: "Starter Plan",
    price: "19",
    description: "A simple beginning for discovering your everyday Pixio rhythm.",
    features: [["Access to all features", true], ["Assisted onboarding support", true], ["Personal style notes", true], ["Monthly edit review", false], ["Priority styling support", false]],
  },
  {
    name: "Popular Plan",
    price: "39",
    description: "For shoppers ready to make their wardrobe feel more intentional.",
    popular: true,
    features: [["Access to all features", true], ["Assisted onboarding support", true], ["Personal style notes", true], ["Monthly edit review", true], ["Priority styling support", false]],
  },
  {
    name: "Atelier Plan",
    price: "79",
    description: "A considered, personal service for the full Pixio experience.",
    features: [["Access to all features", true], ["Assisted onboarding support", true], ["Personal style notes", true], ["Monthly edit review", true], ["Priority styling support", true]],
  },
];

function PricingTable() {
  return (
    <main className="pricing-page">
      <section className="pricing-hero">
        <div className="pricing-hero-copy">
          <p className="pricing-kicker">Find your fit</p>
          <h1>Pricing Table</h1>
          <p>Choose a plan that gives your style journey the right amount of room to grow.</p>
          <nav aria-label="Breadcrumb"><a href="/">Home</a><span>/</span><span>Pricing Table</span></nav>
        </div>
        <div className="pricing-hero-image"><img src={BannerThree} alt="Model wearing a Pixio floral dress" /><span>Made for<br /><b>your next chapter</b></span></div>
      </section>

      <section className="pricing-intro">
        <p className="pricing-kicker">A plan for every point of view</p>
        <h2>Style support that works at your pace.</h2>
        <p>Start simply, grow into more, or choose the complete Pixio experience. Every plan is designed to make discovering your style feel clear and enjoyable.</p>
        <div className="pricing-toggle" role="group" aria-label="Billing period"><button className="is-active" type="button">Monthly</button><button type="button">Yearly <small>Save 20%</small></button></div>
      </section>

      <section className="pricing-grid" aria-label="Pricing plans">
        {plans.map((plan) => (
          <article className={`pricing-card ${plan.popular ? "is-popular" : ""}`} key={plan.name}>
            {plan.popular && <span className="pricing-badge">Most popular</span>}
            <p className="pricing-card-label">{plan.name}</p>
            <h3><sup>$</sup>{plan.price}<span>/Month</span></h3>
            <p className="pricing-card-description">{plan.description}</p>
            <a className="pricing-button" href="/pages/contact-1">Try For Free <ArrowRight size={17} /></a>
            <div className="pricing-features"><h4>Key Features:</h4>{plan.features.map(([feature, included]) => <div className={`pricing-feature ${included ? "included" : "excluded"}`} key={feature}>{included ? <BsCheckLg /> : <BsX />}<span>{feature}</span></div>)}</div>
          </article>
        ))}
      </section>

      <section className="pricing-note"><strong>Not sure which plan is right for you?</strong><span>Our style team can help you choose a starting point.</span><a href="/pages/contact-1">Talk to an expert <ArrowRight size={17} /></a></section>
    </main>
  );
}

export default PricingTable;
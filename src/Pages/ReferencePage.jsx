import { useLocation } from "react-router-dom";
import { BsArrowRight, BsCartPlus, BsHeart } from "react-icons/bs";
import { IoIosSearch } from "react-icons/io";
import ReferenceImageOne from "../assets/images/banner-media1.png";
import ReferenceImageTwo from "../assets/images/banner-media2.png";
import ReferenceImageThree from "../assets/images/banner-media3.png";
import "./ReferencePage.css";

const featureImages = [ReferenceImageOne, ReferenceImageTwo, ReferenceImageThree];

function formatTitle(pathname) {
  const lastSegment = pathname.split("/").filter(Boolean).pop() || "home";
  return lastSegment
    .replace(/-/g, " ")
    .replace(/\b\w/g, (letter) => letter.toUpperCase());
}

function getPageCopy(pathname) {
  if (pathname.startsWith("/product/")) {
    return ["Product Details", "A closer look at the pieces, fit, and details behind the collection."];
  }
  if (pathname.startsWith("/blog/")) {
    return ["Blog", "Fresh ideas, styling notes, and inspiration from the Pixio journal."];
  }
  if (pathname.startsWith("/post-layout")) {
    return ["Post Layout", "Choose a thoughtful editorial layout for every story and collection."];
  }
  if (pathname === "/portfolio") {
    return ["Portfolio", "A curated view of our latest creative work and visual stories."];
  }
  if (pathname === "/pages") {
    return ["Pages", "Explore the essential pages and experiences inside Pixio."];
  }
  return [formatTitle(pathname), "Discover a carefully selected Pixio experience made for modern shoppers."];
}

function ReferencePage() {
  const { pathname } = useLocation();
  const [title, description] = getPageCopy(pathname);
  const cards = [
    `${title} Collection`,
    "Curated seasonal edit",
    "Everyday essentials",
  ];

  return (
    <main className="reference-page">
      <section className="reference-hero">
        <div>
          <p>Pixio collection</p>
          <h1>{title}</h1>
          <nav aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span>{title}</span></nav>
        </div>
      </section>
      <section className="reference-content">
        <div className="reference-intro">
          <p className="reference-eyebrow">Explore Pixio</p>
          <h2>{description}</h2>
          <div className="reference-tools">
            <label><IoIosSearch /><input type="search" placeholder="Search this page" /></label>
            <button type="button">Latest <BsArrowRight /></button>
          </div>
        </div>
        <div className="reference-card-grid">
          {cards.map((card, index) => (
            <article className="reference-card" key={card}>
              <div className="reference-card-image">
                <img src={featureImages[index]} alt={card} />
                <button type="button" aria-label={`Add ${card} to wishlist`}><BsHeart /></button>
              </div>
              <div className="reference-card-copy">
                <p>New season</p>
                <h3>{card}</h3>
                <strong>$80</strong>
                <button type="button">Add to cart <BsCartPlus /></button>
              </div>
            </article>
          ))}
        </div>
      </section>
    </main>
  );
}

export default ReferencePage;

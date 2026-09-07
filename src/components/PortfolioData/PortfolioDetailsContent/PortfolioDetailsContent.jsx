import "./PortfolioDetailsContent.css";
import PortfolioImageOne from "../../../assets/images/banner-media1.png";
import PortfolioImageTwo from "../../../assets/images/banner-media2.png";
import PortfolioImageThree from "../../../assets/images/banner-media3.png";

const metadata = [
  ["Client", "Martin Stewart"],
  ["Seatpad", "100% Polyester"],
  ["Location", "London, UK"],
  ["Shipping", "Free Shipping"],
  ["Category", "Child Trolly"],
];

function PortfolioDetailsContent() {
  return (
    <section className="portfolio-details-content">
      <div className="portfolio-details-gallery">
        <img className="portfolio-details-main-image" src={PortfolioImageOne} alt="Fashion collection look" />
        <div className="portfolio-details-small-gallery">
          <img src={PortfolioImageTwo} alt="Fashion collection detail" />
          <img src={PortfolioImageThree} alt="Fashion collection styling" />
        </div>
      </div>

      <div className="portfolio-details-copy">
        <div className="portfolio-details-article">
          <h2>Research &amp; Planning</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
          <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
        </div>
        <dl className="portfolio-details-meta">
          {metadata.map(([label, value]) => <div key={label}><dt>{label}</dt><dd>{value}</dd></div>)}
        </dl>
      </div>

      <div className="portfolio-details-nav">
        <a href="/portfolio/details-5"><span>‹</span><small>Swagger</small><strong>Sophisticated Swagger Suit</strong></a>
        <a href="/portfolio/details-2"><small>Sweater</small><strong>Cozy Knit Cardigan Sweater</strong><span>›</span></a>
      </div>
    </section>
  );
}

export default PortfolioDetailsContent;

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

function PortfolioDetailsContent({ project }) {
  const imageUrl = (path, fallback) => path ? (path.startsWith("http") ? path : `${process.env.REACT_APP_API_URL || "http://127.0.0.1:8000"}/storage/${path}`) : fallback;
  const details = project ? [["Client", project.client], ["Seatpad", project.seatpad], ["Location", project.location], ["Shipping", project.shipping], ["Category", project.category]] : metadata;
  return (
    <section className="portfolio-details-content">
      <div className="portfolio-details-gallery">
        <img className="portfolio-details-main-image" src={imageUrl(project?.image_main, PortfolioImageOne)} alt={project?.hero_title || "Fashion collection look"} />
        <div className="portfolio-details-small-gallery">
          <img src={imageUrl(project?.image_two, PortfolioImageTwo)} alt="Fashion collection detail" />
          <img src={imageUrl(project?.image_three, PortfolioImageThree)} alt="Fashion collection styling" />
        </div>
      </div>

      <div className="portfolio-details-copy">
        <div className="portfolio-details-article">
          <h2>{project?.article_title || "Research & Planning"}</h2>
          <p>{project?.article_paragraph_one || "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text."}</p>
          <p>{project?.article_paragraph_two || "It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters."}</p>
        </div>
        <dl className="portfolio-details-meta">
          {details.map(([label, value]) => <div key={label}><dt>{label}</dt><dd>{value}</dd></div>)}
        </dl>
      </div>

      <div className="portfolio-details-nav">
        <a href={project?.previous_url || "/portfolio/details-5"}><span>‹</span><small>{project?.previous_label || "Swagger"}</small><strong>{project?.previous_title || "Sophisticated Swagger Suit"}</strong></a>
        <a href={project?.next_url || "/portfolio/details-2"}><small>{project?.next_label || "Sweater"}</small><strong>{project?.next_title || "Cozy Knit Cardigan Sweater"}</strong><span>›</span></a>
      </div>
    </section>
  );
}

export default PortfolioDetailsContent;

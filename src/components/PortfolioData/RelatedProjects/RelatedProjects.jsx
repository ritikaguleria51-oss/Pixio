import "./RelatedProjects.css";
import ProjectImageOne from "../../../assets/images/banner-media1.png";
import ProjectImageTwo from "../../../assets/images/banner-media2.png";
import ProjectImageThree from "../../../assets/images/banner-media3.png";

const projects = [
  ["SWEATER", "Cozy Knit Cardigan Sweater", ProjectImageOne, "/portfolio/details-2"],
  ["SUIT", "Sophisticated Swagger Suit", ProjectImageTwo, "/portfolio/details-5"],
  ["JEANS", "Classic Denim Skinny Jeans", ProjectImageThree, "/portfolio/details-3"],
  ["LEGGINGS", "Athletic Mesh Sports Leggings", ProjectImageOne, "/portfolio/details-4"],
  ["SWEATER", "Cozy Knit Cardigan Sweater", ProjectImageTwo, "/portfolio/details-2"],
];

function RelatedProjects() {
  return (
    <section className="related-projects">
      <div className="related-projects-heading">
        <p>Explore more</p>
        <h2>Related Projects</h2>
      </div>
      <div className="related-projects-grid">
        {projects.map(([category, title, image, href]) => (
          <a className="related-project" href={href} key={`${category}-${title}-${image}`}>
            <img src={image} alt={title} />
            <span>/ {category}</span>
            <h3>{title}</h3>
          </a>
        ))}
      </div>
    </section>
  );
}

export default RelatedProjects;

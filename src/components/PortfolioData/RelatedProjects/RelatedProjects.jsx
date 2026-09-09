import "./RelatedProjects.css";
import ProjectImageOne from "../../../assets/images/banner-media1.png";
import ProjectImageTwo from "../../../assets/images/banner-media2.png";
import ProjectImageThree from "../../../assets/images/banner-media3.png";

function RelatedProjects({ projects: apiProjects = [] }) {
  const projects = apiProjects.length ? apiProjects.map((project) => ({ category: project.related_category || project.category, title: project.hero_title, image: project.image_main, href: "/portfolio/details-1" })) : [
    { category: "SWEATER", title: "Cozy Knit Cardigan Sweater", image: ProjectImageOne, href: "/portfolio/details-2" }, { category: "SUIT", title: "Sophisticated Swagger Suit", image: ProjectImageTwo, href: "/portfolio/details-5" }, { category: "JEANS", title: "Classic Denim Skinny Jeans", image: ProjectImageThree, href: "/portfolio/details-3" }, { category: "LEGGINGS", title: "Athletic Mesh Sports Leggings", image: ProjectImageOne, href: "/portfolio/details-4" },
  ];
  return (
    <section className="related-projects">
      <div className="related-projects-heading">
        <p>Explore more</p>
        <h2>Related Projects</h2>
      </div>
      <div className="related-projects-grid">
        {projects.map((project) => (
          <a className="related-project" href={project.href} key={`${project.category}-${project.title}`}>
            <img src={project.image?.startsWith?.("http") ? project.image : project.image ? `${process.env.REACT_APP_API_URL || "http://127.0.0.1:8000"}/storage/${project.image}` : ProjectImageOne} alt={project.title} />
            <span>/ {project.category}</span>
            <h3>{project.title}</h3>
          </a>
        ))}
      </div>
    </section>
  );
}

export default RelatedProjects;

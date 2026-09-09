import "./PortfolioDetailsHero.css";

function PortfolioDetailsHero({ project }) {
  return (
    <section className="portfolio-details-hero">
      <div className="portfolio-details-hero-content">
        <h1>{project?.hero_title || <>Make Your Fashion Look<br />Mire Charming</>}</h1>
        <nav aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span aria-hidden="true">›</span>
          <span>{project?.hero_breadcrumb || "Portfolio Details 1"}</span>
        </nav>
      </div>
    </section>
  );
}

export default PortfolioDetailsHero;

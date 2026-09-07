import "./PortfolioDetailsHero.css";

function PortfolioDetailsHero() {
  return (
    <section className="portfolio-details-hero">
      <div className="portfolio-details-hero-content">
        <h1>Make Your Fashion Look<br />Mire Charming</h1>
        <nav aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span aria-hidden="true">›</span>
          <span>Portfolio Details 1</span>
        </nav>
      </div>
    </section>
  );
}

export default PortfolioDetailsHero;

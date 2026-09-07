import PortfolioDetailsHero from "../components/PortfolioData/PortfolioDetailsHero/PortfolioDetailsHero";
import PortfolioDetailsContent from "../components/PortfolioData/PortfolioDetailsContent/PortfolioDetailsContent";
import RelatedProjects from "../components/PortfolioData/RelatedProjects/RelatedProjects";

function PortfolioDetails1() {
  return (
    <main className="portfolio-details-page">
      <PortfolioDetailsHero />
      <PortfolioDetailsContent />
      <RelatedProjects />
    </main>
  );
}

export default PortfolioDetails1;

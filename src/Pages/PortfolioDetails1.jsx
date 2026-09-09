import { useEffect, useState } from "react";
import PortfolioDetailsHero from "../components/PortfolioData/PortfolioDetailsHero/PortfolioDetailsHero";
import PortfolioDetailsContent from "../components/PortfolioData/PortfolioDetailsContent/PortfolioDetailsContent";
import RelatedProjects from "../components/PortfolioData/RelatedProjects/RelatedProjects";

function PortfolioDetails1() {
  const [content, setContent] = useState({ project: null, related: [] });
  useEffect(() => {
    const controller = new AbortController();
    fetch(`${process.env.REACT_APP_API_URL || "http://127.0.0.1:8000"}/api/portfolio`, { signal: controller.signal }).then((response) => response.ok ? response.json() : null).then((data) => data && setContent(data)).catch((error) => { if (error.name !== "AbortError") return undefined; return undefined; });
    return () => controller.abort();
  }, []);

  return (
    <main className="portfolio-details-page">
      <PortfolioDetailsHero project={content.project} />
      <PortfolioDetailsContent project={content.project} />
      <RelatedProjects projects={content.related} />
    </main>
  );
}

export default PortfolioDetails1;

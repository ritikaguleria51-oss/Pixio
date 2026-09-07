import "./ShopHero.css";

function ShopHero() {
  return (
    <section className="shop-hero">
      <div className="shop-hero-content">
        <h1>Shop Standard</h1>
        <nav aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span aria-hidden="true">›</span>
          <span>Shop Standard</span>
        </nav>
      </div>
    </section>
  );
}

export default ShopHero;

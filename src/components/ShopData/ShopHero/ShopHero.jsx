import "./ShopHero.css";

function ShopHero({ title = "Shop Standard", image }) {
  const heroImage = image ? (image.startsWith("http") ? image : `${process.env.REACT_APP_API_URL || "http://127.0.0.1:8000"}/storage/${image}`) : null;

  return (
    <section className="shop-hero" style={heroImage ? { "--shop-hero-image": `url("${heroImage}")` } : undefined}>
      <div className="shop-hero-content">
        <h1>{title}</h1>
        <nav aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span aria-hidden="true">›</span>
          <span>{title}</span>
        </nav>
      </div>
    </section>
  );
}

export default ShopHero;

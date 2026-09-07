import "./BlogArchiveHero.css";

function BlogArchiveHero() {
  return (
    <section className="blog-archive-hero">
      <div className="blog-archive-hero-content">
        <h1>Blog Archive</h1>
        <nav aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span aria-hidden="true">›</span>
          <span>Blog Archive</span>
        </nav>
      </div>
    </section>
  );
}

export default BlogArchiveHero;

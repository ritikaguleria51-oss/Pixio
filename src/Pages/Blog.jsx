import "./Blog.css";

const posts = [
  {
    title: "Cozy Knit Cardigan Sweater",
    category: "Fashion",
    image: require("../assets/images/banner-media1.png"),
  },
  {
    title: "Sophisticated Swagger Suit",
    category: "Style guide",
    image: require("../assets/images/banner-media2.png"),
  },
  {
    title: "Athletic Mesh Sports Leggings",
    category: "Lifestyle",
    image: require("../assets/images/banner-media3.png"),
  },
];

function Blog() {
  return (
    <main className="blog-page">
      <section className="blog-page-hero">
        <p className="blog-page-eyebrow">The Pixio journal</p>
        <h1>Stories, style and everyday inspiration.</h1>
        <p className="blog-page-intro">
          Discover new looks, thoughtful guides, and the latest notes from the Pixio team.
        </p>
      </section>
      <section className="blog-post-grid" aria-label="Featured blog posts">
        {posts.map((post) => (
          <article className="blog-post-card" key={post.title}>
            <img src={post.image} alt={post.title} />
            <div>
              <p>{post.category}</p>
              <h2>{post.title}</h2>
              <a href="/blog">Read article</a>
            </div>
          </article>
        ))}
      </section>
    </main>
  );
}

export default Blog;

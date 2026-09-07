import "./BlogArchivePosts.css";

const posts = [
  {
    date: "20 Oct 2024",
    title: "Trendsetter Chronicles: Unveiling the Latest in Fashion",
    excerpt: "Explore the latest fashion movements, fresh silhouettes, and standout pieces that are shaping the season.",
    image: require("../../../assets/images/banner-media3.png"),
  },
  {
    date: "17 May 2024",
    title: "Chic & Unique: Personalized Fashion Finds",
    excerpt: "Discover thoughtful styling ideas and unique finds that help bring more personality to your everyday wardrobe.",
    image: require("../../../assets/images/banner-media1.png"),
  },
  {
    date: "17 May 2024",
    title: "The Anatomy of an Effective Shopping Cart Page",
    excerpt: "A closer look at the details that make an online shopping experience clear, smooth, and enjoyable.",
    image: require("../../../assets/images/banner-media2.png"),
  },
];

function BlogArchivePosts() {
  return (
    <section className="blog-archive-posts" aria-label="Blog posts">
      {posts.map((post) => (
        <article className="blog-archive-post" key={post.title}>
          <a className="blog-archive-post-image" href="/blog/archive">
            <img src={post.image} alt={post.title} />
          </a>
          <div className="blog-archive-post-content">
            <time dateTime="2024-05-17">{post.date}</time>
            <h2><a href="/blog/archive">{post.title}</a></h2>
            <p>{post.excerpt}</p>
            <a className="blog-archive-read-more" href="/blog/archive">Read More <span aria-hidden="true">›</span></a>
          </div>
        </article>
      ))}
    </section>
  );
}

export default BlogArchivePosts;

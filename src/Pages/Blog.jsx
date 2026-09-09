import { useEffect, useState } from "react";
import "./Blog.css";
import { Link } from "react-router-dom";
import BannerOne from "../assets/images/banner-media1.png";
import BannerTwo from "../assets/images/banner-media2.png";
import BannerThree from "../assets/images/banner-media3.png";

const API_URL = process.env.REACT_APP_API_URL || "http://127.0.0.1:8000";
const fallbackImages = [BannerOne, BannerTwo, BannerThree];
const defaultContent = {
  eyebrow: "The Pixio journal",
  page_title: "Stories, style and everyday inspiration.",
  page_intro: "Discover new looks, thoughtful guides, and the latest notes from the Pixio team.",
  posts: [
    { id: 1, title: "Cozy Knit Cardigan Sweater", category: "Fashion", link_text: "Read article" },
    { id: 2, title: "Sophisticated Swagger Suit", category: "Style guide", link_text: "Read article" },
    { id: 3, title: "Athletic Mesh Sports Leggings", category: "Lifestyle", link_text: "Read article" },
  ],
};

function imageUrl(path, fallback) {
  if (!path) return fallback;
  return path.startsWith("http") ? path : `${API_URL}/storage/${path}`;
}

function Blog() {
  const [content, setContent] = useState(defaultContent);

  useEffect(() => {
    const controller = new AbortController();
    fetch(`${API_URL}/api/blog`, { signal: controller.signal })
      .then((response) => response.ok ? response.json() : null)
      .then((data) => data && setContent((current) => ({ ...current, ...data })))
      .catch((error) => { if (error.name !== "AbortError") return undefined; return undefined; });
    return () => controller.abort();
  }, []);

  return (
    <main className="blog-page">
      <section className="blog-page-hero">
        <p className="blog-page-eyebrow">{content.eyebrow}</p>
        <h1>{content.page_title}</h1>
        <p className="blog-page-intro">{content.page_intro}</p>
      </section>
      <section className="blog-post-grid" aria-label="Featured blog posts">
        {content.posts.map((post, index) => (
          <Link
            className="blog-post-card"
            to={`/blog/${post.id}`}
            state={{ image: imageUrl(post.image, fallbackImages[index % fallbackImages.length]) }}
            key={post.id || post.title}
          >
            <img src={imageUrl(post.image, fallbackImages[index % fallbackImages.length])} alt={post.title} />
            <div>
              <p>{post.category}</p>
              <h2>{post.title}</h2>
              <span>{post.link_text || "Read article"} <b aria-hidden="true">↗</b></span>
            </div>
          </Link>
        ))}
      </section>
    </main>
  );
}

export default Blog;

import { useEffect, useState } from "react";
import { Link, useLocation, useParams } from "react-router-dom";
import "./BlogDetails.css";
import BannerOne from "../assets/images/banner-media1.png";
import BannerTwo from "../assets/images/banner-media2.png";
import BannerThree from "../assets/images/banner-media3.png";

const API_URL = process.env.REACT_APP_API_URL || "http://127.0.0.1:8000";
const fallbackImages = [BannerOne, BannerTwo, BannerThree];
const fallbackPosts = [
  { id: 1, title: "Cozy Knit Cardigan Sweater", category: "Fashion" },
  { id: 2, title: "Sophisticated Swagger Suit", category: "Style guide" },
  { id: 3, title: "Athletic Mesh Sports Leggings", category: "Lifestyle" },
];

function imageUrl(path, fallback) {
  if (!path) return fallback;
  return path.startsWith("http") ? path : `${API_URL}/storage/${path}`;
}

function BlogDetails() {
  const { id } = useParams();
  const location = useLocation();
  const [post, setPost] = useState(null);
  const [relatedPosts, setRelatedPosts] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    Promise.allSettled([
      fetch(`${API_URL}/api/blog/${id}`).then((response) => {
        if (!response.ok) throw new Error("Blog not found");
        return response.json();
      }),
      fetch(`${API_URL}/api/blog`).then((response) => response.ok ? response.json() : null),
    ])
      .then(([postResult, postsResult]) => {
        if (postResult.status === "rejected") throw postResult.reason;
        const data = postResult.value;
        const allPosts = postsResult.status === "fulfilled" ? postsResult.value : null;
        setPost(data);
        const posts = allPosts?.posts || fallbackPosts;
        const matchingPosts = posts
          .filter((item) => String(item.id) !== String(id))
          .sort((first, second) => Number(second.category === data.category) - Number(first.category === data.category))
          .slice(0, 3);
        setRelatedPosts(matchingPosts.length ? matchingPosts : fallbackPosts.filter((item) => String(item.id) !== String(id)));
        setLoading(false);
      })
      .catch((error) => {
        console.error(error);
        setLoading(false);
      });
  }, [id]);

  if (loading) {
    return <main className="blog-details-page blog-details-state"><p>Loading story...</p></main>;
  }

  if (!post) {
    return (
      <main className="blog-details-page blog-details-state">
        <p>This story is no longer available.</p>
        <Link to="/blog">Back to all stories</Link>
      </main>
    );
  }

  const image = post.image?.startsWith("http")
    ? post.image
    : post.image ? `${API_URL}/storage/${post.image}` : location.state?.image || BannerOne;

  return (
    <main className="blog-details-page">
      <header className="blog-post-header">
        <Link to="/blog" className="blog-details-back">← Back to journal</Link>
        <p className="blog-details-kicker">{post.category || "The Pixio journal"}</p>
        <h1>{post.title}</h1>
        <div className="blog-post-meta"><span>17 May 2024</span><i aria-hidden="true">•</i><span>By Pixio editorial</span><i aria-hidden="true">•</i><span>5 min read</span></div>
      </header>
      <img className="blog-post-cover" src={image} alt={post.title} />
      <div className="blog-post-layout">
        <article className="blog-details-body">
          <p className="blog-details-dropcap">{post.page_intro || "Style is found in the details. Explore the story behind this Pixio edit and find a little inspiration for what comes next."}</p>
          <p>From considered textures to easy everyday layers, the right pieces have a way of making the whole day feel more intentional. Take a closer look, find your favourite detail, and make it your own.</p>
          <h2>The details make the difference</h2>
          <p>Great style does not need to shout. It lives in the thoughtful choices, the quiet confidence, and the pieces that keep working long after the first impression.</p>
          <blockquote>“The best wardrobe is the one that feels completely, unmistakably yours.”</blockquote>
          <p>Build around what you love, keep it comfortable, and let every new find add a little more character to your everyday edit.</p>
          <div className="blog-details-rule" />
          <Link to="/blog" className="blog-details-next">Discover more stories <span aria-hidden="true">↗</span></Link>
        </article>
        <aside className="blog-post-sidebar">
          <div className="blog-sidebar-block"><h3>Search</h3><div className="blog-search"><input type="search" placeholder="Search stories" aria-label="Search stories" /><span aria-hidden="true">⌕</span></div></div>
          <div className="blog-sidebar-block"><h3>Categories</h3><ul className="blog-category-list">{["Fashion", "Style guide", "Lifestyle", "Beauty", "Trends"].map((category) => <li key={category}><Link to="/blog">{category}</Link><span>›</span></li>)}</ul></div>
          <div className="blog-sidebar-block"><h3>Tags</h3><div className="blog-tags">{["Vintage", "Everyday", "Style", "Edit", "Modern", "Wardrobe"].map((tag) => <Link to="/blog" key={tag}>{tag}</Link>)}</div></div>
        </aside>
      </div>
      <section className="blog-comments"><p className="blog-details-kicker">Join the conversation</p><h2>Comments <span>(02)</span></h2><div className="blog-comment"><span className="blog-comment-avatar">MP</span><div><strong>Michel Poe</strong><p>Such a beautiful edit. The details make this feel very easy to bring into an everyday wardrobe.</p><button type="button">Reply</button></div></div><div className="blog-comment"><span className="blog-comment-avatar blog-comment-avatar-alt">CA</span><div><strong>Celesto Anderson</strong><p>Love the thoughtful approach and the styling inspiration here.</p><button type="button">Reply</button></div></div></section>
      <section className="blog-related" aria-labelledby="related-stories-title">
        <div className="blog-related-heading">
          <div>
            <p className="blog-details-kicker">Keep exploring</p>
            <h2 id="related-stories-title">You may also like</h2>
          </div>
          <Link to="/blog">View all stories <span aria-hidden="true">↗</span></Link>
        </div>
        <div className="blog-related-grid">
          {relatedPosts.map((relatedPost, index) => (
            <Link className="blog-related-card" to={`/blog/${relatedPost.id}`} key={relatedPost.id || relatedPost.title}>
              <div className="blog-related-image-wrap">
                <img src={imageUrl(relatedPost.image, fallbackImages[index % fallbackImages.length])} alt={relatedPost.title} />
                <span aria-hidden="true">↗</span>
              </div>
              <p>{relatedPost.category || "Pixio journal"}</p>
              <h3>{relatedPost.title}</h3>
            </Link>
          ))}
        </div>
      </section>
    </main>
  );
}

export default BlogDetails;
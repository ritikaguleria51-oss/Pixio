import "./BlogArchiveSidebar.css";

const categories = [
  ["Dresses", "10"],
  ["Top & Blouses", "05"],
  ["Boots", "17"],
  ["Jewelry", "13"],
  ["Makeup", "06"],
  ["Fragrances", "17"],
  ["Shaving & Grooming", "13"],
  ["Jacket", "06"],
  ["Coat", "22"],
];

const latestPosts = [
  ["The Anatomy of an Effective Shopping Cart Page", "banner-media2.png"],
  ["Shopping Cart Design User-Friendly Tips and Best Practices", "banner-media1.png"],
  ["Shopping Cart Security Keeping Your Customers' Data Safe", "banner-media3.png"],
];

const tags = ["Vintage", "Wedding", "Cotton", "Linen", "Navy", "Urban", "Business Meeting", "Formal"];

function BlogArchiveSidebar() {
  return (
    <aside className="blog-archive-sidebar">
      <section className="blog-sidebar-block">
        <h3>Search</h3>
        <form className="blog-search" onSubmit={(event) => event.preventDefault()}>
          <input type="search" aria-label="Search blog" placeholder="Search" />
          <button type="submit" aria-label="Submit search">⌕</button>
        </form>
      </section>

      <section className="blog-sidebar-block">
        <h3>Category</h3>
        <ul className="blog-category-list">
          {categories.map(([name, count]) => (
            <li key={name}><a href="/blog/archive">{name}</a><span>({count})</span></li>
          ))}
        </ul>
      </section>

      <section className="blog-sidebar-block">
        <h3>Latest Post</h3>
        <div className="blog-latest-posts">
          {latestPosts.map(([title, image]) => (
            <a href="/blog/archive" key={title}>
              <img src={require(`../../../assets/images/${image}`)} alt="" />
              <span><time>17 May 2024</time><strong>{title}</strong></span>
            </a>
          ))}
        </div>
      </section>

      <section className="blog-sidebar-block">
        <h3>Tags</h3>
        <div className="blog-tags">
          {tags.map((tag) => <a href="/blog/archive" key={tag}>{tag}</a>)}
        </div>
      </section>
    </aside>
  );
}

export default BlogArchiveSidebar;

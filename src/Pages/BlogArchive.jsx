import BlogArchiveHero from "../components/BlogData/BlogArchiveHero/BlogArchiveHero";
import BlogArchivePosts from "../components/BlogData/BlogArchivePosts/BlogArchivePosts";
import BlogArchiveSidebar from "../components/BlogData/BlogArchiveSidebar/BlogArchiveSidebar";
import "./BlogArchive.css";

function BlogArchive() {
  return (
    <main className="blog-archive-page">
      <BlogArchiveHero />
      <section className="blog-archive-content">
        <BlogArchivePosts />
        <BlogArchiveSidebar />
      </section>
    </main>
  );
}

export default BlogArchive;

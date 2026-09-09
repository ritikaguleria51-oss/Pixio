import { useEffect, useState } from "react";
import { useSearchParams } from "react-router-dom";
import ShopHero from "../components/ShopData/ShopHero/ShopHero";
import ShopFilters from "../components/ShopData/ShopFilters/ShopFilters";
import ShopProducts from "../components/ShopData/ShopProducts/ShopProducts";
import "./Shop.css";

const API_URL = process.env.REACT_APP_API_URL || "http://127.0.0.1:8000";

function Shop() {
    const [searchParams] = useSearchParams();
    const selectedCategory = searchParams.get("category") || "";
    const [content, setContent] = useState({ hero_title: "Shop Standard", categories: [], colors: [], sizes: [], tags: [], products: [] });

    useEffect(() => {
        const controller = new AbortController();
        const query = selectedCategory ? `?category=${encodeURIComponent(selectedCategory)}` : "";
        fetch(`${API_URL}/api/shop${query}`, { signal: controller.signal }).then((response) => response.ok ? response.json() : null).then((data) => data && setContent(data)).catch((error) => { if (error.name !== "AbortError") return undefined; return undefined; });
        return () => controller.abort();
    }, [selectedCategory]);

    return (
        <main className="shop-page">
            <ShopHero title={selectedCategory ? `${selectedCategory} Collection` : content.hero_title} image={content.hero_image} />
            <section className="shop-content">
                <ShopFilters categories={content.categories.length ? content.categories : undefined} colors={content.colors.length ? content.colors : undefined} sizes={content.sizes.length ? content.sizes : undefined} tags={content.tags.length ? content.tags : undefined} />
                <ShopProducts products={content.products.length ? content.products : undefined} />
            </section>
        </main>
    );
}

export default Shop;
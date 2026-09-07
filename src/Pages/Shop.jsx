import ShopHero from "../components/ShopData/ShopHero/ShopHero";
import ShopFilters from "../components/ShopData/ShopFilters/ShopFilters";
import ShopProducts from "../components/ShopData/ShopProducts/ShopProducts";
import "./Shop.css";

function Shop() {
    return (
        <main className="shop-page">
            <ShopHero />
            <section className="shop-content">
                <ShopFilters />
                <ShopProducts />
            </section>
        </main>
    );
}

export default Shop;
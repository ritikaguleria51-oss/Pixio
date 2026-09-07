import { useState } from "react";
import { IoMdHeartEmpty } from "react-icons/io";
import { BsCartPlus } from "react-icons/bs";
import "./ShopProducts.css";

const products = [
  ["Cozy Knit Cardigan Sweater", "banner-media1.png"],
  ["Sophisticated Swagger Suit", "banner-media2.png"],
  ["Classic Denim Skinny Jeans", "banner-media3.png"],
  ["Athletic Mesh Sports Leggings", "banner-media1.png"],
  ["Vintage Denim Overalls Shorts", "banner-media2.png"],
  ["Satin Wrap Party Blouse", "banner-media3.png"],
  ["Plaid Wool Winter Coat", "banner-media1.png"],
  ["Water-Resistant Windbreaker Jacket", "banner-media2.png"],
  ["Comfy Lounge Jogger Pants", "banner-media3.png"],
  ["Stylish Fedora Hat Collection", "banner-media1.png"],
  ["Suede Ankle Booties Collection", "banner-media2.png"],
  ["Hiking Outdoor Gear Collection", "banner-media3.png"],
];

function ShopProducts() {
  const [sort, setSort] = useState("Latest");

  return (
    <section className="shop-products" aria-label="Shop products">
      <div className="shop-toolbar">
        <p>Showing <strong>1-12</strong> Of <strong>50</strong> Results</p>
        <div className="shop-toolbar-actions">
          <button type="button">Filter</button>
          <label>
            <span className="visually-hidden">Sort products</span>
            <select value={sort} onChange={(event) => setSort(event.target.value)}>
              <option>Latest</option>
              <option>Popular</option>
              <option>Price: low to high</option>
              <option>Price: high to low</option>
            </select>
          </label>
        </div>
      </div>
      <div className="shop-product-grid">
        {products.map(([name, image]) => (
          <article className="shop-product-card" key={name}>
            <div className="shop-product-image">
              <img src={require(`../../../assets/images/${image}`)} alt={name} />
              <span className="shop-product-sale">GET 20% OFF</span>
              <div className="shop-product-actions">
                <button type="button" aria-label={`Add ${name} to cart`}><BsCartPlus /></button>
                <button type="button" aria-label={`Add ${name} to wishlist`}><IoMdHeartEmpty /></button>
              </div>
              <button type="button" className="shop-quick-view">Quick View</button>
            </div>
            <div className="shop-product-info">
              <h2><a href="/shop">{name}</a></h2>
              <p>$80</p>
            </div>
          </article>
        ))}
      </div>
      <nav className="shop-pagination" aria-label="Shop pagination">
        <a href="/shop" aria-current="page">1</a>
        <a href="/shop">2</a>
        <a href="/shop">3</a>
        <a href="/shop">Next</a>
      </nav>
    </section>
  );
}

export default ShopProducts;

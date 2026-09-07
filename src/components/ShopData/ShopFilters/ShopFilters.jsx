import "./ShopFilters.css";

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

const colors = ["Black", "White", "Red", "Blue", "Green"];
const sizes = ["XS", "S", "M", "L", "XL"];
const tags = ["Vintage", "Wedding", "Cotton", "Linen", "Navy", "Urban", "Formal"];

function ShopFilters() {
  return (
    <aside className="shop-filters">
      <div className="shop-filter-heading">
        <h2>Filter</h2>
        <button type="button" aria-label="Close filters">×</button>
      </div>

      <section className="shop-filter-group">
        <h3>Price</h3>
        <div className="price-range" aria-label="Price range">
          <span>$40</span><span>$346</span>
        </div>
        <input type="range" min="40" max="346" defaultValue="346" aria-label="Maximum price" />
        <div className="price-labels"><span>Min Price: $40</span><span>Max Price: $346</span></div>
      </section>

      <section className="shop-filter-group">
        <h3>Color</h3>
        <div className="filter-options filter-swatches">
          {colors.map((color) => <button type="button" className={`swatch swatch-${color.toLowerCase()}`} aria-label={color} key={color} />)}
        </div>
      </section>

      <section className="shop-filter-group">
        <h3>Size</h3>
        <div className="filter-options filter-sizes">
          {sizes.map((size) => <button type="button" key={size}>{size}</button>)}
        </div>
      </section>

      <section className="shop-filter-group">
        <h3>Category</h3>
        <ul className="shop-category-list">
          {categories.map(([name, count]) => <li key={name}><a href="/shop">{name}</a><span>({count})</span></li>)}
        </ul>
      </section>

      <section className="shop-filter-group">
        <h3>Tags</h3>
        <div className="shop-tags">
          {tags.map((tag) => <a href="/shop" key={tag}>{tag}</a>)}
        </div>
      </section>

      <button type="button" className="shop-reset">Reset</button>
    </aside>
  );
}

export default ShopFilters;

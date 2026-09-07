import { useLocation } from "react-router-dom";
import { BsArrowRight, BsCartPlus, BsHeart } from "react-icons/bs";
import { IoIosSearch } from "react-icons/io";
import ReferenceImageOne from "../assets/images/banner-media1.png";
import ReferenceImageTwo from "../assets/images/banner-media2.png";
import ReferenceImageThree from "../assets/images/banner-media3.png";
import "./ReferencePage.css";

const featureImages = [ReferenceImageOne, ReferenceImageTwo, ReferenceImageThree];

const pageCatalog = {
  "/portfolio": {
    kicker: "Creative lookbook", title: "Ideas, images, and the work behind the wardrobe.",
    description: "A curated gallery of campaigns, collections, and visual stories made for people who dress with intention.",
    cards: ["The colour study", "Quiet tailoring", "Summer in motion"], mode: "gallery",
  },
  "/pages": {
    kicker: "The Pixio index", title: "Everything you need, gathered in one place.",
    description: "Move from discovery to delivery with quick access to our services, stories, support, and store essentials.",
    cards: ["Visit the shop", "Meet the studio", "Need some help?"], mode: "index",
  },
  "/wishlist": {
    kicker: "Your saved edit", title: "The pieces you are not ready to forget.",
    description: "Keep your favourite silhouettes close while you decide what belongs in your next wardrobe rotation.",
    cards: ["Soft knit cardigan", "Relaxed linen set", "Everyday leather tote"], mode: "wishlist",
  },
  "/cart": {
    kicker: "Shopping bag", title: "A considered collection, almost yours.",
    description: "Review your edit, make it yours, and let Pixio take care of the details from checkout to doorstep.",
    cards: ["Your selected pieces", "Delivery preferences", "Secure checkout"], mode: "cart",
  },
  "/checkout": {
    kicker: "Almost there", title: "Complete your order with confidence.",
    description: "A simple, secure checkout designed to keep the focus on the things you are excited to wear.",
    cards: ["Shipping details", "Payment method", "Order review"], mode: "checkout",
  },
  "/order-tracking": {
    kicker: "Your order", title: "Good things are on their way.",
    description: "Follow your parcel from our studio to your door and see every step of its journey.",
    cards: ["Order received", "Packed with care", "Out for delivery"], mode: "tracking",
  },
  "/pages/pricing-table": {
    kicker: "Membership", title: "More Pixio, in a way that fits you.",
    description: "Choose the level of access that matches your shopping rhythm, from considered essentials to full studio privileges.",
    cards: ["Essential", "Curated", "Atelier"], mode: "pricing",
  },
  "/pages/gift-vouchers": {
    kicker: "Give good taste", title: "A little freedom, beautifully wrapped.",
    description: "Gift a Pixio voucher and let someone special choose the pieces that feel most like them.",
    cards: ["For the minimalist", "For the colour lover", "For the new beginning"], mode: "gift",
  },
  "/pages/what-we-do": {
    kicker: "Our craft", title: "We make getting dressed feel like a creative act.",
    description: "From first sketch to final delivery, our work brings together thoughtful design, honest materials, and a human shopping experience.",
    cards: ["Design with intent", "Source with care", "Serve with warmth"], mode: "services",
  },
  "/pages/our-team": {
    kicker: "The people of Pixio", title: "A small team with a very large wardrobe of ideas.",
    description: "Meet the designers, buyers, makers, and storytellers who make every Pixio collection feel personal.",
    cards: ["Design studio", "Buying desk", "Customer experience"], mode: "team",
  },
  "/pages/contact-1": {
    kicker: "Come say hello", title: "The quickest way to find the right answer.",
    description: "Our style team is here for sizing, styling, orders, and all the little decisions that make shopping easier.",
    cards: ["Chat with a stylist", "Visit our stores", "Send an email"], mode: "contact",
  },
  "/pages/contact-2": {
    kicker: "Studio appointments", title: "Try the collection at your own pace.",
    description: "Book a private styling appointment and discover a wardrobe edit built around your life, your fit, and your point of view.",
    cards: ["Choose a time", "Tell us your style", "Meet your stylist"], mode: "appointment",
  },
  "/pages/contact-3": {
    kicker: "Find Pixio", title: "Your next favourite place to shop.",
    description: "Explore our stores, meet the team, and experience the collection beyond the screen.",
    cards: ["New York", "London", "Los Angeles"], mode: "stores",
  },
};

function formatTitle(pathname) {
  const lastSegment = pathname.split("/").filter(Boolean).pop() || "home";
  return lastSegment
    .replace(/-/g, " ")
    .replace(/\b\w/g, (letter) => letter.toUpperCase());
}

function getPageCopy(pathname) {
  if (pageCatalog[pathname]) return pageCatalog[pathname];
  if (pathname.startsWith("/product/")) {
    return { kicker: "The detail edit", title: "Product Details", description: "A closer look at the pieces, fit, and details behind the collection.", cards: ["Fabric and feel", "Fit notes", "Wear it your way"], mode: "product" };
  }
  if (pathname.startsWith("/blog/")) {
    return { kicker: "From the journal", title: formatTitle(pathname), description: "Fresh ideas, styling notes, and inspiration from the Pixio journal.", cards: ["The style note", "Inside the edit", "A closer look"], mode: "journal" };
  }
  if (pathname.startsWith("/post-layout")) {
    return { kicker: "The journal toolkit", title: formatTitle(pathname), description: "Choose a thoughtful editorial direction for every story, collection, and point of view.", cards: ["Start with a thought", "Build the mood", "Share the story"], mode: "journal" };
  }
  if (pathname.includes("faq")) {
    return { kicker: "A little clarity", title: formatTitle(pathname), description: "Straight answers to the questions that come up most, from delivery and returns to fit and care.", cards: ["Before you order", "While it is on the way", "After it arrives"], mode: "faq" };
  }
  if (pathname.includes("dashboard") || pathname.includes("orders") || pathname.includes("downloads") || pathname.includes("return-request")) {
    return { kicker: "Your Pixio account", title: formatTitle(pathname), description: "A calm, clear view of your orders, saved details, downloads, and next steps.", cards: ["Your latest order", "Account details", "Need assistance?"], mode: "account" };
  }
  if (pathname.includes("banner")) {
    return { kicker: "Make an entrance", title: formatTitle(pathname), description: "Set the first impression with a banner treatment that gives your collection room to breathe.", cards: ["Colour-led", "Image-led", "Story-led"], mode: "banner" };
  }
  if (pathname.includes("header")) {
    return { kicker: "Set the tone", title: formatTitle(pathname), description: "A navigation style shaped around how your audience explores, discovers, and returns.", cards: ["Clear navigation", "Editorial rhythm", "Easy discovery"], mode: "layout" };
  }
  if (pathname.includes("footer")) {
    return { kicker: "The final note", title: formatTitle(pathname), description: "Close every page with useful links, a warm invitation, and a reason to come back.", cards: ["Stay connected", "Find support", "Keep exploring"], mode: "layout" };
  }
  if (pathname.includes("error-404")) {
    return { kicker: "A small detour", title: "That page took a different route.", description: "The link may have moved, but there is plenty more to discover across the Pixio collection.", cards: ["Back to home", "Shop the edit", "Contact the team"], mode: "error" };
  }
  if (pathname.includes("coming-soon") || pathname.includes("under-construction")) {
    return { kicker: "Worth the wait", title: "Something considered is taking shape.", description: "We are putting the final details in place. Check back soon for a new Pixio experience.", cards: ["Keep me posted", "Explore the shop", "Read the journal"], mode: "coming" };
  }
  return { kicker: "Pixio collection", title: formatTitle(pathname), description: "Discover a carefully selected Pixio experience made for modern shoppers.", cards: ["A considered start", "Made for today", "Worth keeping"], mode: "default" };
}

function ReferencePage() {
  const { pathname } = useLocation();
  const page = getPageCopy(pathname);
  const { title, description, cards, kicker, mode } = page;

  return (
    <main className={`reference-page reference-${mode}`}>
      <section className="reference-hero">
        <div>
          <p>{kicker}</p>
          <h1>{title}</h1>
          <nav aria-label="Breadcrumb"><a href="/">Home</a><span>›</span><span>{title}</span></nav>
        </div>
      </section>
      <section className="reference-content">
        <div className="reference-intro">
          <p className="reference-eyebrow">{kicker}</p>
          <h2>{description}</h2>
          <div className="reference-tools">
            <label><IoIosSearch /><input type="search" placeholder="Search this page" /></label>
            <button type="button">Latest <BsArrowRight /></button>
          </div>
        </div>
        <div className="reference-card-grid">
          {cards.map((card, index) => (
            <article className="reference-card" key={card}>
              <div className="reference-card-image">
                <img src={featureImages[index]} alt={card} />
                <button type="button" aria-label={`Add ${card} to wishlist`}><BsHeart /></button>
              </div>
              <div className="reference-card-copy">
                <p>{mode === "wishlist" ? "Saved for later" : mode === "journal" ? "From the journal" : mode === "pricing" ? "Choose your level" : "Pixio edit"}</p>
                <h3>{card}</h3>
                <strong>{mode === "pricing" ? "Explore plan" : mode === "contact" || mode === "appointment" ? "Start here" : mode === "tracking" ? "View status" : "$80"}</strong>
                <button type="button">{mode === "wishlist" ? "Move to bag" : mode === "journal" ? "Read story" : "Discover more"} <BsCartPlus /></button>
              </div>
            </article>
          ))}
        </div>
      </section>
    </main>
  );
}

export default ReferencePage;

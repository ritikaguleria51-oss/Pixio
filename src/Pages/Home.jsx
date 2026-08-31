import Hero from "../components/HomeData/Herosec/Hero";
import Header from "../Header";
import { PromoGridSection } from "../components/HomeData/PromoGrid/PromoGridSection";
import { TopCollectionBanner } from "../components/HomeData/TopCollection/TopCollectionBanner";
import FeaturedOffers from "../components/HomeData/Features/FeaturedOffers";
function Home(){
    return(
        <>

            <section className="home">
                <Hero/>
                <PromoGridSection />
                <TopCollectionBanner/>
                <FeaturedOffers />
            </section>
        </>
    );
}
export default Home;
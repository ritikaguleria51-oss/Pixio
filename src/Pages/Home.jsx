import Hero from "../components/HomeData/Herosec/Hero";
import Header from "../Header";
import { PromoGridSection } from "../components/HomeData/PromoGrid/PromoGridSection";
import { TopCollectionBanner } from "../components/HomeData/TopCollection/TopCollectionBanner";
import FeaturedOffers from "../components/HomeData/Features/FeaturedOffers";
import Banner1 from "../components/HomeData/Banner1/Banner1";
import Feature1 from "../components/HomeData/Feature1/Feature1";
import NearbySection from "../components/HomeData/NearbySection/NearbySection";
function Home(){
    return(
        <>

            <section className="home">
                <Banner1 />
                <Feature1 />
                <Hero/>
                <PromoGridSection />
                <TopCollectionBanner/>
                <FeaturedOffers />
                <NearbySection />
            </section>
        </>
    );
}
export default Home;
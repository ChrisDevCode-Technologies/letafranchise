import { Gallery } from "@/components/gallery";
import { PageHero } from "@/components/page-hero";
import { SiteFooter } from "@/components/site-footer";
import { SiteHeader } from "@/components/site-header";

export default function GalleryPage() {
  return <><SiteHeader /><main><PageHero title="A little evidence of a good time." description="A record of live rooms, bright moments, and the people who made them happen." image="/images/artist_1.jpg" /><section className="mx-auto max-w-7xl px-6 py-20 sm:px-10 sm:py-28 lg:px-12"><p className="max-w-2xl text-lg leading-8 text-[#11110f]/72">Great events do not stand still, but the feeling has a way of lasting. Here is a glimpse.</p><Gallery /></section></main><SiteFooter /></>;
}
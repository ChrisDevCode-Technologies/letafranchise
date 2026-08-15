import { PageHero } from "@/components/page-hero";
import { EventList } from "@/components/event-list";
import { SiteFooter } from "@/components/site-footer";
import { SiteHeader } from "@/components/site-header";

export default function EventsPage() {
  return <><SiteHeader /><main><PageHero title="The calendar is calling." description="Find your next night out, a new favourite performer, or the occasion that turns into a tradition." image="/images/OCEAN-FEST.jpg" /><section className="mx-auto max-w-7xl px-6 py-20 sm:px-10 sm:py-28 lg:px-12"><p className="text-sm font-bold text-[#dc4f20]">UP NEXT</p><h2 className="mt-4 text-4xl sm:text-5xl">Make a date with the unexpected.</h2><EventList /></section></main><SiteFooter /></>;
}
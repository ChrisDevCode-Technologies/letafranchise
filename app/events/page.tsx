import { PageHero } from "@/components/PageHero";
import { EventList } from "@/components/EventList";
import { SiteFooter } from "@/components/SiteFooter";
import { SiteHeader } from "@/components/SiteHeader";

export default function EventsPage() {
  return <><SiteHeader /><main className="bg-[#f8f8f5] text-[#11110f]"><PageHero title="The calendar is calling." description="Find your next night out, a new favourite performer, or the occasion that turns into a tradition." image="/images/OCEAN-FEST.jpg" /><section className="mx-auto max-w-7xl px-6 py-20 sm:px-10 sm:py-28 lg:px-12"><p className="text-sm font-bold text-[#dc4f20]">UP NEXT</p><h2 className="mt-4 text-4xl sm:text-5xl">Make a date with the unexpected.</h2><EventList /></section></main><SiteFooter /></>;
}
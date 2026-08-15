import Image from "next/image";
import Link from "next/link";
import { ArrowRight, Check } from "lucide-react";
import { PageHero } from "@/components/page-hero";
import { SiteFooter } from "@/components/site-footer";
import { SiteHeader } from "@/components/site-header";

const services = [
  ["Music events", "Concert programming, artist curation, production, and an atmosphere that carries all night.", "/images/musical.jpg"],
  ["Theatre & drama", "Original performance experiences that make story, stagecraft, and audience feel inseparable.", "/images/PANTOMIME.jpg"],
  ["Special occasions", "A tailored creative direction for celebrations that deserve something more personal.", "/images/circus.jpg"],
  ["Corporate experiences", "Elegant, purposeful events that make colleagues, partners, and guests feel part of the occasion.", "/images/lighting event.jpg"],
];

export default function ServicesPage() {
  return <><SiteHeader /><main><PageHero title="Entertainment, arranged around your occasion." description="We combine creative direction and considered production to make an event feel unmistakably yours." image="/images/lighting event.jpg" /><section className="mx-auto max-w-7xl px-6 py-20 sm:px-10 sm:py-28 lg:px-12"><div className="grid gap-10 md:grid-cols-2">{services.map(([title, text, image]) => <article key={title} className="group border-t border-[#11110f]/20 pt-5"><div className="relative aspect-[16/9] overflow-hidden bg-[#11110f]"><Image src={image} alt="" fill className="object-cover transition duration-700 group-hover:scale-105" sizes="(min-width: 768px) 50vw, 100vw" /></div><h2 className="mt-6 text-4xl">{title}</h2><p className="mt-3 max-w-xl leading-7 text-[#11110f]/72">{text}</p></article>)}</div></section><section className="bg-[#edf1e9] py-20"><div className="mx-auto grid max-w-7xl gap-10 px-6 sm:px-10 lg:grid-cols-[1fr_.8fr] lg:px-12"><div><h2 className="text-4xl sm:text-5xl">A clear creative partner, from first thought to final applause.</h2></div><ul className="space-y-4">{["Creative concept and programming", "Artist and talent coordination", "Production management", "Audience experience design"].map(item => <li key={item} className="flex items-center gap-3 border-b border-[#11110f]/15 pb-4 font-bold"><Check className="size-5 text-[#dc4f20]" aria-hidden="true" />{item}</li>)}</ul></div></section><section className="bg-[#245043] py-18 text-white"><div className="mx-auto flex max-w-7xl flex-col justify-between gap-6 px-6 sm:px-10 md:flex-row md:items-center lg:px-12"><h2 className="max-w-2xl text-4xl">Have an idea worth staging?</h2><Link href="/contact" className="inline-flex items-center gap-2 self-start bg-[#f4b71a] px-5 py-3.5 text-sm font-bold text-[#11110f] hover:bg-white md:self-auto">Tell us about it <ArrowRight className="size-4" /></Link></div></section></main><SiteFooter /></>;
}
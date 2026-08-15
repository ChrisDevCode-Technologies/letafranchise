import Image from "next/image";
import Link from "next/link";
import { CalendarDays, MapPin } from "lucide-react";

export const events = [
  { title: "Ocean Festival", date: "15-17 June", location: "Beachfront Arena", image: "/images/OCEAN-FEST.jpg", category: "Festival", description: "Three days of music, art, food, and open-air connection by the water." },
  { title: "Ladies Tour", date: "5-7 August", location: "City Arts Centre", image: "/images/LADIES-TOUR.jpg", category: "Live series", description: "An energising programme of performances, workshops, and conversations." },
  { title: "After Hours", date: "25 July", location: "Club Pulse", image: "/images/dj.jpg", category: "Music", description: "A late-night set built for a full dance floor and zero filler." },
];

export function EventList({ featured = false }: { featured?: boolean }) {
  const visibleEvents = featured ? events.slice(0, 2) : events;

  return (
    <div className={`mt-12 grid gap-5 ${featured ? "lg:grid-cols-2" : "md:grid-cols-2 xl:grid-cols-3"}`}>
      {visibleEvents.map((event) => (
        <article key={event.title} className="group overflow-hidden bg-white text-[#11110f]">
          <div className="relative aspect-[16/10] overflow-hidden bg-[#11110f]">
            <Image src={event.image} alt="" fill className="object-cover transition duration-700 group-hover:scale-105" sizes={featured ? "(min-width: 1024px) 50vw, 100vw" : "(min-width: 1280px) 33vw, (min-width: 768px) 50vw, 100vw"} />
            <p className="absolute left-4 top-4 bg-[#f4b71a] px-2.5 py-1 text-xs font-bold">{event.category}</p>
          </div>
          <div className="p-6">
            <h3 className="text-3xl">{event.title}</h3>
            <div className="mt-4 space-y-2 text-sm text-[#11110f]/70">
              <p className="flex items-center gap-2"><CalendarDays className="size-4 text-[#dc4f20]" aria-hidden="true" /> {event.date}</p>
              <p className="flex items-center gap-2"><MapPin className="size-4 text-[#dc4f20]" aria-hidden="true" /> {event.location}</p>
            </div>
            <p className="mt-4 leading-7 text-[#11110f]/75">{event.description}</p>
            <Link href="/contact" className="mt-6 inline-flex items-center gap-2 text-sm font-bold underline decoration-[#f4b71a] decoration-2 underline-offset-5 hover:text-[#dc4f20]">Reserve your place</Link>
          </div>
        </article>
      ))}
    </div>
  );
}
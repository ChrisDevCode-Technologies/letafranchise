import Image from "next/image";

const images = [
  ["/images/artist_1.jpg", "Performer in the spotlight"],
  ["/images/artist_2.jpg", "Live performance"],
  ["/images/artist_3.jpg", "Artist on stage"],
  ["/images/artist_4.jpg", "Event crowd"],
  ["/images/lighting event.jpg", "Lighting installation"],
  ["/images/children.jpg", "Family event"],
];

export function Gallery() {
  return (
    <div className="mt-12 grid grid-cols-2 gap-3 md:grid-cols-4">
      {images.map(([src, alt], index) => (
        <figure key={src} className={`group relative overflow-hidden bg-[#11110f] ${index === 0 || index === 3 ? "md:col-span-2 md:aspect-[2/1]" : "aspect-square"}`}>
          <Image src={src} alt={alt} fill className="object-cover transition duration-700 group-hover:scale-105 group-hover:opacity-80" sizes="(min-width: 768px) 25vw, 50vw" />
        </figure>
      ))}
    </div>
  );
}
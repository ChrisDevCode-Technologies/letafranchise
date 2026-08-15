import Image from "next/image";

export function PageHero({ title, description, image }: { title: string; description: string; image: string }) {
  return (
    <section className="relative isolate min-h-[420px] overflow-hidden bg-[#11110f] text-white">
      <Image src={image} alt="" fill priority className="object-cover opacity-55" sizes="100vw" />
      <div className="absolute inset-0 bg-[#11110f]/55" />
      <div className="relative mx-auto flex min-h-[420px] max-w-7xl items-end px-6 pb-14 pt-32 sm:px-10 lg:px-12">
        <div className="max-w-3xl"><h1 className="text-5xl sm:text-7xl">{title}</h1><p className="mt-5 max-w-2xl text-lg leading-8 text-white/82 sm:text-xl">{description}</p></div>
      </div>
    </section>
  );
}
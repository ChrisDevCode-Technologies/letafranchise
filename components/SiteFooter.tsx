import Image from "next/image";
import Link from "next/link";
import { ArrowUpRight } from "lucide-react";

export function SiteFooter() {
  return (
    <footer className="relative overflow-hidden border-t border-white/8 bg-[#171814] text-white">
      <div className="pointer-events-none absolute -bottom-56 left-1/2 h-105 w-[1200px] -translate-x-1/2 rounded-[50%] border border-white/10" />
      <div className="pointer-events-none absolute -bottom-46 left-1/2 h-105 w-[1100px] -translate-x-1/2 rounded-[50%] border border-white/8" />
      <div className="relative mx-auto flex max-w-5xl items-center gap-5 px-6 py-12 sm:px-8 lg:pt-16">
        <Image src="/images/leta.png" alt="" width={42} height={42} className="size-10 object-contain" />
        <span className="font-display text-xl font-bold">LetaFranchise</span>
        <span className="hidden h-8 border-l border-white/15 sm:block" />
        <p className="text-sm text-white/55">© 2026 LetaFranchise. Built for a full room.</p>
        <Link href="/contact" className="ml-auto inline-flex items-center gap-1 text-sm text-[#e9b534] hover:text-white">Start a brief <ArrowUpRight className="size-4" /></Link>
      </div>
    </footer>
  );
}
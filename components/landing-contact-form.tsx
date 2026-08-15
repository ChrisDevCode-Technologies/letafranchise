"use client";

import { ArrowRight } from "lucide-react";
import { FormEvent, useState } from "react";

export function LandingContactForm() {
  const [isSent, setIsSent] = useState(false);

  function handleSubmit(event: FormEvent<HTMLFormElement>) {
    event.preventDefault();
    const values = new FormData(event.currentTarget);
    const lines = ["Name", "Email", "Company", "Phone", "Project"].map((field) => `${field}: ${values.get(field.toLowerCase()) || "Not provided"}`);
    window.location.href = `mailto:hello@letafranchise.com?subject=${encodeURIComponent("New LetaFranchise event brief")}&body=${encodeURIComponent(lines.join("\n\n"))}`;
    setIsSent(true);
  }

  return (
    <form onSubmit={handleSubmit} className="space-y-4">
      {[{ label: "Name", type: "text" }, { label: "Email", type: "email" }, { label: "Company", type: "text" }, { label: "Phone", type: "tel" }].map(({ label, type }) => <label key={label} className="group relative block"><input required type={type} name={label.toLowerCase()} placeholder={label} className="peer block w-full rounded-lg border border-transparent bg-[#23241f] px-4 pb-2 pt-6 text-sm text-[#f3f2eb] placeholder:text-transparent outline-none transition focus:border-[#e9b534]/50 focus:ring-0" /><span className="pointer-events-none absolute left-4 top-4 text-sm text-[#aaa99f] transition-all peer-focus:-translate-y-2 peer-focus:text-xs peer-focus:text-[#e9b534] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:text-xs">{label}</span></label>)}
      <label className="group relative block"><textarea required name="project" placeholder="Tell us about your project" rows={5} data-hs-textarea-auto-height className="peer block w-full resize-none rounded-lg border border-transparent bg-[#23241f] px-4 pb-2 pt-6 text-sm text-[#f3f2eb] placeholder:text-transparent outline-none transition focus:border-[#e9b534]/50 focus:ring-0" /><span className="pointer-events-none absolute left-4 top-4 text-sm text-[#aaa99f] transition-all peer-focus:-translate-y-2 peer-focus:text-xs peer-focus:text-[#e9b534] peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:text-xs">Tell us about your project</span></label>
      <p className="text-xs text-[#aaa99f]">All fields are required.</p>
      <button type="submit" className="inline-flex items-center gap-2 rounded-full border border-[#f0bf45] bg-[#e9b534] px-4 py-2.5 text-sm font-semibold text-[#17150d] transition hover:bg-[#f3ce6c]">Send your brief <ArrowRight className="size-4" /></button>
      {isSent && <p role="status" className="text-sm text-[#e9b534]">Your email app should now have a ready-to-send brief.</p>}
    </form>
  );
}
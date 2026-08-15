import type { Metadata } from "next";
import "./globals.css";
import { PrelineScriptWrapper } from "@/components/preline-script-wrapper";

export const metadata: Metadata = {
  title: "LetaFranchise | Entertainment & Events",
  description:
    "LetaFranchise creates live entertainment experiences worth remembering.",
};

export default function RootLayout({ children }: LayoutProps<"/">) {
  return (
    <html lang="en">
      <body>
        {children}
        <PrelineScriptWrapper />
      </body>
    </html>
  );
}

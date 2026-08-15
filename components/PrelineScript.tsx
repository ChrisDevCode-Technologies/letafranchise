"use client";

import { usePathname } from "next/navigation";
import { useEffect } from "react";

export default function PrelineScript() {
  const pathname = usePathname();

  useEffect(() => {
    import("preline").then(() => window.HSStaticMethods?.autoInit());
  }, [pathname]);

  return null;
}
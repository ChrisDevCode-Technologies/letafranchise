import type { NextConfig } from "next";

const nextConfig: NextConfig = {
  async redirects() {
    return [
      { source: "/contact.php", destination: "/contact", permanent: true },
      { source: "/events.php", destination: "/events", permanent: true },
      { source: "/gallery.php", destination: "/gallery", permanent: true },
      { source: "/services.php", destination: "/services", permanent: true },
    ];
  },
};

export default nextConfig;

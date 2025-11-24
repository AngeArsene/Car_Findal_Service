@props(['cars' => null])

<!-- Main Footer -->
<footer class="w-full" style="background: #121212; color: #f1f1f1; border-top: 1px solid #2a2a2a;">
    @if ($cars)
        <x-pagination :$cars />
    @endif
    <div class="container" style="width: 90%; max-width: 1200px; margin: auto; padding: 40px 15px;">

        {{-- Top Footer Section --}}
        <div class="footer-grid"
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 30px;">

            {{-- Branding --}}
            <div>
                <h2 style="font-size: 20px; font-weight: 500; margin-bottom: 10px;">
                    {{ config('app.name') }}
                </h2>
                <p style="font-size: 14px; line-height: 1.6; opacity: 0.85;">
                    A modern web experience built with Laravel, Inertia, and your custom UI components.
                </p>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 style="font-size: 16px; font-weight: 500; margin-bottom: 10px;">Quick Links</h3>
                <ul
                    style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; font-size: 14px;">
                    <li><a href="/" style="color: #ddd; text-decoration: none;">Home</a></li>
                    <li><a href="/about" style="color: #ddd; text-decoration: none;">About</a></li>
                    <li><a href="/services" style="color: #ddd; text-decoration: none;">Services</a></li>
                    <li><a href="/contact" style="color: #ddd; text-decoration: none;">Contact</a></li>
                </ul>
            </div>

            {{-- Resources --}}
            <div>
                <h3 style="font-size: 16px; font-weight: 500; margin-bottom: 10px;">Resources</h3>
                <ul
                    style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px; font-size: 14px;">
                    <li><a href="#" style="color: #ddd; text-decoration: none;">Documentation</a></li>
                    <li><a href="#" style="color: #ddd; text-decoration: none;">API Reference</a></li>
                    <li><a href="#" style="color: #ddd; text-decoration: none;">Developer Blog</a></li>
                    <li><a href="#" style="color: #ddd; text-decoration: none;">FAQ</a></li>
                </ul>
            </div>

            {{-- Social Links --}}
            <div>
                <h3 style="font-size: 16px; font-weight: 500; margin-bottom: 10px;">Follow Us</h3>
                <div style="display: flex; gap: 12px;">
                    <a href="#" style="color: #fff; font-size: 20px;"><i class="bi bi-facebook"></i></a>
                    <a href="#" style="color: #fff; font-size: 20px;"><i class="bi bi-instagram"></i></a>
                    <a href="#" style="color: #fff; font-size: 20px;"><i class="bi bi-linkedin"></i></a>
                    <a href="#" style="color: #fff; font-size: 20px;"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>

        </div>

        {{-- Separator Line --}}
        <div style="width: 100%; height: 1px; background: #2e2e2e; margin: 30px 0;"></div>

        {{-- Footer Bottom --}}
        <div class="footer-bottom"
            style="display: flex; justify-content: space-between; align-items: center; font-size: 14px; flex-wrap: wrap; gap: 10px;">
            <div>
                © {{ date('Y') }} <strong>{{ config('app.name') }}</strong>. All Rights Reserved.
            </div>

            <div style="display: flex; gap: 15px;">
                <a href="/privacy-policy" style="color: #ddd; text-decoration: none;">Privacy Policy</a>
                <a href="/terms-of-service" style="color: #ddd; text-decoration: none;">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>
<!-- / Main Footer -->

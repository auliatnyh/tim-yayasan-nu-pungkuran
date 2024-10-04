<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section id="kontak-kami" style="padding: 1rem 0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 1rem; margin-bottom: 3rem;"> <!-- Penambahan margin-bottom di sini -->
            <h1 class="py-5 mb-10 text-center text-3xl font-bold text-green-900 dark:text-gray-400 ">Kontak Kami</h1>
            <div style="display: flex; flex-wrap: wrap; gap: 2rem;">
                <!-- Left side: Contact details -->
                <div class="contact-details" style="flex: 1;">
                    <ul style="list-style-type: none; padding: 0;">
                        <li style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-map-marker-alt"
                                style="color: #047857; font-size: 1.5rem; margin-right: 0.75rem;"></i>
                            <p style="font-size: 1rem; color: #333;">Jl. K.H. Wahid Hasyim No.390, Kauman, Kec.
                                Semarang
                                Tengah, Kota Semarang, Jawa Tengah</p>
                        </li>

                        <li style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-phone-alt"
                                style="color: #047857; font-size: 1.5rem; margin-right: 0.75rem; transform: scaleX(-1);"></i>
                            <p style="font-size: 1rem; color: #333;">(024) 3580031</p>
                        </li>

                        <li style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-envelope"
                                style="color: #047857; font-size: 1.5rem; margin-right: 0.75rem;"></i>
                            <p style="font-size: 1rem; color: #333;">yayasan.nu.pungkuran@ac.id</p>
                        </li>
                    </ul>

                    <a href="#"
                        style="display: inline-block; background-color: #047857; color: #fff; padding: 0.5rem 1rem; border-radius: 9999px; margin-top: 1.5rem; text-decoration: none; transition: background-color 0.3s ease; font-size: 0.875rem;">
                        <i class="fab fa-whatsapp"
                            style="font-size: 1rem; margin-right: 0.25rem; transition: transform 0.3s ease;"></i>
                        Hubungi Kami
                    </a>

                    <!-- Social Media -->
                    <div class="social-icons" style="margin-top: 2rem;">
                        <h3 style="font-size: 1.2rem; color: #333; font-bold; margin-bottom: 0.75rem;">Ikuti Kami</h3>
                        <a href="#"
                            style="font-size: 1.5rem; color: #047857; margin-right: 0.75rem; transition: color 0.3s ease;"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#"
                            style="font-size: 1.5rem; color: #047857; margin-right: 0.75rem; transition: color 0.3s ease;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" style="font-size: 1.5rem; color: #047857; transition: color 0.3s ease;"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Right side: Map -->
                <div class="map-container" style="flex: 1;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.2919233491302!2d110.421169!3d-6.9748439!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4aad2ee09e3%3A0xbf6a3fced229a2dc!2sSD%20Islam%20Nahdlatul%20Ulama%20Pungkuran!5e0!3m2!1sid!2sid!4v1725853118255!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</x-layout>

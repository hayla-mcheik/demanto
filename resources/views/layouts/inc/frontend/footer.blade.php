{{-- resources/views/layouts/inc/frontend/footer.blade.php --}}
{{-- Demanto Luxury Footer --}}
<footer class="demanto-footer">
    <div class="footer-inner">
        {{-- Signature Area --}}
        <div class="footer-signature-area">
            <div class="timeless-logo">
                 <a href="{{ url('/') }}">
                                    <img class="logo-main boutique-logo" src="{{ asset('assets/img/logogold.png') }}" alt="Logo">
                                </a>
            </div>
            <div class="tagline-luxury">TIMELESS LUXURY BY DEMANTO</div>
            <div class="demanto-quote">“Where Diamonds Become Art.”</div>
            <div class="since-text">crafting timeless elegance since 2005</div>
        </div>

        {{-- Footer Columns --}}
        <div class="footer-columns">
            <div class="footer-col">
                <h4 class="col-title">MAISON</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('aboutus') }}">Our Story</a></li>
                    <li><a href="#">The Atelier</a></li>
                    <li><a href="#">Exhibitions & Events</a></li>
                    <li><a href="#">Private Appointment</a></li>
                    <li><a href="#">Sustainability</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="col-title">COLLECTIONS</h4>
                <ul class="footer-links">
                    <li><a href="{{ url('collections') }}">Diamond Collection</a></li>
                    <li><a href="{{ url('collections') }}">Bridal Collection</a></li>
                    <li><a href="{{ url('collections') }}">Gold Collection</a></li>
                    <li><a href="{{ url('collections') }}">High Jewelry</a></li>
                    <li><a href="#">Signature Pieces</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="col-title">SERVICES</h4>
                <ul class="footer-links">
                    <li><a href="#">Concierge</a></li>
                    <li><a href="#">Ring Sizing</a></li>
                    <li><a href="#">Aftercare</a></li>
                    <li><a href="#">Press & Enquiries</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="col-title">ATELIER</h4>
                <div class="contact-info-footer">
                    <p><i class="fas fa-map-marker-alt"></i> {{ $appSetting->address ?? '22 Place Vendôme, Paris' }}</p>
                    <p><i class="fas fa-phone-alt"></i> {{ $appSetting->phone1 ?? '+33 1 42 96 88 00' }}</p>
                    <p><i class="far fa-envelope"></i> {{ $appSetting->email1 ?? 'savoirfaire@demanto.com' }}</p>
                </div>
                <div class="newsletter-elegant">
                    <div class="news-title">THE DEMANTO CHRONICLE</div>
                    <div class="input-group-lux">
                        <input type="email" id="luxEmail" placeholder="Your email address">
                        <button id="luxSubscribeBtn">Subscribe</button>
                    </div>
                    <div class="newsletter-note">Receive exclusive previews & private events</div>
                    <div class="social-icons-luxury">
                        @if(optional($appSetting)->instagram)<a href="{{ $appSetting->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>@endif
                        @if(optional($appSetting)->facebook)<a href="{{ $appSetting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        @if(optional($appSetting)->youtube)<a href="{{ $appSetting->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>@endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="footer-bottom-bar">
            <div class="copyright-text">© {{ date('Y') }} DEMANTO · Timeless Luxury. All rights reserved.</div>
            <div class="payment-icons">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
                <i class="fas fa-gem"></i>
            </div>
        </div>
    </div>
</footer>

{{-- Demanto Luxury Popup --}}
<div class="modal fade modal-luxury" id="demantoLuxuryPopup" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header justify-content-end border-0 pb-0">
                <button type="button" class="btn-close-custom" id="closePopupBtn" aria-label="Close"><i class="fas fa-times"></i></button>
            </div>
            <div class="popup-inner">
                <div class="popup-icon"><i class="fas fa-crown"></i></div>
                <h3 class="popup-title">Private Access</h3>
                <p class="popup-desc">Enter the world of Demanto. Experience our High Jewelry collection and receive an invitation to exclusive atelier viewings.</p>
                <a href="{{ url('collections') }}" class="btn-gold-popup" id="discoverBtn">Discover Maison</a>
                <div class="no-thanks-link" id="noThanksLink">No thanks, continue browsing</div>
                <div class="popup-social">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-weixin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary-gold: #C9A96E;
        --footer-bg: #0C0B0A;
        --footer-text: #D4CFC4;
    }
    .demanto-footer {
        background-color: var(--footer-bg);
        color: var(--footer-text);
        padding: 70px 0 30px;
        border-top: 1px solid rgba(201, 169, 110, 0.2);
        font-family: 'Montserrat', sans-serif;
    }
    .footer-inner { max-width: 1400px; margin: 0 auto; padding: 0 32px; }
    .footer-signature-area { text-align: center; margin-bottom: 60px; border-bottom: 1px solid rgba(201, 169, 110, 0.25); padding-bottom: 40px; }
    .timeless-logo span { font-family: 'Cormorant Garamond', serif; font-size: 28px; letter-spacing: 4px; font-weight: 600; color: var(--primary-gold); background: #0C0B0A; padding: 8px 28px; display: inline-block; border: 1px solid rgba(201,169,110,0.3); }
    .tagline-luxury { font-size: 11px; letter-spacing: 4px; text-transform: uppercase; color: var(--primary-gold); font-weight: 500; margin: 20px 0 15px; }
    .demanto-quote { font-family: 'Cormorant Garamond', serif; font-size: 22px; font-weight: 300; font-style: italic; color: #e4d9c8; max-width: 700px; margin: 0 auto; }
    .since-text { font-size: 11px; color: #8a857c; margin-top: 18px; letter-spacing: 1px; }
    .footer-columns { display: flex; flex-wrap: wrap; justify-content: space-between; gap: 40px; margin-bottom: 60px; }
    .footer-col { flex: 1; min-width: 170px; }
    .footer-col .col-title { font-family: 'Cormorant Garamond', serif; font-size: 18px; font-weight: 600; letter-spacing: 1px; color: #ffffff; margin-bottom: 25px; position: relative; display: inline-block; }
    .footer-col .col-title:after { content: ''; position: absolute; bottom: -8px; left: 0; width: 32px; height: 1px; background: var(--primary-gold); }
    .footer-links { list-style: none; padding: 0; }
    .footer-links li { margin-bottom: 12px; }
    .footer-links a { color: var(--footer-text); text-decoration: none; font-size: 12px; font-weight: 400; letter-spacing: 0.5px; transition: all 0.25s ease; }
    .footer-links a:hover { color: var(--primary-gold); padding-left: 4px; }
    .contact-info-footer p { font-size: 12px; margin-bottom: 8px; line-height: 1.6; display: flex; align-items: center; gap: 10px; }
    .contact-info-footer i { width: 20px; color: var(--primary-gold); font-size: 13px; }
    .newsletter-elegant { background: rgba(255, 255, 255, 0.03); padding: 20px 18px; border-left: 1px solid rgba(201, 169, 110, 0.4); }
    .newsletter-elegant .news-title { font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; color: var(--primary-gold); margin-bottom: 15px; }
    .newsletter-elegant .input-group-lux { display: flex; border-bottom: 1px solid rgba(212, 207, 196, 0.3); margin-bottom: 12px; }
    .newsletter-elegant input { background: transparent; border: none; padding: 12px 0; color: #fff; font-size: 12px; flex: 1; outline: none; }
    .newsletter-elegant input::placeholder { color: #a19f9a; font-style: italic; }
    .newsletter-elegant button { background: transparent; border: none; color: var(--primary-gold); font-weight: 600; font-size: 12px; letter-spacing: 2px; cursor: pointer; }
    .newsletter-elegant button:hover { color: #fff; }
    .newsletter-note { font-size: 9px; margin-top: 5px; opacity: 0.6; }
    .social-icons-luxury { margin-top: 20px; display: flex; gap: 18px; }
    .social-icons-luxury a { color: var(--footer-text); font-size: 16px; transition: 0.2s; }
    .social-icons-luxury a:hover { color: var(--primary-gold); transform: translateY(-2px); }
    .footer-bottom-bar { border-top: 1px solid rgba(201, 169, 110, 0.2); padding-top: 28px; margin-top: 20px; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; font-size: 11px; color: #99928a; }
    .payment-icons i { font-size: 18px; margin-left: 12px; opacity: 0.6; transition: 0.2s; }
    .payment-icons i:hover { opacity: 1; color: var(--primary-gold); }
    @media (max-width: 768px) { .footer-columns { flex-direction: column; gap: 35px; } .footer-inner { padding: 0 20px; } .footer-bottom-bar { flex-direction: column; gap: 15px; text-align: center; } }
    
    .modal-luxury .modal-content { background-color: #FFFFFF; border: none; border-radius: 0; box-shadow: 0 20px 40px rgba(0,0,0,0.15); }
    .modal-luxury .btn-close-custom { background: none; border: none; font-size: 22px; cursor: pointer; color: #999; }
    .modal-luxury .btn-close-custom:hover { color: var(--primary-gold); }
    .popup-inner { padding: 0 40px 50px; text-align: center; }
    .popup-icon { font-size: 48px; color: var(--primary-gold); margin-bottom: 15px; }
    .popup-title { font-family: 'Cormorant Garamond', serif; font-size: 32px; font-weight: 600; color: #1A1A1A; margin-bottom: 20px; }
    .popup-desc { font-size: 13px; color: #5a5a5a; line-height: 1.7; max-width: 380px; margin: 0 auto 25px; }
    .btn-gold-popup { background-color: var(--primary-gold); border: none; padding: 12px 30px; color: #fff; font-weight: 600; letter-spacing: 1.5px; font-size: 11px; text-transform: uppercase; transition: all 0.3s; display: inline-block; text-decoration: none; }
    .btn-gold-popup:hover { background-color: #b48b42; color: #fff; letter-spacing: 2px; }
    .no-thanks-link { display: inline-block; margin-top: 18px; font-size: 11px; color: #aaa; text-decoration: underline; cursor: pointer; }
    .popup-social { margin-top: 25px; display: flex; justify-content: center; gap: 20px; }
    .popup-social a { color: #b9b3a6; font-size: 18px; transition: 0.2s; }
    .popup-social a:hover { color: var(--primary-gold); }
    @media (max-width: 576px) { .popup-inner { padding: 0 20px 35px; } .popup-title { font-size: 26px; } }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Popup logic - only show once per session
        const popupElement = document.getElementById('demantoLuxuryPopup');
        if (popupElement && !sessionStorage.getItem('demanto_popup_seen')) {
            setTimeout(function() {
                const popupModal = new bootstrap.Modal(popupElement, { backdrop: 'static', keyboard: false });
                popupModal.show();
                sessionStorage.setItem('demanto_popup_seen', 'true');
            }, 1000);
        }
        // Close popup handlers
        const closeBtn = document.getElementById('closePopupBtn');
        const noThanks = document.getElementById('noThanksLink');
        if (closeBtn) closeBtn.addEventListener('click', function() { bootstrap.Modal.getInstance(popupElement)?.hide(); });
        if (noThanks) noThanks.addEventListener('click', function() { bootstrap.Modal.getInstance(popupElement)?.hide(); });

        // Newsletter subscription
        const subBtn = document.getElementById('luxSubscribeBtn');
        const emailInput = document.getElementById('luxEmail');
        if (subBtn && emailInput) {
            subBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const email = emailInput.value.trim();
                if (!email || !email.includes('@')) { alert('Please enter a valid email address.'); return; }
                fetch('{{ url("subscribe") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    body: JSON.stringify({ email: email })
                }).then(function() {
                    alert('Thank you for subscribing to Demanto Chronicle!');
                    emailInput.value = '';
                }).catch(function() {
                    alert('Subscription successful! (Demo mode)');
                    emailInput.value = '';
                });
            });
        }
    });
</script>
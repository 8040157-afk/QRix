      <footer class="footer" id="footer">
<p class="contact-title">
  Contact us via Telegram or WhatsApp
</p>
<div class="contact-buttons">

  <a href="https://t.me/QRixCommunity" target="_blank" aria-label="Telegram" class="contact-icon">
    <svg width="44" height="44" viewBox="0 0 240 240" xmlns="http://www.w3.org/2000/svg">
      <circle cx="120" cy="120" r="120" fill="#229ED9"/>
      <path fill="#fff" d="M179.5 67.6L53.6 116.3c-5.5 2.2-5.4 9.9.2 11.9l31.9 11.2 12.2 38.3c1.7 5.3 8.3 6.9 12.2 2.9l17.9-18.4 35.2 26c4.9 3.6 11.9 1 13.2-4.9l22.5-106.3c1.3-6.2-4.9-11.4-10.7-9.4z"/>
    </svg>
  </a>

  <a href="https://chat.whatsapp.com/KY1cQXZKN7Z9GlAPAXjm2T?mode=gi_t target="_blank" aria-label="WhatsApp" class="contact-icon">
    <svg width="44" height="44" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
      <circle cx="16" cy="16" r="16" fill="#25D366"/>
      <path fill="#fff" d="M23.6 18.6c-.4-.2-2.3-1.1-2.7-1.3-.4-.1-.6-.2-.9.2-.3.4-1 1.3-1.2 1.5-.2.2-.5.3-.9.1-.4-.2-1.6-.6-3-1.8-1.1-1-1.8-2.2-2-2.6-.2-.4 0-.6.2-.8.2-.2.4-.5.6-.7.2-.2.3-.4.4-.7.1-.3 0-.5 0-.7 0-.2-.9-2.1-1.2-2.8-.3-.7-.6-.6-.9-.6h-.8c-.3 0-.7.1-1 .5-.3.4-1.3 1.3-1.3 3.2s1.4 3.7 1.6 4c.2.3 2.8 4.3 6.9 6 1 .4 1.8.7 2.4.9 1 .3 1.9.3 2.6.2.8-.1 2.3-.9 2.6-1.8.3-.9.3-1.7.2-1.8-.1-.2-.3-.3-.7-.5z"/>
    </svg>
  </a>

</div>


      </footer>

    <button class="scroll-to-top" id="scrollToTop" type="button" aria-label="Scroll to top">
      <span aria-hidden="true">↑</span>
    </button>

    <script>
      const scrollButton = document.getElementById("scrollToTop");
      const heroSection = document.getElementById("hero");

      const toggleScrollButton = () => {
        const heroBottom = heroSection.getBoundingClientRect().bottom;
        scrollButton.classList.toggle("is-visible", heroBottom < 0);
      };

      window.addEventListener("scroll", toggleScrollButton, { passive: true });
      window.addEventListener("resize", toggleScrollButton);
      toggleScrollButton();

      scrollButton.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    </script>

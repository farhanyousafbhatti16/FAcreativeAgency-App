 <!-- jQuery js -->
 <script src="js/plugins/jquery.min.js"></script>
 <!-- swup js -->
 <script src="js/plugins/swup.min.js"></script>
 <!-- swiper js -->
 <script src="js/plugins/swiper.min.js"></script>
 <!-- fancybox js -->
 <script src="js/plugins/fancybox.min.js"></script>
 <!-- gsap js -->
 <script src="js/plugins/gsap.min.js"></script>
 <!-- scroll smoother -->
 <script src="js/plugins/smooth-scroll.js"></script>
 <!-- scroll trigger js -->
 <script src="js/plugins/ScrollTrigger.min.js"></script>
 <!-- scroll to js -->
 <script src="js/plugins/ScrollTo.min.js"></script>
 <!-- F&A Creative Agency js -->
 <script src="js/main.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


   
  <script>
    document.getElementById("whatsappForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let contact = document.getElementById("contact").value;
        let message = document.getElementById("message").value;

        let whatsappMessage = `Hello, my name is ${name}.
Email: ${email}
Contact: ${contact}
Message: ${message}`;

        let whatsappURL = `https://wa.me/923325106196?text=${encodeURIComponent(whatsappMessage)}`;

        window.open(whatsappURL, "_blank");
    });
</script>
// Automatic change banner
document.addEventListener("DOMContentLoaded", () => {
    let currentSlide = 0;
    const slides = document.getElementsByName("slides");
    const totalSlides = slides.length;

    const showNextSlide = () => {
        slides[currentSlide].checked = false;
        currentSlide = (currentSlide + 1) % totalSlides;
        slides[currentSlide].checked = true;
    };

    setInterval(showNextSlide, 15000);
});


(function () {
    var options = {
        whatsapp: "+91-9999470620", // WhatsApp number
        email: "support@gramscs.com", // Email
        sms: "+91-9999470620", // SMS phone number
        call: "+91-9999470620", // Call phone number
        company_logo_url: "https://www.gramscs.com/images/logo.jpg", // URL of company logo (png, jpg, gif)
        greeting_message: "Connect with Gram Experts. Connect with us for any assistance.", // Text of greeting message
        call_to_action: "Connect with us", // Call to action
        button_color: "#E74339", // Color of button
        position: "left", // Position may be 'right' or 'left'
        order: "whatsapp,sms,call,email" // Order of buttons
    };
    var proto = document.location.protocol,
        host = "whatshelp.io",
        url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
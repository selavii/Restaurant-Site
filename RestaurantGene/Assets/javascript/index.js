document.addEventListener('DOMContentLoaded', function() {
    var button = document.querySelector('.description-button');
    var sectionDescription = document.querySelector('.section-description');

    button.addEventListener('click', function() {
        
        sectionDescription.innerHTML = '';

        
        var iframe = document.createElement('iframe');
        
        iframe.setAttribute('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2583.3900743220513!2d22.95507271571222!3d39.36627497950038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1a0b5c09d33d3%3A0x469d0a4df29a84a!2sVolos%20383%2034!5e0!3m2!1sen!2sgr!4v1647340261260!5m2!1sen!2sgr');
        iframe.setAttribute('width', '600');
        iframe.setAttribute('height', '450');
        iframe.setAttribute('style', 'border: 0; margin-top: 110px;'); // Added margin-top
        iframe.setAttribute('allowfullscreen', '');

       
        sectionDescription.appendChild(iframe);
    });
});




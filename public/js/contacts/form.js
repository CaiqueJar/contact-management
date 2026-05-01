const contactInput = document.getElementById('contact');

contactInput.addEventListener('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '').slice(0, 9);
}); 

const contactForm = document.querySelector('.contact-form');

contactForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const contactValue = contactInput.value;
    let submit = true;

    if (contactValue.length !== 9) {
      const errorMessage = document.querySelector('.form-group.contact .input-error');
      errorMessage.textContent = 'Contact must be exactly 9 digits.';
      submit = false;
    }

    const nameValue = document.getElementById('name').value;
    if(nameValue.length <= 5) {
        const errorMessage = document.querySelector('.form-group.name .input-error');
        errorMessage.textContent = 'Name must be at least 6 characters long.';
        submit = false;
    }

    if(submit) {
      this.submit();
    }
});
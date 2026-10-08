function validateContactForm() {
    let name = document.querySelector("#fullName").value.trim();
    let email = document.querySelector("#email").value.trim();
    let subject = document.querySelector("#subject").value;
    let message = document.querySelector("#message").value.trim();
    let state = true;
     
    if (name === "") {
        document.querySelector("#nameError").textContent = "مهرباني وکړی خپل نوم ولیکی";
        state = false;
    } 
    let emailPattern = RegExp(/^[^\s@]+@[^\s@]+\.[^\s@]+$/);
    if (!emailPattern.test(email)) {
        document.querySelector("#emailError").textContent = "لطفا یو صحیح ایمیل ادرس ولیکی";
        state = false;
    } 
    if (subject === "") {
        document.querySelector("#subjectError").textContent = "لطفا د اړیکې موضوع غوره کړی";
        state = false;
    } 
    if (message.length < 10) {
        document.querySelector("#messageError").textContent = "پیغام باید لږ تر لږه ۱۰ توري وي.";
        state = false;
    } 
    if (state){
        localStorage.setItem("contact_name", name);
        localStorage.setItem("contact_email", email);
        localStorage.setItem("contact_subject", subject);
        localStorage.setItem("contact_message", message);

        sessionStorage.setItem("contact_name", name);
        sessionStorage.setItem("contact_email", email);
        sessionStorage.setItem("contact_subject", subject);
        sessionStorage.setItem("contact_message", message);

        document.querySelector("#bankContactForm").style.display = "none";
        document.querySelector("#successMessage").style.display = "block";      
    }
}

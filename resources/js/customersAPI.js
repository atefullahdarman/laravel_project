async function show_customer_info(){
    let response = await fetch("https://dummyjson.com/users");
    let data = await response.json();
    let customers = data.users;
    
    let customersContainer = document.querySelector(".customers_container");
    for(let items of customers){
        let card = document.createElement("div");
        card.classList.add("customer_card");

        let image = document.createElement("img");
        image.src = items.image;
        image.alt = items.firstName;
        image.classList.add("customer_image");

        let firstName = document.createElement("h3");
        firstName.textContent = items.firstName;

        let email = document.createElement("p");
        email.textContent = items.email;

        let phone = document.createElement("p");
        phone.textContent = items.phone;

        let gender = document.createElement("p");
        gender.textContent = items.gender;
        gender.classList.add("gender");

        let company = document.createElement("p");
        company.textContent = items.company.name;
        company.classList.add("company");

        card.append(image, firstName, email, phone, gender, company);
        customersContainer.append(card);
    }
}
show_customer_info();
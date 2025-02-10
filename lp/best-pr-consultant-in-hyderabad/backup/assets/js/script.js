// Used bootstrap v4.5,jquery v3.5.1, owl carousel v2, font awesome v4.7.0
 $(document).ready(function(){
  $("#testimonial-slider").owlCarousel({
      items:2,
      itemsDesktop:[1000,1],
      itemsDesktopSmall:[979,1],
      itemsTablet:[768,1],
      pagination:false,
      navigation:false,
      navigationText:["",""],
      autoPlay:true
  });
});

 const indianCities = [
    "Andaman and Nicobar Island", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh",
    "Chhattishgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana",
    "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra","Manipur",
    "Meghalaya","Mizoram","Nagaland","Odisha", "Puducherry", "Punjab" ,"Rajasthan" ,"Sikkim", "Tamil Nadu", "Telangana" , "Tripura",
    "Uttar Pradesh" , "Uttarakhand" , "West Bengal"
  ];

  const cityDropdown = document.getElementById("cityDropdown");

  // Function to populate the dropdown with city options
  function populateDropdown() {
    for (const city of indianCities) {
      const option = document.createElement("option");
      option.value = city;
      option.textContent = city;
      cityDropdown.appendChild(option);
    }
  }
  function setDefaultCity() {
    cityDropdown.value = indianCities[0];
  }
  // Call the function to populate the dropdown on page load
  populateDropdown();
  setDefaultCity();


  const counteries = [
    "Canada" , "Australia"
  ];

  const countryDropdown = document.getElementById("countryDropdown");

  // Function to populate the dropdown with city options
  function populateCountryDropdown() {
    for (const country of counteries) {
      const option = document.createElement("option");
      option.value = country;
      option.textContent = country;
      countryDropdown.appendChild(option);
    }
  }
  function setDefaultCountry() {
    countryDropdown.value = counteries[0];
  }
  // Call the function to populate the dropdown on page load
  populateCountryDropdown();
  setDefaultCountry();

const cityInput = document.querySelector(".city-input");
const searchButton = document.querySelector(".search-btn");
const locationButton = document.querySelector(".location-btn");
const currentWeatherDiv = document.querySelector(".current-weather");
const weatherCardsDiv = document.querySelector(".weather-cards");
const decisionElement = document.getElementById("decision");
const scrollingText = document.querySelector(".scrolling-text");

const phrases = ["Choisissez votre ville", "Utiliser votre position actuelle", "Vérifier si vous devez arroser vos plantes"];
let currentPhraseIndex = 0;

const API_KEY = "750018e493f5f8e53ba954514cd3fe5f"; // API key for OpenWeatherMap API

const createWeatherCard = (cityName, weatherItem, index) => {
  if (index === 0) { // HTML for the main weather card
    return `<div class="details">
              <h2>${cityName} (${weatherItem.dt_txt.split(" ")[0]})</h2>
              <h6>Température: ${(weatherItem.main.temp - 273.15).toFixed(2)}°C</h6>
              <h6>Vent: ${weatherItem.wind.speed} M/S</h6>
              <h6>Humidité: ${weatherItem.main.humidity}%</h6>
            </div>
            <div class="icon">
              <img src="https://openweathermap.org/img/wn/${weatherItem.weather[0].icon}@4x.png" alt="weather-icon">
              <h6>${weatherItem.weather[0].description}</h6>
            </div>`;
  } else { // HTML for the other five day forecast card
    return `<li class="card">
              <h3>(${weatherItem.dt_txt.split(" ")[0]})</h3>
              <img src="https://openweathermap.org/img/wn/${weatherItem.weather[0].icon}@4x.png" alt="weather-icon">
              <h6>Temp: ${(weatherItem.main.temp - 273.15).toFixed(2)}°C</h6>
              <h6>Vent: ${weatherItem.wind.speed} M/S</h6>
              <h6>Humidité: ${weatherItem.main.humidity}%</h6>
            </li>`;
  }
}

const getWeatherDetails = (cityName, latitude, longitude) => {
    const WEATHER_API_URL = `https://api.openweathermap.org/data/2.5/forecast?lat=${latitude}&lon=${longitude}&appid=${API_KEY}&lang=fr`;
  
    fetch(WEATHER_API_URL).then(response => response.json()).then(data => {
      // Filter the forecasts to get only one forecast per day
      const uniqueForecastDays = [];
      const fiveDaysForecast = data.list.filter(forecast => {
        const forecastDate = new Date(forecast.dt_txt).getDate();
        if (!uniqueForecastDays.includes(forecastDate)) {
          return uniqueForecastDays.push(forecastDate);
        }
      });
  
      // Clearing previous weather data
      cityInput.value = "";
      currentWeatherDiv.innerHTML = "";
      weatherCardsDiv.innerHTML = "";
  
      // Creating weather cards and adding them to the DOM
      fiveDaysForecast.forEach((weatherItem, index) => {
        const html = createWeatherCard(cityName, weatherItem, index);
        if (index === 0) {
          currentWeatherDiv.insertAdjacentHTML("beforeend", html);
        } else {
          weatherCardsDiv.insertAdjacentHTML("beforeend", html);
        }
      });
  
      // Determine watering decision based on weather
      const shouldWater = determineWatering(fiveDaysForecast);
      displayWateringDecision(shouldWater);
  
    }).catch(() => {
      alert("An error occurred while fetching the weather forecast!");
    });
  }
  
  const determineWatering = (forecast) => {
    // Custom logic to determine if watering is needed
    // For simplicity, let's say we don't water if there's rain in the forecast
    return !forecast.some(item => item.weather[0].main.toLowerCase().includes("rain"));
  }
  
  const displayWateringDecision = (shouldWater) => {
    if (shouldWater) {
      decisionElement.innerHTML = "<span class='yes'>Yes</span>";
    } else {
      decisionElement.innerHTML = "<span class='no'>No</span>";
    }
  }
  
  const getCityCoordinates = () => {
    const cityName = cityInput.value.trim();
    if (cityName === "") return;
    const API_URL = `https://api.openweathermap.org/geo/1.0/direct?q=${cityName}&limit=1&appid=${API_KEY}&lang=fr`;
  
    // Get entered city coordinates (latitude, longitude, and name) from the API response
    fetch(API_URL).then(response => response.json()).then(data => {
      if (!data.length) return alert(`No coordinates found for ${cityName}`);
      const { lat, lon, name } = data[0];
      getWeatherDetails(name, lat, lon);
    }).catch(() => {
      alert("An error occurred while fetching the coordinates!");
    });
  }
  
  const getUserCoordinates = () => {
    navigator.geolocation.getCurrentPosition(
      position => {
        const { latitude, longitude } = position.coords; // Get coordinates of user location
        // Get city name from coordinates using reverse geocoding API
        const API_URL = `https://api.openweathermap.org/geo/1.0/reverse?lat=${latitude}&lon=${longitude}&limit=1&appid=${API_KEY}&lang=fr`;
        fetch(API_URL).then(response => response.json()).then(data => {
          const { name } = data[0];
          getWeatherDetails(name, latitude, longitude);
        }).catch(() => {
          alert("An error occurred while fetching the city name!");
        });
      },
      error => { // Show alert if user denied the location permission
        if (error.code === error.PERMISSION_DENIED) {
          alert("Geolocation request denied. Please reset location permission to grant access again.");
        } else {
          alert("Geolocation request error. Please reset location permission.");
        }
      });
  }
  
  // Function to change the header text and color
  const changeHeaderText = () => {
    currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
    scrollingText.textContent = phrases[currentPhraseIndex];
  }
  
  locationButton.addEventListener("click", getUserCoordinates);
  searchButton.addEventListener("click", getCityCoordinates);
  cityInput.addEventListener("keyup", e => e.key === "Enter" && getCityCoordinates());
  setInterval(changeHeaderText, 5000); // Change header text every 5 seconds
  
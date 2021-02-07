const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
	/*  yadi local storage ma cooki save xa bhanye again display gardina refresh garda browser..
	 below condition use garyema.. */
 

  /* if (!localStorage.getItem("cookieBannerDisplayed")) */

   {
    cookieContainer.classList.add("active");
  }
}, 2000);



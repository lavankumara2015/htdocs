const animationBoxEl = document.querySelector(".why-cion__animation-box");
const movingEl = document.querySelectorAll(".why-cion__center-box");

const centerEl = document.querySelector(".why-cion__center");

let isVisible = false;

function updateAnimation() {
  if (isVisible) {
    if (window.innerWidth <= 768) {
      animationBoxEl.style.width = "18.81rem";
      animationBoxEl.style.height = "12.245rem";
      // animationBoxEl.style.visibility = "visible";
      animationBoxEl.style.opacity = "1";
      return;
    }
    animationBoxEl.style.width = "26.58490566037736rem";
    animationBoxEl.style.height = "12.245rem";
    // animationBoxEl.style.visibility = "visible";
    animationBoxEl.style.opacity = "1";
  } else {
    animationBoxEl.style.width = "50%";
    animationBoxEl.style.height = "50%";
    // animationBoxEl.style.visibility = "hidden";
    animationBoxEl.style.opacity = "0";
  }
}

updateAnimation();

function displayPopup() {
  const popupContainer = `
        <button class="popupbtn1" onclick="closeVideo()"><img src="assets/CancelButtonSmallDevices.webp" alt="cancel-button-icon" /></button>
        <button class="popupbtn2" onclick="closeVideo()"><img src="assets/Cancel.webp" alt="cancel-button-icon" /></button>
        <div class="popup-container">
        <img src="assets/popupBanner.webp" alt="" />
        <div class="popup__text__container">
            <h3>To Know More About The Doctor</h3>
            <form method="POST" action="components/formData.php">
                <input name="username" required pattern="[A-Za-z ]{3,}" minlength="3" maxlength="25" title="Please enter at least 3 alphabetic characters" type="text" placeholder="Enter Your Name Here" name="name" />
                <input name="userPassword" type="tel" required minlength="10" maxlength="14" title="Minimum 10 Numbers Required" placeholder="Enter Your Phone Number Here" name="phone" />
                <button type="submit">Submit</button>
                <label >Call us at:</label>
            <a href="tel:1800 120 2676"><button type="button">1800 120 2676</button></a>
            </form>
        </div>
    </div>
`;

  Swal.fire({
    html: popupContainer,
    width: "100%",
    padding: "0px",
    showCloseButton: false,
    showConfirmButton: false,
  });
}

function closeVideo() {
  Swal.close(); 
}

window.addEventListener("resize", (event) => {
  updateAnimation();
});

const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.5,
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      isVisible = true;
      updateAnimation();
    } else {
      isVisible = false;
      updateAnimation();
    }
  });
}, options);

observer.observe(centerEl)
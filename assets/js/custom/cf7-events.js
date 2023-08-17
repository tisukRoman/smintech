/*
 * CONTACT FORM 7 EVENTS
 */

/*
 * Download File when submit "Learn More" contact form
 */
const downloadFile = () => {
  var link = document.createElement("a");
  link.setAttribute("download", "smintech-file");
  document.body.appendChild(link);
  link.href =
    "http://localhost:3000/wp-content/themes/smintech/assets/img/hero.png";
  link.click();
};

const learnMoreForm = document.querySelector("#learn-more .wpcf7");

learnMoreForm.addEventListener("wpcf7mailsent", (e) => {
  downloadFile();
  $("#learn-more").fadeOut(500);
});

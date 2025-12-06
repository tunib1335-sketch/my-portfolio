document.addEventListener('DOMContentLoaded', () => {
  const contactForm = document.querySelector('#contactForm');

  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Thank you for your message! I will get back to you soon.');
    contactForm.reset();
  });
});

document.getElementById("downloadPDF").addEventListener("click", () => {
    const element = document.body;
    const options = {
        margin: 10,
        filename: "Portfolio.pdf",
        image: { type: "jpeg", quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: "mm", format: "a4", orientation: "portrait" }
    };
    html2pdf().from(element).set(options).save();
});

document.getElementById("downloadPage").addEventListener("click", () => {
    const element = document.documentElement.outerHTML;
    const blob = new Blob([element], { type: "text/html" });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "MyPortfolio.html";
    link.click();
});
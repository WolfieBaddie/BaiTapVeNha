

const productCopy = document.querySelector(".product-copy");
const productImage = document.querySelector(".product-img img");
const productVariants = document.querySelectorAll('.product-vars img');



productVariants.forEach(image => {
  image.addEventListener('click', function() {
    // Remove 'selected' class from all variants (optional)
    productVariants.forEach(variant => variant.classList.remove('selected'));

    // Add 'selected' class to the clicked variant (optional)
    this.classList.add('selected');

    // Update main image based on variant selection
    productImage.src = this.src; // Update image directly from clicked variant

    // Permanently disable scroll event listener for image updates
    updateImageOnScroll = false;
  });
});  

  document.addEventListener("DOMContentLoaded", function(){
    function randomCharacter() {
        const chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return chars[Math.floor(Math.random() * chars.length)];

    }

    function setInitialDataTextAttribute() {
        const paragraphs = document.querySelectorAll("p");
        paragraphs.forEach((p) => {
          const textContent = p.textContent.trim();
      
          // Check if the paragraph doesn't have a data-text attribute and has text content
          if (!p.getAttribute("data-text") && textContent) {
            // Check if the paragraph doesn't have the class "highlight"
            if (!p.classList.contains("highlight")) {
              p.setAttribute("data-text", textContent);
              p.textContent = "";
            }
          }
        });
      } 

     function revealedText(element)
    {
        const originalText = element.getAttribute("data-text");
        let revealedText = "";
        let index = 0;
        function revealNextLetter(){
            if(index < originalText.length){
                revealedText += originalText[index];
                let tempText = revealedText;
    
                for(let i = index + 1; i<originalText.length; i++){
                    tempText += randomCharacter();
                }
                element.textContent = tempText;
                index++;
    
                setTimeout(revealNextLetter, 15);
    
            } else{
                element.textContent = originalText;
            }
            
        }
        revealNextLetter();
    } 
    setInitialDataTextAttribute();
    const paragraphs = document.querySelectorAll("p[data-text]");
    paragraphs.forEach((p) =>{
    revealedText(p);
});
        }); 
    





gsap.from(".nav", {
    duration: 0.5,
    y: -50,
    delay: 0,
});

gsap.from(".product-img", {
    duration: 0.5,
    x:-100,
    opacity: 0,
    delay: 0.5,
});

gsap.from(".product-vars img",{
    duration: 0.5,
    y: 50,
    opacity: 0,
    stagger: 0.2,
    delay: 0.75
}); 




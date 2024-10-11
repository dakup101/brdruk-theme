export default () => {
    /*Get all anchor links, you can be more specific or use a classname to be sure it only selects the links you want.*/
let lnks = document.querySelectorAll('a[href*="#"]') as NodeListOf<HTMLAnchorElement>;

/*Loop through each link to add the click event*/
for (let i = 0; i < lnks.length; i++) {
    lnks[i].onclick = function(e){
        e.preventDefault();
        let  b = this as HTMLElement; 
            
        let c = b.getAttribute("href").substring(1); 
        let el = document.querySelector('[id="'+c+'"]') as HTMLElement;
        /*scroll to that position*/
        window.scrollTo({
            top: el.offsetTop - 180, 
            behavior: "smooth"
        });

        document.querySelector(".header__mobile-nav").classList.remove("active");
    };
}
}
class MobileNavBar{
    
    /**
     * Metodo responsavel por referenciar os atributos da mesma 
     * @param {*} mobileMenu 
     * @param {*} navList 
     * @param {*} navLinks 
     */
    constructor(mobileMenu,navList,navLinks){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        //METEDO PARA REALIZAR O BIND E ASSIM MANTER A REFERENCIA A CLASSE
        this.handleClick = this.handleClick.bind(this);

    }

    /**
     * Metedo responsavel por animar os links do nav bar
     */
    animateLinks(){
        this.navLinks.forEach((link, index) => {
            link.style.animation ? (link.style.animation = "") : (link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`);
        });
    }

    /**
     * Metedo responsavel por executar o evento click
     */
    handleClick(){
        console.log(this);
        this.navList.classList.toggle(this.activeClass);

        //ANIMACAO MOBILE MENU
        this.mobileMenu.classList.toggle(this.activeClass);

        //ANIMACAO DE LINKS 
        this.animateLinks();

    }

   /**
    * Metodo responsavel por adicionar um evento ao botao do menu
    */
    addClickEvent(){
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init(){
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }   
}


const mobiNavbar = new MobileNavBar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);

mobiNavbar.init();
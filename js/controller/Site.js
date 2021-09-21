


class Site {

    constructor(){


        this.btnSearch = document.getElementById("btn-search");
        this.inputSearch = document.querySelector(".search");
        this.logo = document.querySelector(".logo");
        this.divLogin = document.querySelector(".login");
        this.btnMenu = document.querySelector('.icons-menu');
        this.navBar = document.querySelector(".nav-bar");
        this.closeSearch = document.querySelector(".close-search");
        this.initEvents();
        this.elementsPrototype();

    }


    elementsPrototype(){

        Element.prototype.hide = function(){

            this.style.display = 'none';
            return this;

        }

        Element.prototype.show = function (){

            this.style.display = 'block';
            return this;

        }

        Element.prototype.toggle = function(){

            this.style.display = (this.style.display == 'none') ? 'block' : 'none';
            return this;

        }

        Element.prototype.addClass = function(name){

            this.classList.add(name);
            return this;

        }

        Element.prototype.addClassAnimated = function(name, animation){

            this.classList.add(name, animation);
            return this;

        }


        Element.prototype.removeClass = function(name){

            this.classList.remove(name);
            return this;

        }

        Element.prototype.toggleClass = function(name){

            this.classList.toggle(name);
            return this;

        }


    }


    initEvents(){


        this.btnSearch.addEventListener("click", ()=>{

          
            this.inputSearch.addClassAnimated('animate__animated', 'animate__fadeInLeft');
            this.inputSearch.show();
            this.logo.hide();
            this.divLogin.hide();
            this.closeSearch.show();
            

        });


        this.closeSearch.addEventListener("click", ()=>{
            this.inputSearch.hide();
            this.logo.show();
            this.divLogin.show();
            this.closeSearch.hide();


        })


        this.btnMenu.addEventListener("click", ()=> {
            this.navBar.toggle();
            this.navBar.addClassAnimated("animate__animated", "animate__slideInLeft");
            

        })

    }


}
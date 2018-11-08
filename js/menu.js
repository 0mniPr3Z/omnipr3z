(function(){

	var button = document.getElementById('cn-button'),
    wrapper = document.getElementById('cn-wrapper'),
	logo = document.getElementById('logo-all'),
	section1 = document.getElementById('section1'),
	section2 = document.getElementById('section2'),
	section3 = document.getElementById('section3'),
	section4 = document.getElementById('section4'),
	section5 = document.getElementById('section5'),
	section6 = document.getElementById('section6'),
	section7 = document.getElementById('section7'),
	contenu = document.getElementById('contenu');

    //open and close menu when the button is clicked
	var open = false;
	var open1 = false;
	button.addEventListener('click', handler, false);
	section1.addEventListener('click', sect1, false);
	/*section2.addEventListener('click', sect2, false);
	section3.addEventListener('click', sect3, false);
	section4.addEventListener('click', sect4, false);
	section5.addEventListener('click', sect5, false);
	section6.addEventListener('click', sect6, false);
	section7.addEventListener('click', sect7, false);*/
	
	//=============================
	function sect1(){
	  if(!open1){
		//closeSect2();
	    logo.className= 'logo-hidden';
		contenu1.className='contenu-visible';
		open1 = true;
	  }else{
		closeSect1();
		
	  }
	}
	
	function closeSect1(){
		logo.className='logo-visible';
		contenu1.className='contenu-hidden';
		closeWrapper();
		open1 = false;
	}
	//=============================================
	function handler(){
	  if(!open){
	    this.innerHTML = '<img src="img/logo/2.png" alt="">';
	    classie.add(wrapper, 'opened-nav');
		open = true;
	  }
	  else{
		closeWrapper();
		if(open1){
			closeSect1();
		}
	  }
	}
	function closeWrapper(){
		button.innerHTML = '<div><img src="img/logo/1.gif" alt=""></div>';
		classie.remove(wrapper, 'opened-nav');
		open = false;
	}

})();

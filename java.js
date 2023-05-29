const header = document.querySelector("header");

window.addEventListener ("scroll", function(){
    header.classList.toggle ("sticky", this.window.scrollY > 0);
})

  
    let x=document.getElementById('login');
		let y=document.getElementById('register');
		let z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	
        let modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }

    function updatePlaceholder(selectedOption) {
    let inputField1 = document.getElementById('input-field1');
    let inputField2 = document.getElementById('input-field2');
    let inputField3 = document.getElementById('input-field3');
    let inputField4 = document.getElementById('input-field4');
    let inputField5 = document.getElementById('input-field5');
    let inputField6 = document.getElementById('input-field6');

    if (selectedOption === 'supplier') {
      inputField1.placeholder = 'supplier_name';
      inputField2.placeholder = 'email';
      inputField4.placeholder = 'contact_number';
      inputField3.placeholder = 'supplier_address';
      inputField5.placeholder = 'Password';
      inputField6.placeholder = 'Confirm Password';

    } else{
      inputField1.placeholder = 'customer_name';
      inputField2.placeholder = 'email';
      inputField4.placeholder = 'contact_number';
      inputField3.placeholder = 'shipping_address';
      inputField5.placeholder = 'Password';
      inputField6.placeholder = 'Confirm Password';
    } 
  }

  let searchBox = document.querySelector('.search-box');
let searchInput = document.querySelector('#search-input');
let searchIcon = document.querySelector('#search-icon');
let closeIcon = document.querySelector('#close-icon');

searchIcon.onclick = () => {
  searchBox.classList.add('active');
  searchInput.focus();
  searchIcon.style.display = 'none';
  closeIcon.style.display = 'block';
}

closeIcon.onclick = () => {
  searchBox.classList.remove('active');
  searchInput.value = '';
  searchIcon.style.display = 'block';
  closeIcon.style.display = 'none';
}

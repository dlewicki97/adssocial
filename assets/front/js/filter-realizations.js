function sortRealizations(sort) {
	let items = [...document.getElementsByClassName('owl-carousel1')[0].getElementsByClassName('owl-item')];

	items.forEach(item => {
		if(!sort) {
			item.style.display = 'block';
		} else {

			let realization = item.getElementsByClassName('realization')[0];
			if(!realization.classList.contains(sort)) item.style.display = 'none';
			else item.style.display = 'block';

			
			
		}
	})
	
}

let filterButtons = [...document.getElementsByClassName('filter')];

filterButtons.forEach(button => button.addEventListener('click', e => {
	let buttonEl = e.toElement;
	if(buttonEl.classList.contains('filtered')) {
		buttonEl.classList.remove('filtered');
		sortRealizations(false);
		return;
	}
	filterButtons.forEach(but => but.classList.remove('filtered'));
	buttonEl.classList.add('filtered');

	sortRealizations(buttonEl.innerText.toLowerCase().replaceAll(' ', '-'))
}))
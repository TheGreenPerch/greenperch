const helpForm = document.getElementById("helpForm");
const formMsgStatus = document.getElementById("formMsgStatus");

window.addEventListener("load", function () {
	helpForm.addEventListener("submit", function (e) {
		e.preventDefault();
		const form = e.target;

		// submit form data
		const data = new FormData(form);
		const action = e.target.action;

		formMsgStatus.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i>Please wait!';

		fetch(action, {
			method: 'POST',
			body: data,
		})

			.then(() => {
				helpForm.reset();
				formMsgStatus.innerHTML = '<i class="fa-solid fa-circle-check"></i>Your message has been sent!';
				setTimeout(() => {
					formMsgStatus.innerHTML = '';
				}, 3000);
			})

			.catch(() => {
				formMsgStatus.innerHTML = '<i class="fa-solid fa-circle-xmark"></i>Oops! Something went wrong. Please try again!';
				setTimeout(() => {
					formMsgStatus.innerHTML = '';
				}, 3000);
			});
	});
});
const myBox = document.getElementById('myBox');
myBox.addEventListener("click", function(event){
	event.target.style.backgroundColor = "blue";
	event.target.innerHTML = "Diste Click";
})



 

	// const myBox = document.getElementById('myBox');
	// const myButton = document.getElementById('myButton')

	// myButton.addEventListener("click", event => {
	// 	event.target.style.backgroundColor = "tomato";
	// 	event.target.innerHTML = "OUCH! &#128546;";
	// });
	// myButton.addEventListener("mouseover", event => {
	// 	event.target.style.backgroundColor = "yellow";
	// 	event.target.innerHTML = "dont do it! &#129299";
	// });
	// myButton.addEventListener("mouseout", event => {
	// 	event.target.style.backgroundColor = "lightgreen";
	// 	event.target.innerHTML = "Click Me! &#128512;";
	// });
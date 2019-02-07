function printContact(contact){
	var contactList = document.getElementById("contact-list");
// <li class="list-group-item">
	var contactListItem = document.createElement("li");
	contactListItem.setAttribute("class", "list-group-item");
	// contactListItem.setAttribute("name", "value");
	// contactListItem.innerHTML = "some text";

	contactList.appendChild(contactListItem);
//     <div class="row w-100">
	var rowDiv = document.createElement("div");
	rowDiv.setAttribute("class", "row w-100");
	contactListItem.appendChild(rowDIv);
//         <div class="col-12 col-sm-6 col-md-3 px-0">
	var pictureColumnDiv = document.createElement("div");
	pictureColumnDiv.setAttribute("class" , "col-12 col-sm-6 col-md-3 px-0")
	rowDiv.appendChild(pictureColumnDiv);
//             <img src="http://demos.themes.guide/bodeo/assets/images/users/m101.jpg" alt="Mike Anamendolla" class="rounded-circle mx-auto d-block img-fluid">
	var pictureImg = document.createElement("img");
//         </div>
//         <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
//             <span class="fa fa-mobile fa-2x text-success float-right pulse" title="online now"></span>
//             <label class="name lead">Mike Anamendolla</label>
//             <br>
//             <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5842 Hillcrest Rd"></span>
//             <span class="text-muted">5842 Hillcrest Rd</span>
//             <br>
//             <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(870) 288-4149"></span>
//             <span class="text-muted small">(870) 288-4149</span>
//             <br>
//             <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
//             <span class="text-muted small text-truncate">mike.ana@example.com</span>
//         </div>
//     </div>
// </li>
}
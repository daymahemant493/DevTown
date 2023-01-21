{
  /* 
  <ul class="list-group"> 
      <li class="list-group-item"> 
        <span class="center">
          <input type="checkbox" class="btn btn-primary btn-outline-success" id="btncheck1" />
          <input type="text" placeholder="ok" class="form-control" id="input1"/>
          <button class="btn btn-primary">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </span> 
      </li> 
    </ul> 
  */
}
var mainDiv = document.getElementById("mainDiv");

var Add = document.getElementById("button-addon2");

var Input = document.getElementById("Text1");

var mainSpan = document.querySelector(".float"); // <span class="float"></span>

Add.addEventListener("click", () => {
  let Mydiv = document.createElement("div");
  mainDiv.appendChild(Mydiv);

  let ul = document.createElement("ul");
  ul.classList.add("list-group");
  Mydiv.appendChild(ul);

  // * creat li
  let li = document.createElement("li");
  li.classList.add("list-group-item");
  ul.appendChild(li);

  // * creat span
  let span = document.createElement("span");
  span.classList.add("center");
  li.appendChild(span);

  // * creat CheckBox
  let CheckBox = document.createElement("input");
  CheckBox.type = "checkbox";
  CheckBox.classList.add("btn,btn-primary,btn-outline-success");
  CheckBox.addEventListener("click", () => {
    if (input2.style.textDecoration !== "line-through") {
      input2.style.textDecoration = "line-through";
    } else {
      input2.style.textDecoration = "none";
    }
  });
  span.appendChild(CheckBox);

  // * create textBox
  let input2 = document.createElement("input");
  input2.type = "text";
  input2.classList.add("form-control");
  input2.value = Input.value; // * to transfer the value of one text to another
  Input.value = null; // * this will Remove all the value from the textBox
  span.appendChild(input2);

  // function removeStyle() {
  //   document.getElementsByClassName("form-control")[0].disabled = true;
  //document.querySelector(".form-control").removeAttribute("disabled");
  // }

  // * ceate Edit Button
  let Edit = document.createElement("input");
  Edit.type = "button";
  Edit.value = "Edit";
  Edit.classList.add("btn");
  Edit.classList.add("btn-primary");

  Edit.addEventListener("click", () => {
    Input.value = input2.value;
    input2.value = null;

    let NewSaveBtn = Edit.parentElement;
    NewSaveBtn = document.createElement("button");
    NewSaveBtn.innerHTML = "Save";
    NewSaveBtn.classList.add("btn");
    NewSaveBtn.classList.add("btn-primary");
    mainSpan.appendChild(NewSaveBtn);

    NewSaveBtn.addEventListener("click", () => {
      input2.value = Input.value;
      Input.value = null;
      NewSaveBtn.style.display = "none";
    });
  });
  span.appendChild(Edit);

  // * create Delete Button
  let Delete = document.createElement("input");
  Delete.type = "button";
  Delete.value = "Delete";
  Delete.classList.add("btn");
  Delete.classList.add("btn-danger");
  Delete.addEventListener("click", () => {
    let Remove = ul.parentElement;
    Remove.style.display = "none";
  });
  span.appendChild(Delete);
});

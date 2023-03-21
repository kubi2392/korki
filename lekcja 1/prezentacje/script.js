const selectjustyfy = document.getElementById("select-flex-justyfy");
const flexbox = document.getElementById("flex-box");
const code = document.getElementById("code");
const selectalign = document.getElementById("select-flex-align");
selectjustyfy.addEventListener("change", justyfy);
selectalign.addEventListener("change", align);

function justyfy() {
  flexbox.style = `align-items: ${selectalign.value};justify-content: ${selectjustyfy.value}`;
  codeInText();
}

function align() {
  flexbox.style = `align-items: ${selectalign.value};justify-content: ${selectjustyfy.value}`;
  codeInText();
}

function codeInText() {
  code.innerHTML = `.class&nbsp;&#123;<br>
  &nbsp;&nbsp;&nbsp;&nbsp;display: flex ;<br>
  &nbsp;&nbsp;&nbsp;&nbsp;align-items: ${selectalign.value} ;<br>
  &nbsp;&nbsp;&nbsp;&nbsp;justify-content: ${selectjustyfy.value} ;<br>
  &#125;`;
}

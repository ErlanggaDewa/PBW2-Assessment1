const textUpload = document.getElementById("info-upload");
const preview = document.getElementById("preview-img");

function showPreview(file) {
  const validType = ["image/jpeg", "image/jpg", "image/png"];

  if (validType.includes(file.type)) {
    const src = URL.createObjectURL(file);
    preview.src = src;
    preview.style.display = "block";

    textUpload.innerHTML = "";
  }
}

function uploadHandler(event) {
  if (event.target.files.length > 0) {
    const file = event.target.files[0];
    showPreview(file);
  }
}

const dropArea = document.getElementById("drop-area");
const border = document.getElementById("border-drop-area");

dropArea.addEventListener("dragover", (event) => {
  event.preventDefault();
  border.classList.add("border-gray-300");
  textUpload.innerHTML = "Release to Upload File";
});

dropArea.addEventListener("dragleave", (event) => {
  event.preventDefault();
  border.classList.remove("border-gray-300");
  textUpload.innerHTML = `Drag and drop
                      files here
                      <br>
                      or select a file from your computer`;
});

dropArea.addEventListener("drop", (event) => {
  event.preventDefault();
  textUpload.innerHTML = ``;
  const file = event.dataTransfer.files[0];
  showPreview(file);
});

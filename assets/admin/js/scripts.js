

// // Validar envío de imagenes
// document.getElementById('form-properties').addEventListener('submit', function(event) {
//   const files = document.getElementById('images').files;
//   const allowedExtensions = ['jpg', 'jpeg', 'png'];
//   for (let i = 0; i < files.length; i++) {
//       const fileExtension = files[i].name.split('.').pop().toLowerCase();
//       if (!allowedExtensions.includes(fileExtension)) {
//           alert('Solo se permiten archivos JPG, JPEG y PNG.');
//           event.preventDefault();
//           return;
//       }
//   }
// });
//Boton resetear imagenes
// document.getElementById('cancelButton').addEventListener('click', function() {
//   const inputField = document.getElementById('images');
//   inputField.value = "";
// });

//Tags caracteristicas internas
document.addEventListener('DOMContentLoaded', function() {
  const tagInput = document.getElementById('caracteristicas-i');
  const tagsContainer = document.getElementById('tags-i');
  let tags = [];

  tagInput.addEventListener('keypress', function(event) {
      if (event.key === 'Enter') {
          const tagText = tagInput.value.trim();
          if (tagText && !tags.includes(tagText)) {
              tags.push(tagText);
              addTag(tagText);
              tagInput.value = '';
          }
      }
  });

  function addTag(text) {
      const tag = document.createElement('span');
      tag.classList.add('btn', 'btn-block', 'btn-success', 'w-auto', 'mt-0', 'ml-2');
      tag.textContent = text;

      const closeBtn = document.createElement('i');
      // closeBtn.textContent = '  x';
      closeBtn.classList.add('fas', 'fa-times', 'ml-2');
      closeBtn.onclick = function() {
          tags = tags.filter(t => t !== text);
          tagsContainer.removeChild(tag);
      };

      tag.appendChild(closeBtn);
      tagsContainer.appendChild(tag);
  }
});

//Tags caracteristicas externas
document.addEventListener('DOMContentLoaded', function() {
  const tagInput = document.getElementById('caracteristicas-externas');
  const tagsContainer = document.getElementById('tags-externas');
  let tags = [];

  tagInput.addEventListener('keypress', function(event) {
      if (event.key === 'Enter') {
          const tagText = tagInput.value.trim();
          if (tagText && !tags.includes(tagText)) {
              tags.push(tagText);
              addTag(tagText);
              tagInput.value = '';
          }
      }
  });

  function addTag(text) {
      const tag = document.createElement('span');
      tag.classList.add('btn', 'btn-block', 'btn-success', 'w-auto', 'mt-0', 'ml-2');
      tag.textContent = text;

      const closeBtn = document.createElement('i');
      // closeBtn.textContent = '  x';
      closeBtn.classList.add('fas', 'fa-times', 'ml-2');
      closeBtn.onclick = function() {
          tags = tags.filter(t => t !== text);
          tagsContainer.removeChild(tag);
      };

      tag.appendChild(closeBtn);
      tagsContainer.appendChild(tag);
  }
});
